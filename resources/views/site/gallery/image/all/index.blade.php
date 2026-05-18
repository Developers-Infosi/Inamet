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
   <a href="{{ route("site.gallery") }}">Galeria</a> 
  </div>

<section id="mainSection">

  <div id="row">

    @foreach ($galleries as $item)
    <a href="{{ url("/galeria/".urlencode($item->name)) }}" id="galleryImage">
      <img src="/storage/{{ $item->cover }}" />
      <p>{{ $item->name }}</p>
    </a>
    @endforeach
    


  </div>

  <nav id="pagination">
    <ul>
      {{ $galleries -> links() }}
    </ul>
  </nav>

</section>
   
</div>
                          
                          
</div>
</div>
</div>
@endsection
