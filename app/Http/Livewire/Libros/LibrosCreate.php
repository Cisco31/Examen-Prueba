<?php

namespace App\Http\Livewire\Libros;

use App\Http\Livewire\Libros\RulesLibro;
use App\Models\Libro;
use Livewire\Component;

class LibrosCreate extends Component
{
    public Libro $libro;

    public function mount(){
        $this->libro = new Libro();
    }

    public function render()
    {
        return view('livewire.libros.libros-create');
    }


    public function crear(){

        $this->validate();
        $this->libro->save();
        return redirect(route('libros.index'));
    }

    protected function rules(){
        return RulesLibro::reglas();
    }
}
