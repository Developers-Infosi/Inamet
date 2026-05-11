@extends('layouts.merge.site')
@section('titulo', 'Galeria')
@section('content')

    <section class="hero-page">
    <img class="image-banner" src="/assets/banners/family-photo.jpg" loading="lazy" sizes="(max-width: 1800px) 100vw, 1800px" srcset="/assets/banners/family-photo.jpg 500w, /assets/banners/family-photo.jpg 800w, /assets/banners/family-photo.jpg 1080w, /assets/banners/family-photo.jpg 1600w, /assets/banners/family-photo.jpg 1800w" alt="" class="image-background-banner">
    <div class="overlay-page">
        <div class="contain">
            <div class="text-banner">
                <div class="texto-conteudo-hero">
                <h1 class="heading-13 white"><strong>Galeria</strong></h1>
                <div class="linha-vermelha"></div>
                </div>
            </div>
        </div>
    </div>
    </section>
       

         <section class="container">
            
          <div class="row my-5">

                

            @foreach ($galleries as $item)
                 <div  id="cardHotel" class="my-5 col-lg-4 col-sm-12 col-md-6">

                  <a href="{!! url('/galeria/' . urlencode($item->name)) !!}">
                    <img src="/storage/{{ $item->cover }}" class="img-fluid shadow rounded">
                  </a>
                    

                    <div class="information-session  bg-white shadow rounded p-3 "> 
                      <a href="{!! url('/galeria/' . urlencode($item->name)) !!}"><h6 class="">{{ $item->name }}</h6></a> 
                      
                    </div>

                  </div>
            @endforeach


            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-4 py-5 ">
                      <ul class="pagination">
                       {{ $galleries->links() }}
                    </ul>

                    </div>
                </div>
            </div>
                 
                    
                
          </div>

        </section>


@endsection
