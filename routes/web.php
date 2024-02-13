<?php

use App\Models\Category;
use App\Http\Resources\NewsResource;
use Illuminate\Support\Facades\Route;
use App\Models\News;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Vista principal (5 noticias)
Route::get('/', function () {
    return view('news',[
        'news' => News::all()->take(5)
    ]);
});

//Página individual de cada noticia
Route::get('/news/{new}', function (News $new) {
    return view('new', [
        'new' => $new
    ]);
});

Route::get('/api/noticias/{page}', function ($page) {
    return NewsResource::collection(News::paginate(10,['id','title','published_at'],'page',$page)->items());
});

Route::get('/api/noticia/{id}', function ($id) {
    return NewsResource::collection(News::newsById(($id)));
});

Route::get('/api/categoria/{id}/{page}', function ($id,$page) {
    return  NewsResource::collection(News::newsByCategory($id,$page));
});