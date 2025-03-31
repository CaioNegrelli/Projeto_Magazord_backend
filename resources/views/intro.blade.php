@extends('layouts.main')

@section('title', 'sinopse')

@section('content')

<body>
    <div class="container">
    <header>
        <div class="header-content">
            <img src="/images/logo.png" alt="" class="logo">
            <p class="headerText">MAGAZORD - Teste Back-End</p>
        </div>
    </header>
        <div class="content">
            <p class="introText">Sistema simples de contatos</p>
            <p class="introText">Foi utilizadoU PHP no backend,HTML e CSS básicos para o front alem do uso da framework Laravel.</p>
            <p class="introText">Laravel é uma framework para PHP, que ultiliza o Padrão MVC, e ultiliza Blade para o front-end.</p>

            <div class="botaoWebsite">
                <a href="{{route('pessoas.index')}}" class="h2botao" id="welcome">
                    website
                </a>
            </div>
        </div>

    </div>

</body>
@endsection