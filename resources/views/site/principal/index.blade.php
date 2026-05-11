@extends('layouts.merge.site')
@section('titulo', 'Sobre o Director do Inamet')
@section('content')


<div class="container" id="main_container">
<div id="page">
<div class="page_sections_container">
                         
<div  style="padding-block: 50px; color:#222;">

   <div id="principalSection" class="container-edited ">
    <div id="mainImgPrincipal">
        <img src="/storage/{{ $inametPrincipal->photo }}" alt="{{ $inametPrincipal->name }}" />
    </div>
         <h1 class="mb-2 text-primary font-size-25">{{ $inametPrincipal->name }}</h1>

        <div class="text-justify text-organized">
            {!! html_entity_decode($inametPrincipal->biograph) !!}
        </div>

   </div>
   
</div>
                          
                          
</div>
</div>
</div>
@endsection
