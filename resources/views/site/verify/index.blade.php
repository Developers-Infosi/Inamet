@extends('layouts.merge.site')
@section('titulo', 'Verficação do Credenciamento')
@section('content')
    <main>
        <section class="pb-4 pt-6 bg-green" id=content>
            <div class=container>
                <div class=row>
                    <div class=col>
                        <h1 class="text-white my-5">Verficação do Credenciamento</h1>
                    </div>
                </div>
            </div>
        </section>
        @include('extra._culture.index')
        <section class="py-6 py-lg-7">
            <div class=container>
                <div class=row>
                    <div class="col-md-12 text-justify" style="text-align: justify !important;">

                        <div class="col-12">
                            <div class="row">

                                <h2 class="h3 page-title">
                                    Nome: {{ $signup->name }}
                                </h2>


                            </div>
                            <div class="row m-5 align-items-center">

                                <div class="row align-items-center">
                                    <div class="col-12 mb-4">
                                        <h5 class="mb-1">
                                            <b>Fotografia de Identificação</b>
                                        </h5>
                                        <img width="250" height="auto" src="/storage/{{ $signup->photo }}"
                                            alt="">
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 mb-2">
                                        <h5 class="mb-1">
                                            <b>Passaporte/Bilhete de Identidade</b>
                                        </h5>
                                        <p class="text-dark">
                                            {{ $signup->idcard }}
                                        </p>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-4 mb-2">
                                        <h5 class="mb-1">
                                            <b>País</b>
                                        </h5>
                                        <p class="text-dark">
                                            {{ $signup->country }}
                                        </p>
                                    </div>


                                    <div class="col-12 col-md-6 col-lg-4 mb-2">
                                        <h5 class="mb-1">
                                            <b>Categoria</b>
                                        </h5>
                                        <p class="text-dark text-justify">
                                            {{ $signup->category }}
                                        </p>
                                    </div>



                                </div>


                            </div>



                        </div> <!-- /.col-12 -->
                    </div>

                </div>
            </div>
        </section>

    </main>

@endsection
