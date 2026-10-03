<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['name', 'surname', 'user_id'];

    public function books(){
        return $this->hasMany(Book::class);
    }

    //perchè books? 1 autore può avere N libri
}
