<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'categorias';

    protected $fillable = [
        'id_categoria',
        'nombre',
        'imagen_url'
    ];
    public function subcategorias()
    {
        return $this->hasMany(Subcategoria::class);
    }

    public $timestamps = false;
}
