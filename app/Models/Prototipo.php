<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prototipo extends Model
{
    use HasFactory;
    protected $table = 'prototipos';
    protected $fillable = [
        'id',
        'prototipo',
        'descripcion',
        'instrucciones',
        'recursos'
    ];
    public function compostas(){
        return $this->hasMany(User::class,'id_prototipos');
    }
}
