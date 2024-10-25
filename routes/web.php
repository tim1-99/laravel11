<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CarteController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class,'index'] ) ->name('home');
// la charge de page home//
Route::get('/contact', [ContactController::class,'index'])->name('contact');
    //la charge de page contact//
Route::get('carte',[CarteController::class,'index'])->name('carte');
//charge la page carte//
Route::get('/admin/contact', [AdminContactController::class,'index'])->name('admin.contact');




Route::get('/test', function(){
    //affiche la vue enfant.blade.php
    return view('enfant');

});
