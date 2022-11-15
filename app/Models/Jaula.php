<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jaula extends Model
{
    use HasFactory;

    protected $fillable = [
        'zoologico_id',
        'nome',
    ];

    public function zoologico(){
        return $this->belongsTo('App\Zoologico');
    }
}
