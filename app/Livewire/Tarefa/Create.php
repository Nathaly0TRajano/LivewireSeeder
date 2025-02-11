<?php

namespace App\Livewire\Tarefa;

use Livewire\Component;

class Create extends Component
{
    public $nome;
    public $data_hora;
    public $descricao;

    public function render()
    {
        return view('livewire.tarefa.create');
    }

    public function store(){
        // dd é um dublingdy, ele para e mostra só o que tem dentro da ...
        dd($this->nome, $this->data_hora, $this->descricao);
    }
}
