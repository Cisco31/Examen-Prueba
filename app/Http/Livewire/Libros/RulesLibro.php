<?php

namespace App\Http\Livewire\Libros;

class RulesLibro
{
    public static function reglas()
    {
        return [
            'libro.titulo'=>'required|string',
            'libro.editorial'=>'required|string',
            'libro.autor'=>'required|string',
            'libro.fecha_lanzamiento'=>'required|string'
        ];
    }
}
