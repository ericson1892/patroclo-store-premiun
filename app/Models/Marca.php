<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    protected $table = 'marcas';

    protected $fillable = [
        'id_marca',
        'nombre',
        'codigo_pais'
        
    ];

    public function productos()
    {
        return $this->belongsTo(Producto::class);
    }

    public $timestamps = false;
}
