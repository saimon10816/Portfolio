<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $fillable = ['mediaImage', 'mediaTitle', 'mediaBy', 'mediaDate', 'mediaBody'];

    public static function last()
    {
        return self::latest()->first();
    }
}
