<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faixas extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function albuns(){

        return $this->hasMany('App\Models\Albuns');
    }
}
