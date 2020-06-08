<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ListaPujas extends Component
{

    public $mensajes;
    protected $listeners = ["mensajeRecibido" => "pujantes"];

    public function mount()
    {
        $this->mensajes = [];
    }

    public function pujantes($data){

        $this->mensajes[] = $data;


    }


    public function render()
    {
        return view('livewire.lista-pujas');
    }
}
