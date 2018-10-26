<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MainController extends Controller
{
    public function index(){
        $img_id = [];
        $img_url = [];
        $client = new Client();

        if(auth()->check()){
            if(auth()->user()->admin) {
                $msg = 'Hello admin';
                return view('pages.index', compact('msg'));
            }
        }
        else{
            for($i = 0; $i < 10; $i++){
                $response = $client->request('GET', 'https://api.thecatapi.com/v1/images/search?format=json', [
                    'headers' => [
                        'Content-Type' => 'application/json',
                        'X-API-KEY' => '17d94b92-754f-46eb-99a0-65be65b5d18f'
                    ]
                ]);
                $resp_arr = json_decode($response->getBody(), true);
                array_push($img_id, $resp_arr[0]['id']);
                array_push($img_url, $resp_arr[0]['url']);
            }
            return view('pages.index', compact('img_id', 'img_url'));
        }
    }
}
