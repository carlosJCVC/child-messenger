<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'article_title','article_author','article_keywords','article_content','article_bibliography','path','user_id'
    ];


    /**
     * Get the comments for the blog post.
     */
    public function articleImages()
    {
        return $this->hasMany('App\Models\ArticleImage');
    }

    //public function setPathAttribute($path) {

    //	if(!empty($path)){
    //		$nombre = $path->getClienteOriginalName();
    //		$this->attributes['path'] = $nombre;
    //		\Storage::disk('local')->put($nombre, \file::get($path));
    	
}






