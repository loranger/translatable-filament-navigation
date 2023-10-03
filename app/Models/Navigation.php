<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Navigation extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded = [];

    protected $casts = [
        'items' => 'json',
    ];

    public $translatable = ['items'];
}
