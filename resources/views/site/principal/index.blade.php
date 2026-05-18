@extends('layouts.merge.site')
@section('titulo', 'Sobre o Director do Inamet')
@section('content')


<div class="container" id="main_container">
<div id="page">
<div class="page_sections_container">
<div  style="padding-block: 50px; color:#222;">
    
       <div id="badge">
    <a href="{{ route("site.home") }}">Home</a> /
     <a href="#">Sobre</a> /
   <a href="{{ route("site.principal") }}">Director do INAMET</a> 
  </div>
        

    <section id="mainSection">

        <div id="principalSection">

            <div id="mainImgPrincipal">
                <img src="/storage/{{ $inametPrincipal->photo }}" alt="{{ $inametPrincipal->name }}" />
            </div>



            <div id="textSection">
                <h1>{{ $inametPrincipal->name }}</h1> 
                <small>Director Geral do INAMET</small>
            </div>

   </div>

    <div id="Biograph">
            
            <p> {!! html_entity_decode($inametPrincipal->biograph) !!}</p>
        
    </div>
    

    </section>
</div>

   

                          
                          
</div>
</div>
</div>
@endsection
