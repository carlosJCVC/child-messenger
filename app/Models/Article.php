<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'article_Title','article_author','article_Keywords','article_content','article_bibliography','path'
    ];

    //public function setPathAttribute($path) {

    //	if(!empty($path)){
    //		$nombre = $path->getClienteOriginalName();
    //		$this->attributes['path'] = $nombre;
    //		\Storage::disk('local')->put($nombre, \file::get($path));
    	
    }

     /**
     * Get the comments for the blog post.
     */
   







