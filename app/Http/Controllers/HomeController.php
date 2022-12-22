<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;
use App\Models\Sub_Pages;
use App\Models\News;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function news(){
        $news = News::all();

        return view('news', ['news' => $news]);
    }

    public function pocetna(){
        return view('pocetna');
    }

    public function newsDetails($id){
        $new = News::findOrFail($id);

        return view('newsDetails', ['new' => $new]);
    }

    public function gallery(){
        $gallerys = Gallery::all();

        return view('gallery', ['gallerys' => $gallerys]);
    }

    public function historijat(){
        return view('onama.historijat');
    }
    
    public function misijaivizija(){
        return view('onama.misijaivizija');
    }

    public function ostruktura(){
        return view('onama.ostruktura');
    }

    public function kosmo(){
        return view('onama.kosmo');
    }

    public function oposlovno(){
        return view('onama.oposlovno');
    }

    public function changeLanguge($lang){
        \App::setLocale($lang);
        session()->put('locale', $lang);
  
        return redirect()->back();
    }

    public function oinrc(){
        return view('inrc.oinrc');
    }

    public function sektori(){
        return view('inrc.sektori');
    }

    public function projekti(){
        return view('inrc.projekti');
    }

    public function biblioteka(){
        return view('inrc.biblioteka');
    }
}
