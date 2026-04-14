<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Credenciamento - {!! $signup->code ?? $signup['id'] !!}</title>

    <link rel="stylesheet" href="pass/bootstrap.min.css" />
    <style>
        * {
            margin: 0px;
            padding: 0px;
            font-family: Arial, Helvetica, sans-serif !important;
        }

        small {
            font-size: 12px;
            padding-left: 300px !important;
            color #000;
            text-transform: uppercase !important;
        }

        /* Adicionando posição absoluta para o QRCode */
        .qrcode {
            position: absolute;
            right: 30px;
            bottom: 30px;
            width: 60px;
            height: 50px;
        }

        /* Estilizando o container da imagem da bandeira */
        .country-flag {
            position: absolute;
            right: 100px;
            bottom: 30px;
            width: 60px;
            height: 50px;

        }
    </style>
</head>

<body>



</body>

</html>
