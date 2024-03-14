<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'categorias';
    protected $fillable = [
        'id',
        'categoria',
        'descripcion',
        'instrucciones',
        'recursos',
        'utilizacion_final'
    ];
    public function compostas(){
        return $this->hasMany(Composta::class, 'id_categorias');
    }
}
