<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    use HasFactory;

    protected $fillable = ['award1', 'award2', 'award3', 'award4', 'award5', 'award6'];

    public static function last()
    {
        return self::latest()->first();
    }

}
