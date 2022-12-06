<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;
use App\Models\Sub_Pages;
use App\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        $sub_page = Sub_Pages::where('page_id', 1)->get();

        return view('home', ["sub_page" => $sub_page]);
    }

    public function news(){
        $news = News::all();

        return view('news', ['news' => $news]);
    }
}
