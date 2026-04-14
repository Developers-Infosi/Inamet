@extends('layouts.merge.site')
@section('titulo', 'Hotéis')
@section('content')


{{-- Banner Inside Page --}}
<section class="hero-page sponsor parceiros"><img class="image-banner" src="/assets/images/hic.png" loading="lazy" sizes="(max-width: 1800px) 100vw, 1800px" srcset="/assets/images/hic.png 500w, /assets/images/hic.png 800w, /assets/images/hic.png 1080w, /assets/images/hic.png 1600w, /assets/images/hic.png 1800w" alt="" class="image-background-banner">
    <div class="overlay-page">
      <div class="contain">
        <div class="text-banner">
          <div class="texto-conteudo-hero">
            <h1 class="heading-13 white">Hotéis</h1>
            <div class="linha-vermelha"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Banner Inside Page --}}


  

        <section class="container">
            
          <div class="row my-5">

                

            @foreach ($hotelLists as $item)
                 <div  id="cardHotel" class="my-5 col-lg-4 col-sm-12 col-md-6">

                  <a href="{!! url('/Lista-de-hoteis/' . urlencode($item->hotelname)) !!}">
                    <img src="/storage/{{ $item->attachment }}" class="img-fluid shadow rounded">
                  </a>
                    

                    <div class="information-session  bg-white shadow rounded p-3 "> 
                      <a href="{!! url('/Lista-de-hoteis/' . urlencode($item->hotelname)) !!}"><h6 class="">{{ $item->hotelname }}</h6></a> 
                      
                      @for ($i = 0; $i < $item->stars; $i++)
                       <img  src="/site/estrela.png" width="20">
                      @endfor
                    </div>

                  </div>
            @endforeach


            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-4 py-5 ">
                      <ul class="pagination">
                       {{ $hotelLists->links() }}
                    </ul>

                    </div>
                </div>
            </div>
                 
                    
                
          </div>

        </section>

  
@endsection
