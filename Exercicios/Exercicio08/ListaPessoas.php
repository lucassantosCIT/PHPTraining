<?php


require_once './Pessoa.php';
require_once './Livro.php';
require_once './Publicacao.php';



// private $_nome;
// private $_sexo;
// private $_idade;


$pessoa1 = new Pessoa();
$pessoa1->setNome('Lucas');
$pessoa1->setSexo('Masculino');
$pessoa1->setIdade('20');


$pessoa2 = new Pessoa();
$pessoa2->setNome('Thalles');
$pessoa2->setSexo('Masculino');
$pessoa2->setIdade('57');


$pessoa3 = new Pessoa();
$pessoa3->setNome('Anne');
$pessoa3->setSexo('Feminino');
$pessoa3->setIdade('32');