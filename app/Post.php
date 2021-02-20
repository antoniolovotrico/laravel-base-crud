<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // proprietà FILLABLE che ci permette di utillizzare il comando all per le request al nostro database consentendo solo alle fillable di essere passate.
    protected $fillable = array('title', 'body');
    // proprietà GUARDED che ci permette di utillizzare il comando all per le request al nostro database bloccando i parametri Guarded inseriti nell'array che non vengono passati passate.
    protected $guarded = array('_token', '_method');
}
