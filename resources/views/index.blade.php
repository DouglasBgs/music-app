<!doctype html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem Vindo!</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<x-navbar></x-navbar>
<header class="masthead text-white text-center "
        style="background:url('https://desenvolvi.com.br/wp-content/uploads/2018/08/Desenvolvi-Desenvolvimento-Web-Laravel.png')no-repeat center center;background-size:cover; padding-top: 25%">

</header>
<section class="testimonials text-center bg-light mb-5">
    <div class="container">
        <h2 class="mb-5">Bem vindo ao Music App</h2>
        <div class="card">
            <div class="card-header">
               Novidades
            </div>
            <div class="card-body">
                <h5 class="card-title">Armazene e ouça suas músicas</h5>
                <p class="card-text">Crie albuns e listas de reprodução com suas músicas preferidas</p>
                <a href="/albuns" class="btn btn-dark">Criar</a>
            </div>
        </div>
    </div>
</section>

<div class="fixed-bottom">
<x-footer ></x-footer>
</div>
</body>
</html>
