<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    use HasFactory;
    protected $table = 'publicaciones';
    protected $fillable = [
        'id',
        'titulo',
        'resumen',
        'descripcion',
        'id_users'
    ];
    public function users(){
        return $this->belongsTo(User::class,'id_users');
    }
}
