<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terapia extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'fecha', 'costo'];
    public $timestamps=false;
   
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function usuarios(){
        return $this->belongsToMany(Usuario::class);
    }
}
