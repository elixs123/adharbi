<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;
use App\Models\Sub_Pages;
use App\Models\Sub_Pages_Nav;
use App\Models\News;
use App\Models\Gallery;
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
}
