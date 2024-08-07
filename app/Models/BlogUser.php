<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'anonymous',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
