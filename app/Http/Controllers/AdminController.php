<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;
use App\Models\Sub_Pages;
use App\Models\Sub_Pages_Nav;
use App\Models\News;
use App\Models\Gallery;
use App\Models\Job;
use App\Models\Alljob;
use Validator;

class AdminController extends Controller
{
    public function index(){
        $sub_page = Sub_Pages::where('id', 1)->get();

        return view('admin.home', ["sub_page" => $sub_page]);
    }

    public function news(){
        $news = News::all();

        return view('admin.news', ['news' => $news]);
    }

    public function deleteNews($id){
        News::find($id)->delete();

        return redirect()->back()->with('mesasge', 'Uspješno ste obrisali novost');
    }

    public function addNews(){
        return view('admin.addNews');
    }

    public function addNewsPost(Request $request){
        $validated = $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'img' => 'required|dimensions:width=500,height=334'
            ],
            [
                'name.required' => 'Polje naziv je obavezno',
                'description.required' => 'Polje opis je obavezno',
                'img.required' => 'Polje slika je obavezno',
                'img.dimensions' => 'Slika mora biti dimenzija 500x334px'
            ]
        );

        $image = $request->file('img');

        $name = $image->getClientOriginalName();
        $destinationPath = public_path('/img/news');
        $image->move($destinationPath, $name);

        $news = new News;

        $news->img = $name;
        $news->name = $request->input('name');
        $news->description = $request->input('description');
        
        $news->save();

        return redirect()->back()->with("message", "Uspješno ste dodali novost");
    }

    public function insertPage(Request $request){
        if($request->has('add_nav_page')){
            $this->insertNavPage($request);
        }

        $page = Sub_pages::where('page_id', 1)->exists();
        
        if($request->has('img')){
            if(!$page){
                $fileName = $this->saveImage($request->file('img'));
                
                $page = new Sub_Pages;
                $page->page_id = 1;
                $page->text = $request->input('text');
                $page->img = $fileName;
                $page->save();
    
                return redirect()->back();
            }
        }
        
        if($request->has('img')){
            $fileName = $this->saveImage($request->file('img'));

            $page = Sub_Pages::where('page_id', 1)
                    ->update([
                        'text' => $request->input('text'),
                        'img' => $fileName
                    ]);

            return redirect()->back();
        }

        $page = Sub_Pages::where('page_id', 1)
                ->update([
                    'text' => $request->input('text')
                ]);

        return redirect()->back();
    }

    private function insertNavPage($request){
        if($request->has('img')){
            $fileName = $this->saveImage($request->file('img'));
                
                $page = new Sub_Pages_Nav;
                $page->page_id = 1;
                $page->sub_page_id = 1;
                $page->text = $request->input('text');
                $page->img = $fileName;
                $page->save();
    
                return redirect()->back();
            }
    }

    private function saveImage($img){
        $fileName = time().'_'.$img->getClientOriginalName();
        $filePath = $img->storeAs('pages', $fileName, 'public');

        $path = $img->move(public_path("pages"), $fileName);

        return $fileName;
    } 

    public function editNews($id){
        $new = News::where('id', $id)->get();

        return view('admin.editnews', ['new' => $new]);
    }

    public function editNewsPost($id, Request $request){
        $new = News::find($id);

        $new->name = $request->input('name');
        $new->description = $request->input('description');

        if($request->has('img')){
            $new->img = $request->input('img');
        }
        

        $new->save();

        return redirect()->route('adminNews');
    }

    public function gallery(){
        $gallerys = Gallery::all();

        return view('admin.gallery', ['gallerys' => $gallerys]);
    }

    public function addGallery(){
        return view('admin.addGallery');
    }

    public function addGalleryPost(Request $request){
        $validation = $request->validate([
            'img' => 'required'
        ],
        [
            'img.required' => 'Polje slika je obavezno'
        ]);

        $image = $request->file('img');

        $name = $image->getClientOriginalName();
        $destinationPath = public_path('/img/gallery');
        $image->move($destinationPath, $name);

        $gallery =  new Gallery;
        $gallery->img = $name;
        
        $gallery->save();

        return redirect()->back()->with('message', 'Dodali ste novu sliku u galeriju');
    }

    public function posao(){
        $jobs = Job::all();

        return view('admin.posao', ['jobs' => $jobs]);
    }

    public function posaoDetails($id){
        $job = Job::where('id', $id)->firstOrFail();

        return view('admin.posaodetails', ['job' => $job]);
    }

    public function addJobs(){
        return view('admin.addjobs');
    }
    public function addNewJob(Request $request){
        $validation = $request->validate([
            'img' => 'required',
            'name' => 'required',
            'description' => 'required',
            'date' => 'required'
        ],
        [
            'img.required' => 'Polje slika je obavezno',
            'name.required' => 'Polje naziv je obavezno',
            'description.required' => 'Polje opis je obavezno',
            'date.required' => 'Polje date je obavezno',
        ]);

        $image = $request->file('img');

        $name = $image->getClientOriginalName();
        $destinationPath = public_path('/img/jobs');
        $image->move($destinationPath, $name);

        $alljob =  new Alljob;
        $alljob->name = $request->input('name');
        $alljob->img = $name;
        $alljob->opis = $request->input('description');
        $alljob->date = $request->input('date');
        
        $alljob->save();

        return redirect()->back()->with('message', 'Uspjesno ste dodali novu poziciju');
    }

    public function allJobs(){
        $alljobs = Alljob::all();

        return view('admin.alljobs', ['alljobs' => $alljobs]);
    }

    public function updateAllJobs(Request $request){
        $job = Alljob::find($request->input('id'));

        if($job->date < date('Y-m-d')){
            return redirect()->back()->with('danger', 'Ne mozete aktivirati poziciju, datum je manji od trenutnog datuma. Morate prvo izmjeniti datum klikom na dugme "Izmjeni".');
        }
        $job->active = $request->input('active');

        $job->save();

        return redirect()->back()->with('message', 'Uspjesno ste izmjenili poziciju');
    }
    
    public function deleteJob(Request $request){
        $job = Alljob::find($request->input('id'));

        $job->delete();

        return redirect()->back()->with('message', 'Uspjesno ste izbrisali poziciju');
    }

    public function editJob($id){
        $job = Alljob::find($id);

        return view('admin.editjob', ['job' => $job]);
    }

    public function updateJob($id, Request $request){
        $job = Alljob::find($id);

        if($request->has('img')){
            $image = $request->file('img');

            $name = $image->getClientOriginalName();
            $destinationPath = public_path('/img/jobs');
            $image->move($destinationPath, $name);

            $job->img = $name;
        }

        $job->name = $request->input('name');
        $job->opis = $request->input('description');
        $job->date = $request->input('date');

        $job->save();

        return redirect()->back()->with('message', 'Uspjesno ste izmjenili poziciju'); 
    }
}
