<?php

namespace Fototeca\Models\Album;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "albums";
    protected $primarykey= "idAlbum";
    public $timestamps = false;
    
    protected $fillable = [
        'idAlbum','name','foto', 'user_id'
    ];


public function fotos(){

    return $this->hasmany('Fototeca\Models\Foto\Foto');

}

public function prop(){

    return $this->belongsTo('Fototeca\User');

}
}

