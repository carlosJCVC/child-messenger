<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Redactor extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'username', 'birthdate', 'email', 'ci', 'phone', 'password',
    ];
}
