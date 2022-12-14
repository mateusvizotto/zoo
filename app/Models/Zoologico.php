<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zoologico extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cidade',
        'pais',
    ];

    public function jaulas(){
        return $this->hasMany('App\Jaula');
    }
}
