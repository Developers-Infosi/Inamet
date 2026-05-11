<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Inscritos-{{ date('d-m-Y') }}</title>
</head>


<body style='height:auto; width:100%;'>
    <header class="col-12 mt-2 mb-5">
        <img src="assets/images/logo/flag_ua.jpg" alt="" width="130">
        <img src="assets/images/logo/flag_ue.png" alt="" width="130">

        <p>

        <h2 class="text-center">Lista de Inscritos </h2>

        <div class="row">
            <div class="col-2">
                <b>Data:</b> {{ date('d-m-Y') }}
            </div>

            @if (isset($category))
                <div class="col-2"><b>Categoria:</b> {{ $category }}<br>
                </div>
            @endif

            <br>
            @if (isset($status))
                <div class="col-2"><b>Status:</b> {{ $status }}<br>
                </div>
            @endif
            <br>

            @if (isset($event))
                <div class="col-3">
                    <b>Total de Inscrições da 7ª Cimeira União Africana - União Europeia:</b>
                    {{ $Reuniao }}<br>
                </div>
                <br>
            @endif

            @if (isset($all))
                <div class="col-3">
                    <b>Total de Inscrições por Categoria:</b>
                </div> <br>
            @endif

            @if (isset($Imprensa))
                <div style="display: inline-block" class="col-3 mr-3">
                    <b> Imprensa e comunicação:</b> {{ $Imprensa }}<br>
                </div>
            @endif
            @if (isset($Apoio))
                <div style="display: inline-block" class="col-3 mr-3">
                    <b> Apoio:</b> {{ $Apoio }}<br>
                </div>
            @endif
            @if (isset($Organização))
                <div style="display: inline-block" class="col-3 mr-3">
                    <b> Organização:</b> {{ $Organização }}<br>
                </div>
            @endif
            @if (isset($Segurança))
                <div style="display: inline-block" class="col-3 mr-3">
                    <b> Segurança:</b> {{ $Segurança }}<br>
                </div>
                <br><br>
            @endif
            @if (isset($Serviços))
                <div style="display: inline-block" class="col-3 mr-3">
                    <b> Serviços:</b> {{ $Serviços }}<br>
                </div>
            @endif

            @if (isset($Auxiliares))
                <div style="display: inline-block" class="col-3 mr-3">
                    <b> Auxiliares (Técnico, Logística):</b> {{ $Auxiliares }}<br>
                </div>
            @endif
            @if (isset($Artistas))
                <div style="display: inline-block" class="col-3 mr-3">
                    <b> Artistas:</b> {{ $Artistas }}<br>
                </div>
            @endif

            @if (isset($Delegado))
                <div style="display: inline-block" class="col-3 mr-3">
                    <b> Delegado:</b> {{ $Delegado }}<br>
                </div>
            @endif

            @if (isset($Moderador))
                <div style="display: inline-block" class="col-3 mr-3">
                    <b> Moderador:</b> {{ $Moderador }}<br>
                </div>
            @endif
            @if (isset($Orador))
                <div style="display: inline-block" class="col-3 mr-3">
                    <b> Orador:</b> {{ $Orador }}<br>
                </div>
            @endif
            @if (isset($Participante))
                <div style="display: inline-block" class="col-3 mr-3">
                    <b> Participante/Perito:</b> {{ $Participante }}<br>
                </div>
            @endif
            @if (isset($Secretariado))
                <div style="display: inline-block" class="col-3 mr-3">
                    <b> Secretariado:</b> {{ $Secretariado }}<br>
                </div>
            @endif
            @if (isset($Expositor))
                <div style="display: inline-block" class="col-3 mr-3">
                    <b> Expositor:</b> {{ $Expositor }}<br>
                </div>
            @endif

        </div>

        </p>
    </header>

    <section class="col-12">
        <table class="table table-striped">
            <thead>
                @php $i = 0; @endphp
                <tr>
                    <th>Nº</th>

                    @isset($checkbox['idCard'])
                        <th>Passaporte/BI</th>
                    @endisset

                    @isset($checkbox['name'])
                        <th>Nome</th>
                    @endisset

                    <th> País</th>

                    @isset($checkbox['email'])
                        <th>Email</th>
                    @endisset

                    @isset($checkbox['tel'])
                        <th>Telefone</th>
                    @endisset

                    @isset($checkbox['organization'])
                        <th>Organização</th>
                    @endisset

                    @isset($checkbox['category'])
                        <th>Categoria</th>
                    @endisset

                    @isset($checkbox['status'])
                        <th>Status</th>
                    @endisset

                    @isset($checkbox['meeting'])
                        <th>Evento</th>
                    @endisset
                </tr>
            </thead>

            <tbody>
                @foreach ($signups as $item)
                    <tr>
                        <td><span class="font-6">@php echo $i = $i + 1; @endphp</span></td>

                        @isset($checkbox['idCard'])
                            <td><span class="font-16">{{ $item->idcard }}</span></td>
                        @endisset

                        @isset($checkbox['name'])
                            <td><span>{{ $item->name }}</span></td>
                        @endisset

                        <td><span class="font-6">{{ $item->country }}</span></td>

                        @isset($checkbox['email'])
                            <td><span class="font-6">{{ $item->email }}</span></td>
                        @endisset

                        @isset($checkbox['tel'])
                            <td><span class="font-6">{{ $item->tel }}</span></td>
                        @endisset

                        @isset($checkbox['organization'])
                            <td><span class="font-6">{{ $item->organization }}</span></td>
                        @endisset

                        @isset($checkbox['category'])
                            <td><span class="font-6">{{ $item->category }}</span></td>
                        @endisset

                         @isset($checkbox['status'])
                            <td><span class="font-6">{{ $item->status }}</span></td>
                        @endisset

                        @isset($checkbox['meeting'])
                        <td><span class="font-6">

                            @php
                                // Converter meeting para array SEM ALTERAR TABLEA
                                $meetings = $item->meeting;

                                if (is_string($meetings)) {
                                    $decoded = json_decode($meetings, true);
                                    if (json_last_error() === JSON_ERROR_NONE) {
                                        $meetings = $decoded;
                                    }
                                }

                                if (is_string($meetings)) {
                                    $meetings = [$meetings];
                                }

                                if (!$meetings) {
                                    $meetings = [];
                                }
                            @endphp

                            @foreach ($meetings as $m)
                                {{ $m }}@if(!$loop->last), @endif
                            @endforeach

                        </span></td>
                        @endisset

                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

</body>

</html>
