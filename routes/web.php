<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/pocetna', [HomeController::class, 'pocetna'])->name('pocetna');
Route::get('/novosti', [HomeController::class, 'news'])->name('news');
Route::get('/novosti/{id}', [HomeController::class, 'newsDetails'])->name('newsDetails');
Route::get('/galerija', [HomeController::class, 'gallery'])->name('gallery');

Route::get('/historijat', [HomeController::class, 'historijat'])->name('historijat');
Route::get('/misijaivizija', [HomeController::class, 'misijaivizija'])->name('misijaivizija');
Route::get('/ostruktura', [HomeController::class, 'ostruktura'])->name('ostruktura');
Route::get('/kosmo', [HomeController::class, 'kosmo'])->name('kosmo');
Route::get('/oposlovno', [HomeController::class, 'oposlovno'])->name('oposlovno');

Route::get('/inrc/inrc', [HomeController::class, 'oinrc'])->name('oinrc');
Route::get('/inrc/sektori', [HomeController::class, 'sektori'])->name('sektori');
Route::get('/inrc/projekti', [HomeController::class, 'projekti'])->name('projekti');
Route::get('/inrc/biblioteka', [HomeController::class, 'biblioteka'])->name('biblioteka');

Route::get('/sektori/rudarstvo', [HomeController::class, 'rudarstvo'])->name('rudarstvo');
Route::get('/sektori/tehnicko-tehnoloski', [HomeController::class, 'tehnicko'])->name('tehnicko-tehnoloski');
Route::get('/sektori/agroharbi', [HomeController::class, 'agroharbi'])->name('agroharbi');
Route::get('/sektori/farmacija', [HomeController::class, 'farmacija'])->name('farmacija');
Route::get('/sektori/harbilab', [HomeController::class, 'harbilab'])->name('harbilab');
Route::get('/sektori/proizvodnja', [HomeController::class, 'proizvodnja'])->name('proizvodnja');
Route::get('/sektori/gradjevina', [HomeController::class, 'gradjevina'])->name('gradjevina');
Route::get('/prijavazaposao', [HomeController::class, 'prijavazaposao'])->name('prijavazaposao');

Route::get('languge/{lang}', [HomeController::class, 'changeLanguge'])->name('changeLanguge');

Route::prefix('admin')->group(function (){
    Route::middleware(['auth'])->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('adminHome');
        Route::post('/', [AdminController::class, 'insertPage']);

        Route::get('/news', [AdminController::class, 'news'])->name('adminNews');
        Route::delete('/news/{id}', [AdminController::class, 'deleteNews'])->name('adminDeleteNews');

        Route::get('/news/add', [AdminController::class, 'addNews'])->name('adminAddNews');
        Route::post('/news/add', [AdminController::class, 'addNewsPost']);

        Route::get('/news/edit/{id}', [AdminController::class, 'editNews'])->name('adminEditNews');
        Route::post('/news/edit/{id}', [AdminController::class, 'editNewsPost']);

        Route::get('gallery', [AdminController::class, 'gallery'])->name('adminGallery');
        Route::get('adminAddGallery', [AdminController::class, 'addGallery'])->name('adminAddGallery');
        Route::post('adminAddGallery', [AdminController::class, 'addGalleryPost']);
    });
});

