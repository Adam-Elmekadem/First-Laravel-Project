<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    protected $fillable = ['title', 'body', 'description', 'topic', 'color'];
}
