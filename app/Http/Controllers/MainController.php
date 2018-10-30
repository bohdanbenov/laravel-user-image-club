<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MainController extends Controller
{
    public function index(){
        if(auth()->check()){
            if(auth()->user()->admin) {
                return view('pages.admin.index');
            }
            else{
                return view('pages.index');
            }
        }
        else{
            return view('pages.index');
        }
    }

    public function generateRandomImage(Request $request){
        $client = new Client();

        $response = $client->request('GET', 'https://api.thecatapi.com/v1/images/search?format=json', [
            'headers' => [
                'Content-Type' => 'application/json',
                'X-API-KEY' => '17d94b92-754f-46eb-99a0-65be65b5d18f'
            ]
        ]);
        $resp_arr = json_decode($response->getBody(), true);


        return $resp_arr[0]['url'];
    }
}
