<section class="py-6 py-lg-7">
    <div class=container>
        <div class=row>
            <div class=col>
                <div class="row justify-content-between align-items-baseline">
                    <div class="col my-5">

                        <a href="{{ route('site.schedule') }}">
                            <h2 class="text-dark"> Agenda da Reunião </h2>
                        </a>
                    </div>
                    <div class="col-auto small">
                        <ul class="nav nav-tabs border-0" id=myTab role=tablist>
                            @if ($schedulesI)
                                <li class=nav-item>
                                    <a class="nav-link font-weight-bold px-2 border-0 active" id=day04-tab
                                        data-toggle=tab href=#day22 role=tab aria-controls=day04 aria-selected=true>
                                        Dia 22
                                    </a>
                                </li>
                            @endif

                            @if ($schedulesII)
                                <li class=nav-item>
                                    <a class="nav-link font-weight-bold px-2 border-0 " id=day05-tab data-toggle=tab
                                        href=#day23 role=tab aria-controls=day05 aria-selected=false>
                                        Dia 23
                                    </a>
                                </li>
                            @endif

                            @if ($schedulesIII)
                                <li class=nav-item>
                                    <a class="nav-link font-weight-bold px-2 border-0" id=day06-tab data-toggle=tab
                                        href=#day24 role=tab aria-controls=day06 aria-selected=false>
                                        Dia 24
                                    </a>
                                </li>
                            @endif

                            @if ($schedulesIV)
                                <li class=nav-item>
                                    <a class="nav-link font-weight-bold px-2 border-0" id=day07-tab data-toggle=tab
                                        href=#day25 role=tab aria-controls=day07 aria-selected=false>
                                        Dia 25
                                    </a>
                                </li>
                            @endif








                        </ul>
                    </div>
                </div>



                <div class=tab-content id=myTabContent>
                    @if ($schedulesI)
                        <div class="tab-pane fade show active" id=day22 role=tabpanel aria-labelledby=day04-tab>
                            <div class=table-responsive>
                                <table class="table table-striped font-size-5 mb-0">
                                    <thead>
                                        <tr class="font-size-6 text-secondary">
                                            <th scope=col>Horário</th>
                                            <th scope=col>Programa</th>
                                            <th scope=col>Descrição</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($schedulesI as $item)
                                            <tr>
                                                <td style=" width: 300px">{{ date('H:i', strtotime($item->start)) }} -
                                                    {{ date('H:i', strtotime($item->end)) }}</td>
                                                <td>{{ $item->program }}</td>
                                                <td>{!! html_entity_decode($item->description) !!}</td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif

                    @if ($schedulesII)

                        <div class="tab-pane fade" id=day23 role=tabpanel aria-labelledby=day05-tab>
                            <div class=table-responsive>
                                <table class="table table-striped font-size-5 mb-0">
                                    <thead>
                                        <tr class="font-size-6 text-secondary">
                                            <th scope=col>Horário</th>
                                            <th scope=col>Programa</th>
                                            <th scope=col>Descrição</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($schedulesII as $item)
                                            <tr>
                                                <td style=" width: 300px">{{ date('H:i', strtotime($item->start)) }} -
                                                    {{ date('H:i', strtotime($item->end)) }}</td>
                                                <td>{{ $item->program }}</td>

                                                <td style="width:570px">{!! html_entity_decode($item->description) !!}</td>


                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif

                    @if ($schedulesIII)
                        <div class="tab-pane fade" id=day24 role=tabpanel aria-labelledby=day06-tab>
                            <div class=table-responsive>
                                <table class="table table-striped font-size-5 mb-0">
                                    <thead>
                                        <tr class="font-size-6 text-secondary">
                                            <th scope=col>Horário</th>
                                            <th scope=col>Programa</th>
                                            <th scope=col>Descrição</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($schedulesIII as $item)
                                            <tr>
                                                <td style=" width: 300px">{{ date('H:i', strtotime($item->start)) }} -
                                                    {{ date('H:i', strtotime($item->end)) }}</td>
                                                <td>{{ $item->program }}</td>
                                                <td>{!! html_entity_decode($item->description) !!}</td>


                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif

                    @if ($schedulesIV)
                        <div class="tab-pane fade" id=day25 role=tabpanel aria-labelledby=day07-tab>
                            <div class=table-responsive>
                                <table class="table table-striped font-size-5 mb-0">
                                    <thead>
                                        <tr class="font-size-6 text-secondary">
                                            <th scope=col>Horário</th>
                                            <th scope=col>Programa</th>
                                            <th scope=col>Descrição</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($schedulesIV as $item)
                                            <tr>
                                                <td style=" width: 300px">{{ date('H:i', strtotime($item->start)) }} -
                                                    {{ date('H:i', strtotime($item->end)) }}</td>
                                                <td>{{ $item->program }}</td>

                                                <td>{!! html_entity_decode($item->description) !!}</td>


                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
</section>
