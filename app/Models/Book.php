<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'authors_name',
        'book_title',
        'date_published',
        'book_link',
        'image',
        'description'
    ];

}
