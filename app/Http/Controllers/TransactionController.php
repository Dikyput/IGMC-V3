<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserDiscord;
use App\Models\Transaction;
use App\Models\Saldo;
use App\Models\listsaldo;

class TransactionController extends Controller
{
    public function submitcart(Request $request) {
        $request->validate([
            'qty' => 'required|integer|min:1',
            'id_saldo' => 'required|string', 
        ]);
    
        $user = Auth::user();
        $userData = User::findOrFail($user->id_discord);
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
                'order_id' =>  $order_id ,
                'gross_amount' => $totalharga,
            ),
            'customer_details' => array(
                'username' => $userData->username,
                'email' => $userData->email,
                'nationaly' => $userData->nationaly,
            )
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

    public function paymentsuccess(Transaction $transaction)
    {   
        $transaction->status = 'success';
        $transaction->save();
        $idtransaksi = Transaction::where('id',$transaction->id)->first();
        $nominaltransaksi = $idtransaksi->nominal;
        $userSaldo = Saldo::where('id_discord', $idtransaksi->user_id)->first();
        if ($userSaldo) {
            $userSaldo->nominal += $idtransaksi->nominal;
            $userSaldo->save();
        }
        
        return response()->json(['message' => 'Sukses Bro']);
    }
}
