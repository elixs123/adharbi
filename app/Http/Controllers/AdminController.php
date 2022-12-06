<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;
use App\Models\Sub_Pages;
use App\Models\Sub_Pages_Nav;
use App\Models\News;

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

    public function addNews(){
        return view('admin.addNews');
    }

    public function addNewsPost(Request $request){
        if ($request->hasFile('img')) {
            // $validator = Validator::make($request->all(), [
            // 'img' => 'dimensions:width=1701,height=451'
            // ]);

            // if ($validator->fails()) {
            //     return redirect()->back()->with('error', 'Slika mora biti dimenzija 1701 x 451');
            // }

            $image = $request->file('img');

            $name = $image->getClientOriginalName();
            $destinationPath = public_path('/img/news');
            $image->move($destinationPath, $name);

            $news = new News;

            $news->img = $name;
            $news->name = $request->input('name');
            $news->description = $request->input('description');
            
            $news->save();

            return redirect()->back()->with("success", "Uspješno ste dodali slider");
        }
        
        return redirect()->back();
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
}
