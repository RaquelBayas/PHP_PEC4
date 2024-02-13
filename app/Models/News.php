<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title,author,published_at,content,img'];

    protected $table = 'news';

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');       
    }

    public static function newsById($id) {
        return  DB::table('news')
            ->where('news.id', $id)
            ->select(DB::raw('*'))
            ->get();
    }

    public static function newsByCategory($id,$page) {
        return  DB::table('news')
              ->join('category_news', 'news.id', '=', 'category_news.news_id')
              ->join('categories', 'category_news.category_id', '=', 'categories.id')
              ->where('categories.id', $id)
              ->select('news.*')
              ->paginate($page);
      }
}
