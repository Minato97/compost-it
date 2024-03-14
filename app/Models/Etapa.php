<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etapa extends Model
{
    use HasFactory;
    protected $table = 'etapas';
    protected $fillable = [
        'id',
        'etapa',
        'descripcion',
        'duracion'
    ];
    public function compostas(){
        return $this->hasMany(User::class,'id_etapas');
    }
}
