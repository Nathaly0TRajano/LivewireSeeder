<?php

namespace App\Livewire\Tarefa;

use App\Models\Tarefa;
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
        // dd é um dublingdy, ele para e mostra só o que tem dentro da ... mostra os dados numa tela preta
        
        Tarefa::create([
            'nome'=> $this->nome,
            'data_hora' => $this->data_hora,
            'descricao' => $this->descricao
        ]);
        // passar mensagens
        session()->flash('success', 'Cadastro Realizado');
    }
}


