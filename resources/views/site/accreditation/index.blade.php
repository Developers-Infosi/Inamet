@extends('layouts.merge.site')
@section('titulo', 'Comunicação Social')
@section('content')

     {{-- Banner Inside Page --}}
         <section class="hero-page"><img class="image-banner" src="/assets/images/signup-image.jpg" loading="lazy" sizes="(max-width: 1800px) 100vw, 1800px" srcset="/assets/images/signup-image.jpg 500w, /assets/images/signup-image.jpg 800w, /assets/images/signup-image.jpg 1080w, /assets/images/signup-image.jpg 1600w, /assets/images/signup-image.jpg 1800w" alt="" class="image-background-banner">
            <div class="overlay-page">
               <div class="contain">
               <div class="text-banner">
                  <div class="texto-conteudo-hero">
                     <h1 class="heading-13 white"><strong>Registro</strong></h1>
                     <div class="linha-vermelha"></div>
                  </div>
               </div>
               </div>
            </div>
         </section>

         {{-- Banner Inside Page --}}
  

        <section class="py-5 py-lg-7 text-dark md-12">

            <div class="container">
                <h5 class="my-5">Se for participante da 7ª Cimeira União Africana - União Europeia aceda o menu <a class="text-danger" href="{{ route('site.signup.create') }}">
                        <u>Registo</u></a> </h5>

                <div class="row">
                    <div class="col-lg-6">
                        <img src="/site/CRED.gif" width="400">
                    </div>
                    <div class="col-lg-6 font-size-6">

                        <div class="col text-center text-lg-left"><a href="https://www.ciam.gov.ao/ao/credenciais"
                                target="_blank"
                                class="btn btn-danger text-uppercase d-inline-flex align-items-center bg-danger">Clique Aqui!</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


@endsection
