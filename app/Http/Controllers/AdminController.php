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

    public function sort(){
        $all_users = User::orderBy(request('radioGroup'), 'asc')->get();

        return view('pages.admin.index', compact('all_users'));
    }

    public function filterByCountry(){
        $all_users = User::where('country', request('country'))->get();

        return view('pages.admin.index', compact('all_users'));
    }

    public function filterByCity(){
        $all_users = User::where('city', request('city'))->get();

        return view('pages.admin.index', compact('all_users'));
    }

    public function filterBySex(){
        $all_users = User::where('sex', request('sex'))->get();

        return view('pages.admin.index', compact('all_users'));
    }

    public function filterByAge(){
        $all_users = User::whereBetween('age', [request('fromAge'), request('toAge')])->orderBy('age', 'asc')->get();

        return view('pages.admin.index', compact('all_users'));
    }
}
