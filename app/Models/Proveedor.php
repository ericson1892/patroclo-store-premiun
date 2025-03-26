<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $table = 'proveedores';

    protected $fillable = [
        'id_proveedor',
        'nombre_comercial'
    ];

    public function productos()
    {
        return $this->belongsTo(Producto::class);
    }

    public $timestamps = false;
}
