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
        return $this->belongsToMany(Image::class, 'intermediaries', 'image_id', 'product_id');
    }
}
