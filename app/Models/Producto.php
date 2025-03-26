<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';

    protected $fillable = [
        'id_producto',
        'id_subcategoria',
        'id_marca',
        'id_proveedor',
        'codigo',
        'nombre',
        'descripcion',
        'especificaciones',
        'precio_dolares',
        'stock',
        'imagen_url',
        'informacion_fabricante_url'
    ];

    public function subcategorias()
    {
        return $this->belongsTo(Subcategoria::class);
    }
    public function marcas()
    {
        return $this->belongsTo(Marca::class);
    }
    public function proveedores()
    {
        return $this->belongsTo(Proveedor::class);
    }

    public $timestamps = false;
}
