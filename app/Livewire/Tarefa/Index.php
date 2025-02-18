<?php

namespace App\Livewire\Tarefa;

use App\Models\Tarefa;
use Livewire\Component;

class Index extends Component
{
    public $nome;
    public $data_hora;
    public $descricao;
    public function render()
    {
        $tarefas = Tarefa::all();
        return view('livewire.tarefa.index', compact('tarefas'));
    }

    public function abrirModalVisualizar($tarefaId){
        $tarefa = Tarefa::find($tarefaId);
        if($tarefa){
            $this->nome = $tarefa->nome;
            $this->data_hora = $tarefa->data_hora;
            $this->descricao = $tarefa->descricao;
        }
    }
}
