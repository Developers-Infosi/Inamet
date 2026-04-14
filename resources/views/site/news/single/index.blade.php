@extends('layouts.merge.site')
@section('titulo', 'Detalhes da Notícia')
@section('content')

<section class="hero-page"><img class="image-banner" src="/assets/images/news.jpg" loading="lazy" sizes="(max-width: 1800px) 100vw, 1800px" srcset="/assets/images/news.jpg 500w, /assets/images/news.jpg 800w, /assets/images/news.jpg 1080w, /assets/images/news.jpg 1600w, /assets/images/news.jpg 1800w" alt="" class="image-background-banner">
    <div class="overlay-page">
      <div class="contain">
        <div class="text-banner">
          <div class="texto-conteudo-hero">
            <h1 class="heading-13 white"><strong>{{ $news->title }}</strong></h1>
            <div class="linha-vermelha"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

 
  <section class="blog_area single-post-area section-padding pt-3 mt-5 bg-white">
  <div class="container">
    <div class="row">
     
      <div class="col-lg-8">
        <div class="single-post">
          <div class="feature-img mb-3">
            <img class="img-fluid" src="/storage/{{ $news->path }}" alt="Imagem da notícia">
          </div>

          <ul class="blog-info-link mb-3">
            <li><i class="fa fa-calendar"></i> Postado em: {{ date('d/m/Y', strtotime($news->date)) }}</li>
          </ul>

          <div class="text-justify">
            <p>{!! html_entity_decode($news->body) !!}</p>
          </div>
        </div>
      </div>

    
      <div class="col-lg-4">
        <div class="blog_right_sidebar">
          <aside class="single_sidebar_widget popular_post_widget">
            <h3 class="widget_title text-danger">Outras Notícias</h3>

            @foreach ($lasted as $item)
              <div class="media post_item">
                <img src="/storage/{{ $item->path }}" alt="{{ $item->title }}" class="img-fluid">
                <div class="media-body">
                  <a href="{!! url('/noticia/' . urlencode($item->title)) !!}">
                    <h4>{{ $item->title }}</h4>
                  </a>
                  <p>{{ date('d-m-Y', strtotime($item->date)) }}</p>
                </div>
              </div>
            @endforeach

          </aside>
        </div>
      </div>
    </div>
  </div>
</section>

       




@endsection
