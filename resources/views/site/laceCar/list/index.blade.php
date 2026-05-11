@extends('layouts.merge.site')
@section('titulo', 'Transportes')
@section('content')

     <section class="hero-page">
    <img class="image-banner" src="/assets/images/transporte.png" loading="lazy" sizes="(max-width: 1800px) 100vw, 1800px" srcset="/assets/images/transporte.png 500w, /assets/images/transporte.png 800w, /assets/images/transporte.png 1080w, /assets/images/transporte.png 1600w, /assets/images/transporte.png 1800w" alt="" class="image-background-banner">
    <div class="overlay-page">
        <div class="contain">
            <div class="text-banner">
                <div class="texto-conteudo-hero">
                <h1 class="heading-13 white"><strong>Transportes</strong></h1>
                <div class="linha-vermelha"></div>
                </div>
            </div>
        </div>
    </div>
    </section>


        <section class=container>
            <div class="row my-5">
                <div class="col-md-12 col-12">
                    <p class="text-justify">
                        {!! html_entity_decode($LaceCarDocument->body) !!}
                    </p>
                </div>
            </div>
            <div class="row">

                @foreach ($laceCars as $item)
                 <div  id="cardHotel" class="my-5 col-lg-4 col-sm-12 col-md-6">

                  <a href="{!! url('/Lista-de-transportes/' . urlencode($item->name)) !!}">
                    <img src="/storage/{{ $item->photo }}" class="img-fluid shadow rounded">
                  </a>
        

                    <div class="information-session  bg-white shadow rounded p-3 "> 
                      <a href="{!! url('/Lista-de-transportes/' . urlencode($item->name)) !!}"><h6 class="">{{ $item->name }}</h6></a> 
                      
                    </div>

                  </div>
            @endforeach


             <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-4 py-5 ">
                      <ul class="pagination">
                       {{ $laceCars->links() }}
                    </ul>

                    </div>
                </div>
            </div>
                 

                
            </div>


        </section>

   





@endsection
