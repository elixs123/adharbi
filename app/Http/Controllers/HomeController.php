<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;
use App\Models\Sub_Pages;
use App\Models\News;
use App\Models\Gallery;
use App\Models\Projekti;
use Mail;

class HomeController extends Controller
{
    private $email;
    private $subject;
    private $body;

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

    public function gallery(Request $request){
        $years = Gallery::all()->unique('year');

        if($request->has('godina')){
            $gallerys = Gallery::where('year', $request->input('godina'))->paginate(6);
        }else{
            $gallerys = Gallery::where('year', '2017')->paginate(6);
        }

        return view('gallery', ['gallerys' => $gallerys, 'years' => $years]);
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
        $projekti = Projekti::where('type', 'Aktuelni projekti')->get();

        return view('inrc.projekti', ["projekti" => $projekti]);
    }

    public function biblioteka(){
        $projekti = Projekti::where('type', 'Biblioteka objavljenih radova')->get();

        return view('inrc.biblioteka', ["projekti" => $projekti]);
    }

    public function rudarstvo(){
        return view('sektori.rudarstvo');
    }

    public function tehnicko(){
        return view('sektori.tehnicko-tehnoloski');
    }

    public function agroharbi(){
        return view('sektori.agroharbi');
    }

    public function farmacija(){
        return view('sektori.farmacija');
    }

    public function harbilab(){
        return view('sektori.harbilab');
    }

    public function proizvodnja(){
        return view('sektori.proizvodnja');
    }

    public function gradjevina(){
        return view('sektori.gradjevina');
    }

    public function prijavazaposao(){
        return view('prijavazaposao');
    }

    public function opirofiltu(){
        return view('opirofiltu');
    }

    public function contact(){
        return view('contact');
    }

    public function cotactSendEmail(Request $request){
        $data = array('name'=>$request->input('name'));

        $this->subject = $request->input('subject');
        $this->email = $request->input('email');
        $this->body = $request->input('message');
   
        Mail::send([], $data, function($message) {
            $message->to($this->email, 'Tutorials Point')
            ->subject($this->subject)
            ->setBody($this->body);
            $message->from('Business.Intelligence@pennyplus.com');
        });

        return redirect()->back()->with('message', 'Uspješno ste poslali e-mail');
    }
}
