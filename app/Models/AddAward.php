<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddAward extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'award', 'awardTitle', 'awardDescription'
    ];

    public static function last()
    {
        return self::latest()->first();
    }
}
