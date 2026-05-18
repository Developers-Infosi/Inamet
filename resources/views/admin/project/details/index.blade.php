@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes do Projecto')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.project.index') }}"><u>Listar Projectos</u></a> > {{ $project->title }}
            </h2>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="h3 m-4 page-title">{{ $project->title }}</h2>
                        <div class="row m-5 align-items-center">

                            <div class="col">
                                <div class="row align-items-center">

                                    <div class="col-12 col-lg-10">
                                        <div class="row align-items-center my-4">
                                            <div class="col">
                                                <h2 class="page-title">Capa</h2>
                                            </div>

                                        </div>
                                        <div class="card-deck mb-4">

                                            <div class="card border-0 bg-transparent">
                                                <div class="card-img-top img-fluid rounded"
                                                    style='background-image:url("/storage/{{ $project->image }}");background-position:center;background-size:cover;height:600px;width:100%;'>
                                                </div>
                                            </div> <!-- .card -->
                                        </div> <!-- .card-deck -->
                                    </div>

                                       <div class="col-12 col-lg-10">
                                        <div class="row align-items-center my-4">
                                            <div class="col-md-4 mb-3">
                                                <h5 class="page-title text-primary">Título:</h5>
                                                 {{ $project->title }}
                                            </div>

                                       
                                            <div class="col-md-4 mb-3">
                                                <h5 class="page-title text-primary">Categoria:</h5>
                                                 {{ $project->category }}
                                            </div>

                                      
                                            <div class="col-md-4 mb-3">
                                                <h5 class="page-title text-primary">Status:</h5>
                                               <small class="text-primary text-uppercase">{{ $project->status }}</small>
                                            </div>


                                            
                                            <div class="col-md-12 mb-3">
                                                <h5 class="page-title text-primary">Descrição:</h5>
                                               <div class="text-primary text-uppercase">{!! html_entity_decode($project->description) !!}</div>
                                            </div>


                                        </div>
                              <!-- .card-deck -->
                                    </div>


                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-7 mb-2">
                                        <hr>
                                        <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $project->created_at }}
                                        </p>
                                        <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $project->updated_at }}
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- /.col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->


        </div>
    </div>

    


@endsection
