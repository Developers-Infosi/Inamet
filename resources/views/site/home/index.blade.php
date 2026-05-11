@extends('layouts.merge.site')
@section('titulo', 'Oficial - Site do Instituo Nacional de Metereologia e Geofísica')
@section('content')


<div class="container" id="main_container">
<div id="page">
<div class="page_sections_container">
                         
<div class="container-edited" style="padding-block: 50px; color:#222;">

    @include('extra.map.map')
   
</div>
                          
                          
</div>
</div>
</div>
@endsection
