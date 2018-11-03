<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'size',
        'is_active',
    ];

    public function image()
    {
        return $this->hasMany(Image::class);
    }
}
