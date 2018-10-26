<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Image;

class ImageController extends Controller
{
    public function show(){
        $client = new Client();
        $res = $client->request('GET', 'https://api.thecatapi.com/v1/images/search?format=json', [
            'headers' => [
                'Content-Type' => 'application/json',
                'X-API-KEY' => '17d94b92-754f-46eb-99a0-65be65b5d18f'
            ]
        ]);
        $rand_image = json_decode($res->getBody(), true);

        $all_images = auth()->user()->images()->get();

        return view('pages.images.show', compact('rand_image', 'all_images'));
    }

    public function store(){
        auth()->user()->publish(new Image(request(['image_id', 'image_url'])));

        return redirect('/images');
    }

    public function destroy($img_id){
        Image::where('image_id', $img_id)->delete();

        return redirect('/images');
    }
}
