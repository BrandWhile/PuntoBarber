<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "producto";
    protected $primaryKey = "idP";
    public $timestamps = false;

    protected $fillable = ['nombreP','precioP'];
}
