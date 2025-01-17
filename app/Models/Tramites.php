<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class Tramites extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'nombre',
        'nombre_corto',
        'descripcion',
    ];

    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'nombre_corto' => $this->nombre_corto,
            'descripcion' => $this->descripcion,
        ];
    }
}
