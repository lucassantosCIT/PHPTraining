<?php


require_once './Pessoa.php';
require_once './Livro.php';
require_once './Publicacao.php';




$livro1 = new Livro();
$livro1->set_Titulo('1984');
$livro1->set_Autor('George Orwell');
$livro1->set_totPaginas(328);
$livro1->set_pagAtual(0);
$livro1->set_Leitor('Lucas');
$livro1->set_aberto('Não');
//$livro1->$_Detalhes('Após uma guerra global, semelhante à segunda grande guerra, porém com mais bombas atômicas, o mundo foi dividido em três continentes: Lestásia, Eurásia e Oceania, onde fica a cidade de Londres. Esse último é comandado pelo líder Big Brother, a figura máxima de poder e controle, “o olho que tudo vê”.');

$livro2 = new Livro();
$livro2->set_Titulo('Harry Potter e a Ordem da Fênix');
$livro2->set_Autor('J.K Rowlling');
$livro2->set_totPaginas(766);
$livro2->set_pagAtual(53);
$livro2->set_Leitor('Victor');
$livro2->set_aberto('Sim');

$livro3 = new Livro();
$livro3->set_Titulo('Version Control with Git: Powerful Tools and Techniques for Collaborative Software Development');
$livro3->set_Autor('Jon Loeliger');
$livro3->set_totPaginas(281);
$livro3->set_pagAtual(21);
$livro3->set_Leitor('Thalles');
$livro3->set_aberto('Sim');



 $livro4 = new Livro();
 $livro4->set_Titulo('Do Mil ao Milhão. Sem Cortar o Cafezinho. ');
 $livro4->set_Autor('Thiago Nigro');
 $livro4->set_totPaginas(192);
 $livro4->set_pagAtual(12);
 $livro4->set_Leitor('Lucas');
 $livro4->set_aberto('Não');

