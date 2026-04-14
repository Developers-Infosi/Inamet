@extends('layouts.merge.site')
@section('titulo', 'Notícias')
@section('content')

  {{-- Banner Inside Page --}}
<section class="hero-page"><img class="image-banner" src="/assets/images/news.jpg" loading="lazy" sizes="(max-width: 1800px) 100vw, 1800px" srcset="/assets/images/news.jpg 500w, /assets/images/news.jpg 800w, /assets/images/news.jpg 1080w, /assets/images/news.jpg 1600w, /assets/images/news.jpg 1800w" alt="" class="image-background-banner">
    <div class="overlay-page">
      <div class="contain">
        <div class="text-banner">
          <div class="texto-conteudo-hero">
            <h1 class="heading-13 white"><strong>Notícias</strong></h1>
            <div class="linha-vermelha"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Banner Inside Page --}}


  <section class="section-25">
    <div class="contain">
    
      <div class="todas-noticias">
        <div class="w-layout-grid lista-noticias home">
        
       
            @foreach ($news as $item)
            <a href="{!! url('/noticia/' . urlencode($item->title)) !!}" target="_blank" class="noticia-item w-inline-block">
            <div data-w-id="3838ae74-6c1d-778d-154f-4abd479ffc92" class="noticia-imagem-link">
              <div class="imagem-blog"><img srcset="/storage/{{ $item->path }} 500w, /storage/{{ $item->path }} 800w" loading="lazy" sizes="(max-width: 800px) 100vw, 800px" src="/storage/{{ $item->path }}" alt="" class="imagem-destaque"></div>
            </div>
            
            
            <div class="div-block-176">
              <div class="data-noticia">
                <div class="data">
                  <div class="data-publicada">{{ date('d-m-Y', strtotime($item->date)) }}</div>
                </div>
              </div>
              <div class="titulo-link">
                <h3 class="titulo-noticia">{!! html_entity_decode(mb_substr($item->title, 0, 200, 'UTF-8')) !!}</h3>
              </div>
              <div class="ver-mais">
                <div class="link-noticias"><svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="svg-2">
                    <path d="M16.869 5.68954L15.8084 6.75019L20.3083 11.25H0.75V11.2501V12.75V12.7501H20.3081L15.8084 17.2498L16.869 18.3104L23.1796 12L16.869 5.68954Z" fill="currentColor"></path>
                  </svg></div>
              </div>
            </div>
          </a>

            @endforeach
      

        </div>


         <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-4 py-5 ">
                      <ul class="pagination">
                       {{ $news->links() }}
                    </ul>

                    </div>
                </div>
            </div>


      </div>
    </div>
  </section>


@endsection
