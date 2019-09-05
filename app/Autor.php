<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'autor';
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'email', 'senha', 'created_at', 'updated_at'];
}
