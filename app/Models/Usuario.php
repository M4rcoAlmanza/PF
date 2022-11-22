<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'correo', 'telefono', 'nacimiento'];
    public $timestamps=false;

    public function terapias(){
        return $this->belongsToMany(Terapia::class);
    }

    public function archivos(){
        return $this->hasMany(Archivo::class);
    }
}
