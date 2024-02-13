<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Category;

class NewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        if ($request->is('*/noticia/*')) {
            return [
                'id_new' => $this->id,
                'title' => $this->title,
                'content' => $this->content,
                'author' => $this->author,
                'published_at' => $this->published_at,
                'img' => $this->img,
                'categories'=>CategoriesResource::collection(Category::newsCategories($this->id))
            ];
        }
        else if ($request->is('*/noticias/*') || $request->is('*/categoria/*')) {
            return    [
                'id' => $this->id,
                'title' => $this->title,
                'published_at' => $this->published_at
            ];
        } 
}
}