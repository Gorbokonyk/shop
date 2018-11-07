<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intermediary extends Model
{
    //TODO: realize pattern repository without hard binding product, blog with image by foreign keys

    public function fatchImg($type)
    {
        $img = Pivot::where('type',$type)->get();
    }
}
