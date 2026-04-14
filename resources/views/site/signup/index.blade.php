@extends('layouts.merge.site')
@section('titulo', 'Registo')
@section('content')
 
        <style>
            .hidden {
                display: none;
            }
        </style>
        {{-- Banner Inside Page --}}
          <section class="hero-page sponsor parceiros"><img class="image-banner" src="/assets/images/signup-image.jpg" loading="lazy" sizes="(max-width: 1800px) 100vw, 1800px" srcset="/assets/images/signup-image.jpg 500w, /assets/images/signup-image.jpg 800w, /assets/images/signup-image.jpg 1080w, /assets/images/signup-image.jpg 1600w, /assets/images/signup-image.jpg 1800w" alt="" class="image-background-banner">
            <div class="overlay-page">
            <div class="contain">
                <div class="text-banner">
                <div class="texto-conteudo-hero">
                    <h1 class="heading-13 white">Registo</h1>
                    <div class="linha-vermelha"></div>
                </div>
                </div>
            </div>
            </div>
        </section>


         {{-- Banner Inside Page --}}
    

        <section id="content">
            <div class="container">

                <div class="align-items-center justify-content-center  rounded ">
                    <h3 class="mt-5 text-center">Se for da Imprensa aceda o menu <a class="text-danger mx-2" href="{{ route('site.accreditation.create') }}">
                            <u>Comunicação Social</u></a> </h3>

                             <h4 class="mt-2 text-center">Se for participar no Fórum de Négócios aceda o site <a class="text-danger mx-2" target="_blank" href="https://community.eu-africabusinessforum.eu/event/eu-africa-business-forum-2025">
                            <u>Fórum de Negócios</u></a> </h4>

                            <p class="text-center my-3">Por favor, preencha todos os campos abaixo com atenção.<br/> 
                                Os dados fornecidos serão utilizados apenas para fins de cadastro e permanecerão confidenciais. <br/> 
                                Os campos marcados com * são obrigatórios.</p>

                             <h4 class="text-danger mt-3 text-center">As Incrições decorrerão até o dia 22/11/2025</h4>
                             <p class="text-danger text-center"><strong>Nota: Informamos que os credenciais estão a ser levantados no Hotel Baía.</strong></p>
                    <div class="col-lg-12 col-sm-12 ">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                        <form class="row my-5" action="{{ route('site.signup.store') }} " enctype="multipart/form-data"
                            method="POST">
                            @csrf
                            @include('forms._formSignup.index')
                            <div class="col-12 text-center ">

                                <button type="submit" class="btn btn-primary my-5">
                                    Submeter Registo
                                    <svg width=16 height=16 class=ml-2 xmlns=http://www.w3.org/2000/svg viewBox="0 0 24 24">
                                        <title>arrow-button-right</title>
                                        <path
                                            d=M7.207,23.751,19.678,12.767h0a1.066,1.066,0,0,0,0-1.539L7.207.249A.987.987,0,0,0,5.793.356L4.236,2.206a1.028,1.028,0,0,0,.111,1.438L13.8,11.809a.25.25,0,0,1,0,.379l-9.45,8.168a1.021,1.021,0,0,0-.349.7,1,1,0,0,0,.238.741l1.558,1.851a.989.989,0,0,0,1.414.107Z />
                                    </svg>
                                </button>

                            </div>
                            <style>
                                .modal-long {
                                    width: 1080px !important;
                                }
                            </style>
                            @include('extra._modalSignup.index')
                        </form>
                    </div>
                </div>
            </div>
        </section>

 


@endsection
@section('JS')
    <script>
        const selectOpcao = document.getElementById('selectOpcao');
        const minhaDiv = document.getElementById('minhaDiv');

        selectOpcao.addEventListener('change', function() {
            if (selectOpcao.value === 'esconder') {
                minhaDiv.classList.add('hidden');
            } else if (selectOpcao.value === 'mostrar') {
                minhaDiv.classList.remove('hidden');
            }
        });
    </script>
    <script>
        function sgnup() {
            var idcard = document.getElementById("idcard");
            var name = document.getElementById("name");
            var surname = document.getElementById("surname");
            document.getElementById("idcaText").innerHTML = idcard.value;
            document.getElementById("nameText").innerHTML = name.value;

            var organization = document.getElementById("organization");
            document.getElementById("organizationText").innerHTML = organization.value;
            var functiona = document.getElementById("function");
            document.getElementById("functionText").innerHTML = functiona.value;



            var country = document.getElementById("country");
            document.getElementById("countryText").innerHTML = country.value;
            var tel = document.getElementById("tel");
            document.getElementById("telText").innerHTML = tel.value;
            var email = document.getElementById("email");
            document.getElementById("emailText").innerHTML = email.value;
            var category = document.getElementById("category");
            document.getElementById("categoryText").innerHTML = category.value;

            var endDate = document.getElementById("endDate");
            document.getElementById("endDateText").innerHTML = endDate.value;
            var startDate = document.getElementById("startDate");
            document.getElementById("startDateText").innerHTML = startDate.value

        }
    </script>
@endsection