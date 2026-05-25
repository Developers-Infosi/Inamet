@extends('layouts.merge.site')
@section('titulo', 'Oficial - Site do Instituo Nacional de Metereologia e Geofísica')
@section('content')

                         

<div class="container" id="main_container">
<div id="page">



  <div id="container" class="main-map">

         
   <div id="map">
    
   </div>

   <div id="actualMap">
      <h3>Previsão Para a sua província</h3>
      <div id="insideCardActualMap">
        <span><strong>Actual Province</strong> | Digite outro Local</span>
        <input type="text" placeholder="Pesquise uma província" />


        <div id="weatherTemperature">
          <h4>Temperatura</h4>


          <div id="temperatures">
           <div class="max_temp">
             <img src="/assets/images/temperatura_minima.jpg" />
             <span>16 ° C</span>
             <span>Tendencia: <img src="/assets/images/temp_min.png"></span>
           </div>

           <div class="min_temp">
             <img src="/assets/images/temperatura_maxima.png" />
             <span>16 ° C</span>
              <span>Tendencia: <img src="/assets/images/temp_max.png"></span>
           </div>

          </div>
        </div>

         <div id="weatherTemperature">
          <h4>Umidade</h4>


            <div id="humidity">
           <div class="max_humidity">
             <img src="/assets/images/umidade_max.png" />
             <span>95%</span>
           </div>

           <div class="min_humidity">
             <img src="/assets/images/umidade_min.png" />
               <span>80%</span>
           </div>

          </div>

        </div>

    

      </div>
   </div>







  </div>



  <div id="container" >

   <div class="seasonal-prevision">

    <div class="seasonal-header">
        <h3>Previsão Sazonal</h3>

        <select id="seasonalType">
            <option value="temperature">Temperatura</option>
            <option value="rain">Precipitação</option>
            <option value="humidity">Humidade</option>
            <option value="wind">Vento</option>
        </select>
    </div>

    <canvas id="seasonalChart"></canvas>

</div>

  </div>



 


</div>
</div>
                          
                          
</div>
</div>
</div>
                          
@endsection
