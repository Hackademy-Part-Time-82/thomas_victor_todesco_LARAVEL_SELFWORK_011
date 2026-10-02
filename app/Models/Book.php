<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'pages', 'year', 'image', 'user_id', 'author_id'];

    public function author() {
        return $this->belongsTo(Author::class);
    }

    // perchè author? perchè 1 libro può avere solo 1 autore
}


