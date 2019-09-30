<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    protected $fillable = [
        'letter_greeting', 'letter_content', 'letter_farewell', 'user_id',
    ];

     /**
     * Get the comments for the blog post.
     */
    public function images()
    {
        return $this->hasMany('App\Models\Image');
    }
}
