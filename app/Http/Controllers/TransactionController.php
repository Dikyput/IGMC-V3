<?php

namespace App\Http\Controllers;

use App\Models\listsaldo;
use App\Models\Saldo;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Midtrans\Config;
use Midtrans\Notification;

class TransactionController extends Controller
{
    public function submitcart(Request $request)
    {
        $request->validate([
            'qty' => 'required|integer|min:1',
            'id_saldo' => 'required|string',
        ]);

        $user = Auth::user();
        $userData = User::where('id_discord', $user->id_discord);
        $saldo = listsaldo::where('id_saldo', $request->id_saldo)->firstOrFail();
        $quantity = $request->qty;
        $totalharga = $saldo->harga * $quantity;
        $order_id = rand();

        $transaction = Transaction::create([
            'user_id' => $user->id_discord,
            'id_saldo' => $saldo->id_saldo,
            'order_id' => $order_id,
            'nominal' => $saldo->nominal,
            'harga' => $saldo->harga,
            'qty' => $quantity,
            'total' => $totalharga,
            'status' => 'pending',
        ]);

        \Midtrans\Config::$serverKey = 'SB-Mid-server-3081_pPqoc96fayEHfvXxZdf';
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $order_id,
                'gross_amount' => $totalharga,
            ),
            'customer_details' => array(
                'username' => $userData->username,
                'email' => $userData->email,
                'nationaly' => $userData->nationaly,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        $transaction->snap_token = $snapToken;
        $transaction->save();

        return redirect()->back();
    }

    public function statusPending(Transaction $transaction)
    {
        $userId = Auth::user()->id_discord;
        $paysaldo = Transaction::where('user_id', $userId)
            ->where('status', 'pending')
            ->orderBy('id')
            ->distinct()
            ->get();
        return view('dashboard.topupsaldo.proses', compact('paysaldo', 'transaction'));
    }

    public function handleCallback(Request $request)
    {

        Config::$serverKey = 'SB-Mid-server-3081_pPqoc96fayEHfvXxZdf';
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $notification = new Notification();

        $transactionStatus = $notification->transaction_status;
        $orderId = $notification->order_id;
        $fraudStatus = $notification->fraud_status;

        $transaction = Transaction::where('order_id', $orderId)->first();

        if (!$transaction) {
            return response()->json(['message' => 'Transaction not found.'], 404);
        }

        if ($transactionStatus == 'capture') {
            if ($fraudStatus == 'challenge') {
                $message = "Transaction order_id: $orderId is challenged.";
                $transaction->status = 'challenge';
            } else {
                $message = "Transaction order_id: $orderId successfully.";
                $transaction->status = 'success';
                $this->updateUserSaldo($transaction);
            }
        } else if ($transactionStatus == 'settlement') {
            $message = "Transaction order_id: $orderId successfully settled.";
            $transaction->status = 'settlement';
            $this->updateUserSaldo($transaction);
        } else if ($transactionStatus == 'pending') {
            $message = "Transaction order_id: $orderId is pending.";
            $transaction->status = 'pending';
        } else if ($transactionStatus == 'deny') {
            $message = "Transaction order_id: $orderId is denied.";
            $transaction->status = 'deny';
        } else if ($transactionStatus == 'expire') {
            $message = "Transaction order_id: $orderId is expired.";
            $transaction->status = 'expire';
        } else if ($transactionStatus == 'cancel') {
            $message = "Transaction order_id: $orderId is canceled.";
            $transaction->status = 'cancel';
        }

        $transaction->save();

        $this->sendDiscordNotification($message);

        return response()->json(['message' => 'Callback received.']);
    }

    private function sendDiscordNotification($message)
    {
        $webhookUrl = 'https://discord.com/api/webhooks/1247123618865872908/D5HQVNVcgRSab3bKSMDRR0W7muBqtOGAFfde1fIiImstQGsnfi6PoNO7iojv71szW1L8';
        $data = ['content' => $message];

        $options = [
            'http' => [
                'header' => "Content-Type: application/json\r\n",
                'method' => 'POST',
                'content' => json_encode($data),
            ],
        ];

        $context = stream_context_create($options);
        file_get_contents($webhookUrl, false, $context);
    }

    private function updateUserSaldo($transaction)
    {
        $userSaldo = Saldo::where('id_discord', $transaction->user_id)->first();
        if ($userSaldo) {
            $userSaldo->nominal += $transaction->nominal;
            $userSaldo->save();
        }
    }

    public function paymentsuccess(Transaction $transaction)
    {
        $transaction->status = 'success';
        $transaction->save();
        $idtransaksi = Transaction::where('id', $transaction->id)->first();
        $nominaltransaksi = $idtransaksi->nominal;
        return response()->json(['message' => 'Sukses Bro']);
    }
}
