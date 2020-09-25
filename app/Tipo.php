<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = "tipo";
    protected $primaryKey = "idT";
    public $timestamps = false;

    protected $fillable = ['nombreT'];
}
 