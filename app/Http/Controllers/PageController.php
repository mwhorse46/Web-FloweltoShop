<?php

namespace App\Http\Controllers;

use App\FlowerCategory;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('home', [
            'categories' => FlowerCategory::all(),
        ]);
    }
}
