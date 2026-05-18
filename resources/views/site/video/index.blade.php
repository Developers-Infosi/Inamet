@extends('layouts.merge.site')
@section('titulo', 'Vídeos')
@section('content')


<div class="container" id="main_container">
<div id="page">
<div class="page_sections_container">
                         
<div  style="padding-block: 50px; color:#222;">

   <div id="badge">
    <a href="{{ route("site.home") }}">Home</a> /
    <a href="#">Informações</a> /
   <a href="{{ route("site.videos") }}">Videos</a> 
  </div>


<section id="mainSection">

  <div id="row">

    @foreach ($videos as $video)
    <div id="videoItem">
        <iframe src="{{ $video->link }}" id="iframeVideoDisplay"> </iframe>
        <p>{{ $video->title }}</p>
    </div>
    @endforeach
  
    


  </div>


    <nav id="pagination">
    <ul>
      {{ $videos -> links() }}
    </ul>
  </nav>

</section>
   
</div>
                          
                          
</div>
</div>
</div>
@endsection
