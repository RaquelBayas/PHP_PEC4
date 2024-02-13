<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryNews extends Model
{
    use HasFactory;

    protected $table = 'category_news';
    public $timestamps = false;
    protected $fillable = [ 'category_id, news_id'];

}
