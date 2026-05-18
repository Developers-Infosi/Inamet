@extends('layouts.merge.site')
@section('titulo', 'Notícias')
@section('content')


<div class="container" id="main_container">
<div id="page">
<div class="page_sections_container">
                         
<div  style="padding-block: 50px; color:#222;">

   <div id="badge">
    <a href="{{ route("site.home") }}">Home</a> /
    <a href="#">Informações</a> /
   <a href="{{ route("site.news") }}">Notícias</a> 
  </div>
  
  

<section id="mainSection">

 

  <div id="row">


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

    <nav id="pagination">
    <ul>
      {{ $news -> links() }}
    </ul>
  </nav>

</section>
   
</div>
                          
                          
</div>
</div>
</div>
@endsection
