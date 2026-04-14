@extends('layouts.merge.site')
@section('titulo', 'Detalhes do Restaurante')
@section('content')
    
    <section class="hero-page">
    <img class="image-banner" src="/assets/images/restaurant.jpg" loading="lazy" sizes="(max-width: 1800px) 100vw, 1800px" srcset="/assets/images/restaurant.jpg 500w, /assets/images/restaurant.jpg 800w, /assets/images/restaurant.jpg 1080w, /assets/images/restaurant.jpg 1600w, /assets/images/restaurant.jpg 1800w" alt="" class="image-background-banner">
    <div class="overlay-page">
        <div class="contain">
            <div class="text-banner">
                <div class="texto-conteudo-hero">
                <h1 class="heading-13 white"><strong>Restaurantes</strong></h1>
                <div class="linha-vermelha"></div>
                </div>
            </div>
        </div>
    </div>
    </section>
     

        <section class=container>
            <div class="row  my-5">
                <div class="col-md-12 col-12">
                    <h2 class="mt-5  mb-3">{{ $listRestaurant->restaurantName }}</h2>
                    <p class="text-justify">
                        {!! html_entity_decode($listRestaurant->description) !!}
                    </p>
                </div>



                <div class="row justify-content-center">

                    <div class=col-lg-12>
                        <div id="borderDivDiv" class="row mx-n3 grid"
                            data-isotope='{"layoutMode": "masonry", "itemSelector": ".grid-item"}' id=portfolio>
                            @foreach ($restaurantsListGallarlery->images as $item)
                                <div class="col-lg-4 col-md-6 pb-5">

                                    <a class="fancybox" data-src="/storage/{{ $item->path }}" data-fancybox="gallery">
                                        <div
                                            style='background-image:url("/storage/{{ $item->path }}");background-position:center;background-size:cover;height:200px; border-radius: 5px;'>
                                        </div>

                                    </a>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">

                    <iframe src="{{ $listRestaurant->locationMap }}" width="100%" height="450" style="border:0;"
                        allowfullscreen="" loading="lazy" class=" lazy-loaded"
                        data-src="{{ $listRestaurant->locationMap }}">
                        <noscript>

                            <iframe src="{{ $listRestaurant->locationMap }}" width="730" height="450" style="border:0;"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>



@endsection
