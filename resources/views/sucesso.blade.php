@extends('template.template')
@section('title', 'Obrigado!')

@section('banner')

<p>Obrigado por entrar em contato!</p>

@endsection

@section('conteudo')
<section id="intro" class="wrapper style1">
    <div class="title">Sua opinião é muito importante para nós</div>
    <div class="container">
        <p class="style2">
            <a href="{{ route('index') }}"> Voltar para a página inicial</a>						
        </p>
</section>
@endsection