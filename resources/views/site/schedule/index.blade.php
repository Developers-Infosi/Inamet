@extends('layouts.merge.site')
@section('titulo', 'Programação - 7ª Cimeira União Africana - União Europeia')
@section('content')

{{-- Banner Inside Page --}}
<section class="hero-page"><img class="image-banner" src="/assets/images/agend.jpg" loading="lazy" sizes="(max-width: 1800px) 100vw, 1800px" srcset="/assets/images/agend.jpg 500w, /assets/images/agend.jpg 800w, /assets/images/agend.jpg 1080w, /assets/images/agend.jpg 1600w, /assets/images/agend.jpg 1800w" alt="" class="image-background-banner">
    <div class="overlay-page">
      <div class="contain">
        <div class="text-banner">
          <div class="texto-conteudo-hero">
            <h1 class="heading-13 white"><strong>Programação</strong></h1>
            <div class="linha-vermelha"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Banner Inside Page --}}

  <section class="section-17 b">
    <div class="contain">
      <div class="div-block-315 _8">
        <p class="paragraph-13">Os <strong>Delegados do 7.ª Cimeira União Africana - União Europeia </strong>incluem líderes empresariais, representantes governamentais e especialistas do setor, que desempenham um papel fundamental nas discussões e decisões estratégicas durante o evento. <br>‍</p>
      </div>
      <div class="div-block-266">
        <div data-current="Tab 1" data-easing="ease" data-duration-in="300" data-duration-out="100" class="tabs w-tabs">
          
            <div class="tabs-menu-2 _1 w-tab-menu" role="tablist">
            <a data-w-tab="Tab 1" class="tab-programa w-inline-block w-tab-link w--current" id="w-tabs-0-data-w-tab-0" href="#w-tabs-0-data-w-pane-0" role="tab" aria-controls="w-tabs-0-data-w-pane-0" aria-selected="true">
              <div>1º DIA</div>
            </a>
            <a data-w-tab="Tab 2" class="tab-programa w-inline-block w-tab-link" tabindex="-1" id="w-tabs-0-data-w-tab-1" href="#w-tabs-0-data-w-pane-1" role="tab" aria-controls="w-tabs-0-data-w-pane-1" aria-selected="false">
              <div>2º DIA</div>
            </a>

            <a data-w-tab="Tab 3" class="tab-programa w-inline-block w-tab-link" tabindex="-1" id="w-tabs-0-data-w-tab-1" href="#w-tabs-0-data-w-pane-1" role="tab" aria-controls="w-tabs-0-data-w-pane-1" aria-selected="false">
              <div>3º DIA</div>
            </a>
           
          </div>

          <div class="tabs-content w-tab-content">


      
            <div data-w-tab="Tab 1" class="tab-pane-tab-1 w-tab-pane w--tab-active" id="w-tabs-0-data-w-pane-0" role="tabpanel" aria-labelledby="w-tabs-0-data-w-tab-0">
              <div class="div-block-213">
               
                <section class="container">
              
             <div class="">
               <table style=" overflow-x: auto;" class="table table-striped table-hover  my-5">
                <thead>
                  <tr>
                    
                    <th scope="col">HORÁRIO</th>
                    <th scope="col">EVENTO</th>
                    <th scope="col">DESCRIÇÃO</th>
                  </tr>
                </thead>
                <tbody>

                   @foreach ($schedulesI as $item)
                  <tr>
                    
                    <td>{{ date('H:i', strtotime($item->start)) }} - {{ date('H:i', strtotime($item->end)) }}</td>
                    <td>{{ $item->program }}</td>
                    <td>{!!html_entity_decode($item->description) !!}</td>
                  </tr>
                  @endforeach


               
                  
                </tbody>
              </table>
             </div>

            </section>

               
              </div>
            </div>


            <div data-w-tab="Tab 2" class="tab-pane-tab-2 w-tab-pane " id="w-tabs-0-data-w-pane-0" role="tabpanel" aria-labelledby="w-tabs-0-data-w-tab-0">
              <div class="div-block-213">

                <section class="container">
              
             <div class="table-responsive">
               <table style=" overflow-x: auto;" class="table table-striped table-hover  my-5">
                <thead>
                  <tr>
                    
                    <th scope="col">HORÁRIO</th>
                    <th scope="col">EVENTO</th>
                    <th scope="col">DESCRIÇÃO</th>
                  </tr>
                </thead>
                <tbody>

                   @foreach ($schedulesII as $item)
                  <tr>
                    
                    <td>{{ date('H:i', strtotime($item->start)) }} - {{ date('H:i', strtotime($item->end)) }}</td>
                    <td>{{ $item->program }}</td>
                    <td>{!!html_entity_decode($item->description) !!}</td>
                  </tr>
                  @endforeach


               
                  
                </tbody>
              </table>
             </div>

            </section>

               
              </div>
            </div>
            
              <div data-w-tab="Tab 3" class="tab-pane-tab-3 w-tab-pane " id="w-tabs-0-data-w-pane-0" role="tabpanel" aria-labelledby="w-tabs-0-data-w-tab-0">
              <div class="div-block-213">

                <section class="container">
              
             <div class="table-responsive">
               <table style=" overflow-x: auto;" class="table table-striped table-hover  my-5">
                <thead>
                  <tr>
                    
                    <th scope="col">HORÁRIO</th>
                    <th scope="col">EVENTO</th>
                    <th scope="col">DESCRIÇÃO</th>
                  </tr>
                </thead>
                <tbody>

                   @foreach ($schedulesIII as $item)
                  <tr>
                    
                    <td>{{ date('H:i', strtotime($item->start)) }} - {{ date('H:i', strtotime($item->end)) }}</td>
                    <td>{{ $item->program }}</td>
                    <td>{!!html_entity_decode($item->description) !!}</td>
                  </tr>
                  @endforeach


               
                  
                </tbody>
              </table>
             </div>

            </section>

                
              </div>
            </div>

            </div>

          </div>
        </div>
      </div>
  
    </div>
  </section>

@endsection
