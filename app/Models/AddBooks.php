<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddBooks extends Model
{
    use HasFactory;
    protected $fillable = [
        'book', 'bookInfo'
    ];

    public static function last()
    {
        return self::latest()->first();
    }
}
