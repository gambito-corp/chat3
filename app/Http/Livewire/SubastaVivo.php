<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Validation\Validator;

class SubastaVivo extends Component
{

    public $nombre;
    public $mensaje;
    public $precio;

    public function mount()
    {
        $this->nombre = "pedro";
        $this->mensaje = "";
        $this->precio = "100";

    }

    public function update($field)
    {
        $this->validateOnly($field, [
            "nombre" => "require|min:3",
            "precio" => "required"
        ]);
    }

    public function enviarMensaje()
    {

        $this->emit("mensajeEnviado");
        $this->precio = $this->precio+100;
        $data = [
            "nombre" => $this->nombre,
            "precio" => $this->precio
        ];
        $this->nombre = 'pedro';
        $this->emit("mensajeRecibido", $data);
        event(new \App\Events\EnviarMensaje($this->nombre, $this->precio));
    }

    public function render()
    {
        return view('livewire.subasta-vivo');
    }
}
