<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    use HasFactory;
    protected $table = 'subcategorias';

    protected $fillable = [
        'id_categoria',
        'nombre',
        'imagen_url'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public $timestamps = false;
}
