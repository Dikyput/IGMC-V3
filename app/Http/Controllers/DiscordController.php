<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDiscord;
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
                // 'verified' => $userData->verified,
                'locale' => $userData->locale,
                'mfa_enabled' => $userData->mfa_enabled,
                'refresh_token' => $accessTokenData->refresh_token,
            ]
        );

        User::updateOrCreate(
            [
                'id_discord' => $userData->id,
                'username' => $userData->username,
            ]
        );

        Auth::login($user);
        return redirect()->route("dashboard");
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route("show");
    }

}
