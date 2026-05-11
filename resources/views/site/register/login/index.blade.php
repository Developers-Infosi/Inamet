@extends('layouts.merge.site')
@section('titulo', 'Login')
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
                        <h1 class="text-white my-5">Login</h1>
                    </div>
                </div>
            </div>
        </section>
        @include('extra._culture.index')

        <section id=content>
            <div class="container">


                <div class="row my-5 justify-content-center align-items-center ">



                    <div class="col-lg-6  p-4 p-lg-6 bg-white shadow rounded my-5">
                        <h2 class="h4 text-center">Faça o login</h2>

                        <form class="row mx-n2" method="post" action="{{ route('site.help.email') }}">
                            @csrf

                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4 alert alert-info" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4 alert alert-danger" :errors="$errors" />


                            <div class="col-md-12 px-2 mb-3">

                                <label for="Email">Email</label>
                                <input class="form-control" type="text" name="email" placeholder="email"
                                    aria-label="email" required>


                                <label for="Password">Password</label>
                                <input class="form-control" type="password" name="password" placeholder="palavra passe"
                                    aria-label="password" required>
                            </div>



                            <div class="col-md-12 px-2 mb-3">
                                <button type="submit"
                                    class="btn btn-secondary text-center text-uppercase align-items-center w-100">
                                    Login
                                </button>
                            </div>

                        </form>

                        <hr>
                        <a href="{{ route('site.register.index') }}">Não tem uma conta?</a>
                    </div>

                </div>

            </div>
        </section>

    </main>


@endsection
