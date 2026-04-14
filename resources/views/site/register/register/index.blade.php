@extends('layouts.merge.site')
@section('titulo', 'Inscrever-se')
@section('content')

    <main>
        <style>
            .hidden {
                display: none;
            }
        </style>
        <section class="pb-4 pt-6 bg-green" id=content>
            <div class=container>
                <div class=row>
                    <div class=col>
                        <h1 class="text-white my-5">Inscrever-se</h1>
                    </div>
                </div>
            </div>
        </section>
        @include('extra._culture.index')

        <section id=content>
            <div class="container">


                <div class="row my-5 justify-content-center align-items-center rounded">



                    <div class="col-lg-8  p-4 p-lg-6 bg-white shadow rounded my-5">
                        <h2 class="h4 text-center">Inscreva-se</h2>

                        <form class="row mx-n2" method="post" action="{{ route('site.register.post') }}">
                            @csrf


                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4 alert alert-info" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4 alert alert-danger" :errors="$errors" />




                            <div class="col-md-12 px-2 mb-3">

                                <label for="Name">Name</label>
                                <input class="form-control" type="text" name="name" placeholder="nome"
                                    aria-label="name" required
                                    value="{{ isset($register->name) ? $register->name : old('name') }}">

                                <label for="Email">Email</label>
                                <input class="form-control" type="email" name="email" placeholder="email"
                                    aria-label="email" required
                                    value="{{ isset($register->email) ? $register->email : old('email') }}">

                                <label for="password">Password</label>
                                <input class="form-control" type="password" name="password" placeholder="palavra passe"
                                    aria-label="password" required>

                                <label for="password_confirmation">Confirmar Password</label>
                                <input type="password" class="form-control" id="password_confirmation"
                                    name="password_confirmation" placeholder="Confirmar Password" required />
                            </div>





                            <div class="col-md-12 px-2 mb-3">
                                <button type="submit"
                                    class="btn btn-secondary text-center text-uppercase align-items-center w-100">
                                    Inscrever-se
                                </button>
                            </div>

                            <div class="col-md-12 col-12">
                                <b class="mb-2 text-dark">Requisitos de senhas</b>
                                <p class="small text-dark mb-2"> Para criar uma nova senha, você deve atender a todos os
                                    seguintes requisitos:
                                </p>
                                <ul class="small text-dark pl-4 mb-0">
                                    <li>Mínimo 8 caracteres</li>
                                    <li>Pelo menos um caracter especial</li>
                                    <li>Pelo menos um numero</li>
                                    <li>Não pode ser igual à senha anterior</li>
                                </ul>
                            </div>

                        </form>

                        <hr>
                        <a href="{{ route('site.login.index') }}">Já possui uma conta ?</a>
                    </div>

                </div>

            </div>
        </section>

    </main>


@endsection
