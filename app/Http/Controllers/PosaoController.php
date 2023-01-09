<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Alljob;

class PosaoController extends Controller
{
    public function index(){
        $alljobs = Alljob::where('active', 1)
        ->where('date', '>',  date('Y-m-d'))
        ->get();

        return view('prijavazaposao', ['alljobs' => $alljobs]);
    }

    public function uspjesnaprijava(){
        return view('uspjesnaprijava');
    }

    public function openJobs(){
        $alljobs = Alljob::where('active', 1)
        ->where('date', '>',  date('Y-m-d'))
        ->get();

        return view('openjobs', ['alljobs' => $alljobs]);
    }

    public function openJobsDetails($id){
        $job = Alljob::where('active', 1)
        ->where('date', '>',  date('Y-m-d'))
        ->where('id', $id)
        ->firstOrFail();

        
        return view('openjobsdetails', ['job' => $job]);
    }

    public function save(Request $request){
        $validation = $request->validate([
            'imeuspjesnaprijava' => 'required',
            'prezime' => 'required',
            'drodjenja' => 'required',
            'drzavljanstvo' => 'required',
            'adresa' => 'required',
            'grad' => 'required',
            'telefon' => 'required',
            'email' => 'required',
            'posao' => 'required',
            'vozacka' => 'required',
            's_sprema' => 'required',
            'n_skole' => 'required',
            's_zvanje' => 'required',
            'ms_excel' => 'required',
            'jezici' => 'required',
            's_zvanje' => 'required',
            'motivacion_p' => 'required',
        ],
        [
            'name.required' => 'Polje ime je obavezno',
            'prezime.required' => 'Polje prezime je obavezno',
            'drodjenja.required' => 'Polje datum rođenja je obavezno',
            'drzavljanstvo.required' => 'Polje državljanstvo je obavezno',
            'adresa.required' => 'Polje adresa je obavezno',
            'grad.required' => 'Polje grad je obavezno',
            'telefon.required' => 'Polje telefon je obavezno',
            'email.required' => 'Polje email je obavezno',
            'posao.required' => 'Polje radno mjesto je obavezno',
            'vozacka.required' => 'Polje vozačka dozvola je obavezno',
            's_sprema.required' => 'Polje stepen stručne spreme je obavezno',
            'n_skole.required' => 'Polje naziv škole/fakultet je obavezno',
            's_zvanje.required' => 'Polje stečeno zvanje spremeje obavezno',

            'ms_excel.required' => 'Polje MS Excel obavezno',
            'jezici.required' => 'Polje engleski jezik obavezno',
            'motivacion_p.required' => 'Polje motivaciono pismo je obavezno',
        ]);


        if($request->hasFile('biografija')){
            $biografija = $request->file('biografija');
            $name = time().'.'.$biografija->getClientOriginalExtension();
            $destinaionPath = public_path('/posao');
            $biografija->move($destinaionPath, $name);
        }else{
            $name = 'default.jpg';
        }


        DB::table('prijavazaposao')->insert([
            'ime' => $request->input('ime'),
            'prezime' => $request->input('prezime'),
            'drodjenja' => $request->input('drodjenja'),
            'drzavljanstvo' => $request->input('drzavljanstvo'),
            'adresa' => $request->input('adresa'),
            'grad' => $request->input('grad'),
            'telefon' => $request->input('telefon'),
            'email' => $request->input('email'),
            'posao' => $request->input('posao'),
            'vozacka' => $request->input('vozacka'),
            's_sprema' => $request->input('s_sprema'),
            'n_skole' => $request->input('n_skole'),
            's_zvanje' => $request->input('s_zvanje'),

            'n_kompanije' => $request->input('n_kompanije') ? $request->input('n_kompanije') : 'Nema radnog iskustva',
            'radno_m' => $request->input('radno_m') ? $request->input('radno_m') : 'Nema radnog iskustva',
            'v_period' => $request->input('v_period') ? $request->input('v_period') : 'Nema radnog iskustva',

            'ms_excel' => $request->input('ms_excel'),
            'jezici' => $request->input('jezici'),
            'motivaciono_p' => $request->input('motivacion_p'),
            'biografija' => $name,
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        return redirect()->route('uspjesnaprijava');
    }
}
