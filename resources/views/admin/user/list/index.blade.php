@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Utilizadores')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                Lista de Utilizadores
            </h2>
        </div>
    </div>



    <div class="card shadow mb-4">
        <div class="card-body">
            <h3 class="my-3 text-center h5">Usuários Normal</h3>
            <table class="table datatables table-hover table-bordered" id="dataTable-1">
                <thead class="bg-primary">
                    <tr class="text-center">
                        <th>#</th>
                        <th>NOME</th>
                        <th>EMAIL</th>
                        <th>DATA DE CRIAÇÃO</th>
                        <th>NIVEL DE ACESSO</th>
                        <th>ESTADO</th>
                        <th>ACÇÕES</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    @foreach ($users_normal as $item)
                        <tr class="text-center text-dark">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }} </td>
                            <td>{{ $item->email }} </td>
                            <td>{{ $item->created_at }} </td>
                            <td>{{ $item->level }} </td>

                            @if ($item->is_approved != true && $item->level != 'Administrador')
                                <td>
                                    <form action="{{ route('admin.user.approve', $item->id) }}" method="POST"
                                        onsubmit="return confirmApproval()">
                                        @csrf
                                        <button type="submit" class="btn btn-success">Aprovar Usuário</button>
                                    </form>
                                </td>
                            @else
                                <td>
                                    Usuário Aprovado
                                </td>
                            @endif

                            @csrf
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a href='{{ url("admin/user/show/{$item->id}") }}'
                                            class="dropdown-item">Detalhes</a>
                                        <a href='{{ url("admin/user/edit/{$item->id}") }}' class="dropdown-item">Editar</a>
                                        <a href='{{ url("admin/user/delete/{$item->id}") }}'
                                            class="dropdown-item">Eliminar</a>


                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>


        </div>
    </div>


    <div class="card shadow mb-4 my-5">
        <div class="card-body">

            <table class="table datatables table-hover table-bordered" id="dataTable-2">
                <thead class="bg-primary">
                    <tr class="text-center">
                        <th>#</th>
                        <th>NOME</th>
                        <th>EMAIL</th>
                        <th>DATA DE CRIAÇÃO</th>
                        <th>NIVEL DE ACESSO</th>

                        <th>ACÇÕES</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    @foreach ($users as $item)
                        <tr class="text-center text-dark">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }} </td>
                            <td>{{ $item->email }} </td>
                            <td>{{ $item->created_at }} </td>
                            <td>{{ $item->level }} </td>

                            @csrf
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a href='{{ url("admin/user/show/{$item->id}") }}'
                                            class="dropdown-item">Detalhes</a>
                                        <a href='{{ url("admin/user/edit/{$item->id}") }}' class="dropdown-item">Editar</a>
                                        <a href='{{ url("admin/user/delete/{$item->id}") }}'
                                            class="dropdown-item">Eliminar</a>


                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>


        </div>
    </div>



@endsection
@section('JS')

    <script>
        function confirmApproval() {
            return confirm('Você tem certeza de que deseja aprovar este usuário?');
        }
    </script>

@endsection
