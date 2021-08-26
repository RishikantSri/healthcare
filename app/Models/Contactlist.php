<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Contactlist extends Model
{
    protected $fillable = [
        'name',
        'email',
        'message',
        'subject',
    ]; 

 
 
}
