<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Book extends Model
{
    use Notifiable;

    protected $fillable = [
        'title', 'author', 'publisher', 'cover', 'genre', 'about_book', 'is_borrowed'
    ];
}
