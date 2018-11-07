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
    protected $with = ['image'];



    public function image()
    {
        return $this->belongsToMany(Image::class, 'intermediaries', 'image_id', 'item_id');
    }
}
