<?php

namespace Fototeca\Models\Foto;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
     protected $table = "fotos";
    protected $primarykey= "idFoto";

     protected $fillable = [
        'idFoto','name', 'ruta', 'album'
    ];

public function album(){

    return $this->belongsTo('Fototeca\Models\Album\Album');

}

}
