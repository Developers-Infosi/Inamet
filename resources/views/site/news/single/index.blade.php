@extends('layouts.merge.site')
@section('titulo', 'Sobre o Inamet')
@section('content')


<div class="container" id="main_container">
<div id="page">
<div class="page_sections_container">
                         
<div  style="padding-block: 50px; color:#222;">

  <div id="badge">
    <a href="{{ route("site.home") }}">Home</a> /
    <a href="#">Informações</a> /
   <a href="{{ route("site.news") }}">Notícias</a> /
   <a href="#">{{ $news->title }}</a>
  </div>

<section id="mainSection">

  

  <div id="singleNews">

    <div id="imageSection">
      <div>
          <img src="/storage/{{ $news->path }}" />
      </div>
    

      <div>
        <h1>{{ $news->title }}</h1>
        <span>Autor: {{ $news->typewriter  }}</span>
        <span>Data: {{ date("d-m-Y",strtotime($news->date)) }}</span>
      </div>
    </div>

    <div id="textSection">
      {!! html_entity_decode($news->body) !!}
    </div>
    

   

  </div>


   <div id="otherNews">
        <h3>Outras Notícias</h3>


        @foreach ($lasted as $item)

        <a href="{{ url("/noticia/".urlencode($item->title)) }}" id="otherNewsRow">

          <div>
            <p>
              {{ $item->title }}
            </p>
            <span>{{ date("d-m-Y",strtotime($item->date)) }}</span>
          </div>

          <div>
            <img src="/storage/{{ $item->path }}" alt="" />
          </div>

        </a>
          
        @endforeach

        
    </div>

 
</section>
   
</div>
                          
                          
</div>
</div>
</div>
@endsection
