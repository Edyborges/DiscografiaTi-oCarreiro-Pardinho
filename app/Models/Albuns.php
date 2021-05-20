<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Albuns extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function faixa(){
        return $this->belongsTo('App\Models\Faixas');
    }
}
