@extends('layouts.merge.site')
@section('titulo', 'Galeria')
@section('content')
    <section class="hero-page">
    <img class="image-banner" src="/storage/{{ $gallery->cover }}" loading="lazy" sizes="(max-width: 1800px) 100vw, 1800px" srcset="/storage/{{ $gallery->cover }} 500w, /storage/{{ $gallery->cover }} 800w, /storage/{{ $gallery->cover }} 1080w, /storage/{{ $gallery->cover }} 1600w, /storage/{{ $gallery->cover }} 1800w" alt="" class="image-background-banner">
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


        <!-- ====== gallery  ====== -->

        <section class="pt-5 pt-lg-5">
            <div class=container>
                <div class="row">

                    @foreach ($images as $item)
                        <div class="col-lg-4 col-md-6 my-5">
                            <a class="fancybox" href="/storage/{{ $item->path }}" data-fancybox="gallery">
                            <div style='background-image:url("/storage/{{ $item->path }}");background-position:center;background-size:cover;height:200px;  border-radius: 5px;'>
                            </div>
                            </a>

                        </div>
                    @endforeach

                </div>


                 <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-4 py-5 ">
                      <ul class="pagination">
                       {{ $images->links() }}
                    </ul>

                    </div>
                </div>
            </div>

            </div>
        </section>

   

@endsection

