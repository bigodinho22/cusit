@extends('template.template')
@section('title', 'Can u Solve It?')

@section('banner')

<li><a href="#" class="button style3 large" onclick="jogar()">Jogar</a></li>

@endsection

@section('conteudo')
<section id="intro" class="wrapper style1">
    <div class="title">Introdução</div>
    <div class="container">
        <p class="style1">O que é o jogo?</p>
        <p class="style2">
        Seja bem vindo ao "CAN U SOLVE IT?"							
        </p>
        <p class="style3">
             No jogo a seguir, você passará por uma série de enigmas, que irão testar o seu conhecimento sobre os
mais diversos conteúdos. Não existe tempo limite, é permitido consultar a internet e outros meios. O
objetivo é: Ache a resposta de cada nível e avance pelas telas, um nível pode não possuir apenas uma
tela.<br />
Por se tratar de um desafio com alto nível de dificuldade, as telas possuem dicas, e aqui vai uma:
preste atenção nos mínimos detalhes, pois eles são de extrema importância. Lembre-se: tudo tem um
porquê.
        </p>
        
    </div>
</section>
@endsection