<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pivot extends Model
//{
//    public function files()
//    {
//        return $this->hasMany(DocumentFile::class, 'document_id','id');
//    }
//    public function type()
//    {
//        return $this->belongsTo(DocumentType::class, 'type_id','id');
//    }
    public function fatchImg($type)
    {
        $img = Pivot::where('type',$type)->get();
    }
}
