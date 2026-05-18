@extends('layouts.merge.site')
@section('titulo', 'Tempo')
@section('content')


<div class="container" id="main_container">
<div id="page">
<div class="page_sections_container">
                         
<div  style="padding-block: 50px; color:#222;">

   <div id="badge">
    <a href="{{ route("site.home") }}">Home</a> /
   <a href="{{ route("site.weather") }}">Tempo</a> 
  </div>
  
  

<section id="mainSection">

 

  <div id="row">


  </div>

   

</section>
   
</div>
                          
                          
</div>
</div>
</div>
@endsection
