<?php

namespace App\Http\Controllers;

use App\Models\UiPage;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UiPageController extends Controller
{
    public function uipagehome()
    {
        if (Auth::guard('admin')) {
            $h1 = UiPage::get();
            $title = 'Data Ui Home';
            return view('admin.ui_page.home.index', ['h1' => $h1])->with('title', $title);
        }
    }

    public function uipagehomeedit($id)
    {
        $title = 'Data Ui Home';
        $h1 = UiPage::find($id);
        return view('admin.ui_page.home.edit', [
            'h1' => $h1,
            'title' => $title,
        ]);
    }

    public function uipagehomeupdate(Request $request, $id)
    {
        $h1 = UiPage::find($id);
        $user = Auth::guard('admin')->user();
        $userName = $user->name;
        $webhookUrl = 'https://discord.com/api/webhooks/1247123618865872908/D5HQVNVcgRSab3bKSMDRR0W7muBqtOGAFfde1fIiImstQGsnfi6PoNO7iojv71szW1L8';

        if ($h1->type == 1) {
            $data = [
                'text1' => $request->text1,
                'text2' => $request->text2,
            ];
            $embed = [
                'title' => 'UI Page Updated',
                'description' => $userName . ' Telah mengubah halaman UI.',
                'color' => 16777215,
                'fields' => [
                    [
                        'name' => 'Text 1',
                        'value' => $request->text1,
                        'inline' => true,
                    ],
                    [
                        'name' => 'Text 2',
                        'value' => $request->text2 ?? 'N/A',
                        'inline' => true,
                    ],
                ],
                'footer' => [
                    'text' => 'Diperbarui pada ' . now()->toDateTimeString(),
                ],
            ];
        }

        if ($h1->type == 5) {
            $filegambar = null;

            if ($request->hasFile('foto')) {
                $tujuan_upload = 'assets/uipage/';
                $file = $request->file('foto');
                $filegambar = time() . "_" . $file->getClientOriginalName();
                $file->move($tujuan_upload, $filegambar);
            }
            $data = [
                'text1' => $request->text1,
                'text2' => $request->text2,
            ];
            $embed = [
                'title' => 'Data Crew',
                'description' => $userName . ' Telah mengubah Data Crew.',
                'color' => 16777215,
                'fields' => [
                    [
                        'name' => 'Name',
                        'value' => $request->name,
                        'inline' => true,
                    ],
                    [
                        'name' => 'Roles',
                        'value' => $request->roles ?? 'N/A',
                        'inline' => true,
                    ],
                ],
                'thumbnail' => [
                    'url' => 'https://igmcv3.com/assets/crew/' . $filegambar . '.png',
                ],
                'footer' => [
                    'text' => 'Diperbarui pada ' . now()->toDateTimeString(),
                ],
            ];
        }

        $client = new Client();
        $response = $client->post($webhookUrl, [
            'json' => [
                'embeds' => [$embed],
            ],
        ]);
        $h1->update($data);
        return redirect('/admin/data-uipagehome')->with('toast_success', 'Data UI Berhasil di Ubah');
    }
}
