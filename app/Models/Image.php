<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model

{
    protected $fillable = [
        'product_id',
        'name',
    ];
    public function product()
    {
        return $this->belongsToMany(Product::class, 'intermediaries', 'product_id', 'image_id');
    }
}
