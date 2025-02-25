<?php

namespace App\Livewire\Tarefa;

use App\Models\Tarefa;
use Livewire\Component;

class Edit extends Component
{
    public $tarefaId; 
    public $nome;
    public $data_hora;
    public $descricao; 

    public function render()
    {
        return view('livewire.tarefa.edit');
    }

    // fizemos um find para saber em qual tarefa vamos fazer o update, e fizemos com que, se tiver esse id, ele vai preencher a variavel tarefa
    // com os valores que foram digitados (dentro da edição).
    public function editarTarefa($tarefaId){
        $tarefa = Tarefa::find($tarefaId);
        if($tarefa){
            $this->tarefaId = $tarefa->id;
            $this->nome = $tarefa->nome;
            $this->data_hora = $tarefa->data_hora;
            $this->descricao = $tarefa->descricao;
        }
    }
}
