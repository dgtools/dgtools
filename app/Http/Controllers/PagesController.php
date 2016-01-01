<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    function index(){
        return view('pages.index');
    }

    function about(){
        $name = 'Sanghee Lee';

        return view('pages.about')->with('name', $name);
    }
}
