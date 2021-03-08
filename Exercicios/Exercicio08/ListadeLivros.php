<?php


require_once './Pessoa.php';
require_once './Livro.php';
require_once './Publicacao.php';
require_once './ListaPessoas.php';



$livro1 = new Livro();
$livro1->set_Titulo('1984');
$livro1->set_Autor('George Orwell');
$livro1->set_totPaginas(328);
$livro1->set_pagAtual(0);
$livro1->set_Leitor($pessoa1->getNome());
$livro1->set_aberto('Não');
$livro1->set_Detalhes('Após uma guerra global, semelhante à segunda grande guerra, porém com mais bombas atômicas, o mundo foi dividido em três continentes: Lestásia, Eurásia e Oceania, onde fica a cidade de Londres. Esse último é comandado pelo líder Big Brother, a figura máxima de poder e controle, “o olho que tudo vê”.');

$livro2 = new Livro();
$livro2->set_Titulo('Harry Potter e a Ordem da Fênix');
$livro2->set_Autor('J.K Rowlling');
$livro2->set_totPaginas(766);
$livro2->set_pagAtual(53);
$livro2->set_Leitor($pessoa3->getNome());
$livro2->set_aberto('Sim');
$livro2->set_Detalhes('Depois de longas e solitárias férias, Harry Potter recebe a inesperada visita de dois dementadores. O encontro rende ao bruxo uma ameaça: ele pode ser expulso de Hogwarts por ter usado magia fora da escola. ');

$livro3 = new Livro();
$livro3->set_Titulo('Version Control with Git: Powerful Tools and Techniques for Collaborative Software Development');
$livro3->set_Autor('Jon Loeliger');
$livro3->set_totPaginas(281);
$livro3->set_pagAtual(21);
$livro3->set_Leitor($pessoa2->getNome());
$livro3->set_aberto('Sim');
$livro3->set_Detalhes('This book shows you how. Learn how to use Git for several real-world development scenarios. Gain insight into Gits common-use cases, initial tasks, and basic functions. ');


 $livro4 = new Livro();
 $livro4->set_Titulo('Do Mil ao Milhão. Sem Cortar o Cafezinho. ');
 $livro4->set_Autor('Thiago Nigro');
 $livro4->set_totPaginas(192);
 $livro4->set_pagAtual(12);
 $livro4->set_Leitor($pessoa1->getNome());
 $livro4->set_aberto('Não');
 $livro4->set_Detalhes('Em seu primeiro livro, Thiago Nigro, criador da plataforma O Primo Rico, ensina aos leitores os três pilares para atingir a independência financeira: gastar bem, investir melhor e ganhar mais. ');

