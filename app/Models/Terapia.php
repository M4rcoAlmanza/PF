<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Terapia extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = ['user_id', 'fecha', 'costo'];
    public $timestamps=false;
   
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function usuarios(){
        return $this->belongsToMany(Usuario::class);
    }
}
