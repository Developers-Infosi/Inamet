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
   <a href="{{ route("site.gallery") }}">Galeria</a> /
   <a href="#">{{ $gallery->name }}</a>
  </div>

<section id="mainSection">

  <div id="row">

    @foreach ($images as $item)
    <a href="/storage/{{ $item->path }}" data-fancybox="gallery" id="galleryImage">
      <img src="/storage/{{ $item->path }}" />
      <p>{{ $item->name }}</p>
    </a>
    @endforeach
    


  </div>

</section>
   
</div>
                          
                          
</div>
</div>
</div>
@endsection
