<?php

namespace App\Livewire\Tarefa;

use App\Models\Tarefa;
use Livewire\Component;

class Index extends Component
{
    public $tarefaId;
    public $nome;
    public $data_hora;
    public $descricao;

    // listeners -> Espera um evento, que se encontra dentro do array, para chamar/executar uma ação.
    protected $listeners = [
        'abrirModalEdicao',
        'tarefaAtualizada' => 'render'
    ];

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
    // atribuindo valor a variavel publica da classe (aquela que tá lá em cima), valor da id ao clicarmos no botão excluir (não da Modal).
    public function abrirModalEdicao($tarefaId){
        $this->dispatch('editarTarefa', tarefaId: $tarefaId);
    }

    public function abrirModalExclusao($tarefaId){
        $this->tarefaId = $tarefaId;
    }
    // chamar a função excluir, com o valor da tarefaId que é o Id da tarefa, selecionado no abrirModalExclusao
    public function excluir(){
        if($this->tarefaId){
            Tarefa::find($this->tarefaId)->delete();
        }
    }
}
