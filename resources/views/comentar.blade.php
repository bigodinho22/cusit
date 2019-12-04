@extends('template.template')
@section('title', 'Enviar comentário')
@section('banner')
    <p>Deixe um comentário!</p>
@endsection
@section('conteudo')
    <section id="intro" class="wrapper style1">
        <div class="title">Comentar</div>
        <div class="container">	
            <form name="comentario" action="{{ route('comentar_form') }}" method="post">
                @csrf
                <input type="text" name="email" placeholder="Seu email" />
                <br />
                <input type="text" name="conteudo" placeholder="Sua mensagem">
                <br />
                <button type="submit" style="color: white;"> Enviar Mensagem </button>
            </form>
        </div>
    </section>
@endsection