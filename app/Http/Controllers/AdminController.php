<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function index(){
        $all_users = User::all();
        return view('pages.admin.index', compact('all_users'));
    }

    public function show(){
//        dd(request('city'));
        $all_users = User::whereBetween('age', [request('fromAge'), request('toAge')])
            ->where('country', request('country'))
            ->where('city', request('city'))
            ->where('sex', request('sex'))
            ->orderBy(request('radioGroup'), 'asc')
            ->get();

        return view('pages.admin.index', compact('all_users'));
    }
}
