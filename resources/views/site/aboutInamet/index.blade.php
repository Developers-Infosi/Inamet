@extends('layouts.merge.site')
@section('titulo', 'Sobre o Inamet')
@section('content')


<div class="container" id="main_container">
<div id="page">
<div class="page_sections_container">


               
<div  style="padding-block: 50px; color:#222;">

        
   <div id="badge">
    <a href="{{ route("site.home") }}">Home</a> /
     <a href="#">Sobre</a> /
   <a href="{{ route("site.aboutInamet") }}">Sobre o INAMET</a> 
  </div>
          

    <section id="mainSection">
   <div id="aboutInamet" class="container-edited">
        <div id="mainImgInamet">
            <img src="/assets/images/logo/logo.png" />
        </div>
        

        <div id="textSection" class="text-justify text-organized">
             <h1 class="mb-2 text-primary font-size-25">{{ $aboutInamet->title }}</h1>
            {!! html_entity_decode($aboutInamet->body) !!}
        </div>

   </div>
</section>
</div>
                          
                          
</div>
</div>
</div>
@endsection
