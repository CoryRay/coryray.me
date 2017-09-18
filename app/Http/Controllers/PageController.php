<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PageController extends Controller
{
    public function twitchlist(Request $request)
    {
        abort_if(empty($request->query()), 422);

        $channelNames = explode(',', $request->query('channels'));
        $limit        = $request->query('limit', 15);

        $client = new Client();

        $channels = null;
        foreach ($channelNames as $channel) {
            $response = $client->get("https://api.twitch.tv/kraken/channels/{$channel}/videos", [
                'query' => [
                    'broadcast_type' => 'archive',
                    'limit' => $limit,
                    'sort'  => 'time',
                ],
                'headers' => ['client-id' => env('TWITCH_CLIENT_ID')]
            ]);
            $channels[$channel] = json_decode($response->getBody())->videos;
        }
        return view('twitchlist', compact('channels'));
    }
}
