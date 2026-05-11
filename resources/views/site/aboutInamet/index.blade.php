@extends('layouts.merge.site')
@section('titulo', 'Sobre o Inamet')
@section('content')


<div class="container" id="main_container">
<div id="page">
<div class="page_sections_container">
                         
<div  style="padding-block: 50px; color:#222;">

   <div class="container-edited">
        <div id="mainImgInamet">
            <img src="/site/images/inamet.png" />
        </div>
         <h1 class="mb-2 text-primary font-size-25">{{ $aboutInamet->title }}</h1>

        <div class="text-justify text-organized">
            {!! html_entity_decode($aboutInamet->body) !!}
        </div>

   </div>
   
</div>
                          
                          
</div>
</div>
</div>
@endsection
