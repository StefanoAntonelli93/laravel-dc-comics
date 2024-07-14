<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        $data = [
            'comics' => $comics
        ];
        // rappresentazione grafica in welcome
        return view('welcome', $data);
    }
}
