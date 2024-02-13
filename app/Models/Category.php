<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    protected $table = 'categories';

    public function news()
    {
        return $this->belongsToMany('App\Models\News');       
    }

    public static  function newsCategories($id_new) {
        return  DB::table('categories')
        ->join('category_news',  'categories.id', '=', 'category_news.category_id')
            ->where('category_news.category_id', $id_new)
            ->select(DB::raw('categories.name, categories.id as category_id'))
            ->distinct()->get();
    }
    
}
