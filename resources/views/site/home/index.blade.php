@extends('layouts.merge.site')
@section('titulo', 'Oficial - Site do Instituo Nacional de Metereologia e Geofísica')
@section('content')


<div class="container" id="main_container">
<div id="page">
<div class="page_sections_container">
                         
<div class="mainSection">




   <div id="container">

    <div id="sidebar">

        <h1>🌦 Meteorologia Angola</h1>

        <div id="weather-list"></div>

    </div>

    <div id="map"></div>

</div>


  <div id="row" style="padding-inline: 4rem;padding-block:2rem;">


    @foreach ($news as $new)

    <div id="newsItem">

      <img src="/storage/{{ $new->path }}" alt="">

      <div id="textItem">
        <a href="{{ url("/noticia/".urlencode($new->title)) }}">
       
          {!! html_entity_decode(mb_substr($new->body, 0, 100, "UTF-8")) !!}...
        </a>

        <a href="{{ url("/noticia/".urlencode($new->title)) }}">   Ler Mais</a>
      </div>

    </div>
      
    @endforeach



  </div>



 
   
</div>
                          
                          
</div>
</div>
</div>
@endsection
