<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // proprietà che ci permette di utillizzare il comando all per le request al nostro database consentendo solo alle fillable di essere passate.
    protected $fillable = ['title', 'body'];
}
