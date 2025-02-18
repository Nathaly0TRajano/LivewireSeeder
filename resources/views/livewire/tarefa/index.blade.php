<div class="mt-5">                                                               
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Data e Hora</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tarefas as $t)
                    <tr>
                    <td>{{$t->id}}</td>
                    <td>{{$t->nome}}</td>
                    <td>{{$t->data_hora}}</td>
                    <td>
                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewModel">Visualizar</button>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModel">Editar</button>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModel">Deletar</button>
                    </td>
                    </tr>
                 @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
