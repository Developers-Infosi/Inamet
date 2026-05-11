@extends('layouts.merge.site')
@section('titulo', 'Speakers Confirmados')
@section('content')
    
    <section class="hero-page">
    <img class="image-banner" src="/assets/images/speakers-p-500.png" loading="lazy" sizes="(max-width: 1800px) 100vw, 1800px" srcset="/assets/images/speakers-p-500.png 500w, /assets/images/speakers-p-500.png 800w, /assets/images/speakers-p-500.png 1080w, /assets/images/speakers-p-500.png 1600w, /assets/images/speakers-p-500.png 1800w" alt="" class="image-background-banner">
    <div class="overlay-page">
        <div class="contain">
            <div class="text-banner">
                <div class="texto-conteudo-hero">
                <h1 class="heading-13 white"><strong>Speakers Confirmados</strong></h1>
                <div class="linha-vermelha"></div>
                </div>
            </div>
        </div>
    </div>
    </section>

<section class="container">
    
     
       <div class="row my-5 justify-content-center gx-5"> 
    @foreach ($speakers as $item)
        <div id="cardSpeaker" class="my-5 col-12 col-md-6 col-lg-6 card shadow-lg border-white p-5 rounded">
            <a style="text-decoration: none;" href="{{ route('site.speaker.show', urlencode($item->name)) }}">
                <img src="/storage/{{$item->photo  }}" class="rounded-circle border-img-warning" />
            </a>
            <div class="personal-information text-center my-3">
                <a style="text-decoration: none;color:#222;" href="{{ route('site.speaker.show', urlencode($item->name)) }}">
                    <span>{{ $item->name }}</span> <br/>
                </a>
                <strong>{{ $item->function }}</strong>
            </div>
        </div>
    @endforeach
</div>

        
      

       <nav class="justify-content-center d-flex mt-5">
            <b> {{ $speakers->links() }}</b>
        </nav>


    
  </section>


@endsection