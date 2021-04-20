<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'designation',
        'slug',
        'prix',
        'description',
        'category_id',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
