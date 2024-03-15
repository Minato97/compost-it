<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Composta extends Model
{
    use HasFactory;

    protected $table = 'compostas';
    protected $fillable = [
        'id',
        'nombre',
        'CN',
        'humedad',
        'oxigeno',
        'tamano_particula',
        'pH',
        'temperatura',
        'materia_organica',
        'id_prototipos',
        'id_etapas',
        'id_users',
        'id_categorias'
    ];

    public function etapas()
    {
        return $this->belongsTo(Etapa::class, 'id_etapas');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'id_users');
    }
    public function categorias()
    {
        return $this->belongsTo(Categoria::class, 'id_categorias');
    }
    public function prototipos()
    {
        return $this->belongsTo(Prototipo::class, 'id_prototipos');
    }
}
