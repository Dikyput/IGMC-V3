<?php

namespace App\Http\Controllers;

use App\Models\Igmcoutfit;
use App\Models\Saldo;
use App\Models\User;
use App\Models\UserDiscord;
use App\Rules\AlphaDashSpace;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Session;
use \GuzzleHttp;

class DiscordController extends Controller
{
    protected $tokenURL = "https://discord.com/api/oauth2/token";
    protected $apiURLBase = "https://discord.com/api/users/@me";
    protected $tokenData = [
        "client_id" => null,
        "client_secret" => null,
        "grant_type" => "authorization_code",
        "code" => null,
        "redirect_uri" => null,
        "scope" => "identifiy&email",
    ];

    public function logindiscord(Request $request)
    {
        if (Auth::check()) {return redirect()->route("show");};
        if ($request->missing("code") && $request->missing("access_token")) {return redirect()->route("show");};

        $this->tokenData["client_id"] = env("DISCORD_CLIENT_ID");
        $this->tokenData["client_secret"] = env("DISCORD_CLIENT_SECRET");
        $this->tokenData["code"] = $request->get("code");
        $this->tokenData["redirect_uri"] = env("DISCORD_REDIRECT_URI");

        $client = new GuzzleHttp\Client();

        try {
            $accessTokenData = $client->post($this->tokenURL, ["form_params" => $this->tokenData]);
            $accessTokenData = json_decode($accessTokenData->getBody());
        } catch (\GuzzleHttp\Exception\ClientException $error) {
            return redirect()->route("show");
        };

        $userData = Http::withToken($accessTokenData->access_token)->get($this->apiURLBase);

        if ($userData->clientError() || $userData->serverError()) {return redirect()->route("show");};

        $userData = json_decode($userData);

        $user = UserDiscord::updateOrCreate(
            [
                'id_discord' => $userData->id,
            ],
            [
                'username' => $userData->username,
                'avatar' => $userData->avatar,
                'locale' => $userData->locale,
                'mfa_enabled' => $userData->mfa_enabled,
                'refresh_token' => $accessTokenData->refresh_token,
            ]
        );

        if (!User::where('id_discord', $userData->id)->exists()) {
            Saldo::updateOrCreate(
                [
                    'id_discord' => $userData->id,
                ]
            );

        }

        Auth::login($user);
        if (!UserDiscord::where('id_discord', $userData->id)->value('isVerified')) {
            return redirect()->route("verification");
        } else {
            if ($user && $user->isVerified == 1 && $request->route()->getName() !== 'updateprofile') {
                return redirect()->route('updateprofile');
            }
            return redirect()->route("dashboard");
        }
    }

    public function verifyToken(Request $request)
    {
        $request->validate([
            'token' => 'required|string',
        ]);

        $userData = Auth::user();
        $userData = UserDiscord::find($userData->id_discord);
        $inputToken = $request->token;
        $adatoken = User::where('token_newplayer', $inputToken)->first();
        if ($adatoken) {
            $h = $userData->id_discord;
            $adatoken->update([
                'id_discord' => $h,
                'istaken' => 1,
            ]);
            UserDiscord::updateOrCreate(
                [
                    'id_discord' => $userData->id_discord,
                ],
                [
                    'isVerified' => 1,
                ]);
            $userData = Auth::user();
            $userData = UserDiscord::find($userData->id_discord);
            $identifier = $userData->identifier;
            Igmcoutfit::where('identifier', $identifier)->update(
                [
                    'id_discord' => $userData->id_discord,
                ]
            );
            return redirect()->route('updateprofile')->with('status', 'Your account has been verified!');
        }
        return redirect()->route('verification')->withErrors(['token' => 'The provided token is incorrect.']);
    }

    public function update_profile(Request $request)
    {
        $request->validate([
            'username' => ['required', new AlphaDashSpace],
        ]);
        $user = Auth::user();
        if ($user && $user->isVerified == 1) {
            $userData = $user->iddiscord()->first();
            if ($userData) {
                $userData->update([
                    'username' => $request->input('username'),
                    'email' => $request->input('email'),
                    'nationaly' => $request->input('nationaly'),
                ]);

                $user->update([
                    'isVerified' => 2,
                ]);

                return redirect()->route('dashboard')->with('status', 'Profile updated successfully!');
            }
        }
        return redirect()->route('updateprofile')->withErrors(['error' => 'Profile update failed.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route("show");
    }

}
