<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuario";
    protected $primaryKey = "idU";
    public $timestamps = false;

    protected $fillable = ['email','clave','nombre'];

    public function comentarios(){
        return $this->belongsToMany(Comentario::class)->withPivot('comentario');
    }
}
