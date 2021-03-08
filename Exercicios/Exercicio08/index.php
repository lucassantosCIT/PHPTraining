
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 08</title>
</head>
<body>

<?php



    require_once './Pessoa.php';
    require_once './Livro.php';
    require_once './Publicacao.php';
    require_once './ListadeLivros.php';
    require_once './ListaPessoas.php';




// TABELA DE RELAÇÃO DE LIVROS

?>

    <table border="1"> 

        <caption>Relação de Livros</caption>
    <br>
    <tr> 

<center> <strong>  </strong> </center>
<td> <center> <strong> Leitor </strong> </center> </td>
<td> <center> <strong> Titulo </strong> </center>    </td>
<td> <center> <strong> Autor </strong> </center>     </td>
<td> <center> <strong> Total de páginas </strong>  </center> </td>
<td> <center> <strong> Página Atual </strong> </center>  </td>
<td> <center> <strong> Aberto </strong> </center>  </td>
<td> <center> <strong> Detalhes </strong> </center>  </td>

    </tr>


    <tr>
<td> <center> <?php echo $livro1->get_Leitor(); ?> </center> </td>
<td> <?php echo $livro1->get_Titulo();?>  </td>
<td> <center> <?php echo $livro1->get_Autor();?> </center> </td>
<td> <center> <?php echo $livro1->get_totPaginas();?> </center> </td>
<td> <center> <?php echo $livro1->get_pagAtual();?> </center> </td>
<td> <center> <?php echo $livro1->get_Aberto();?> </center> </td>
<td> <center> <?php echo $livro1->get_Detalhes();?> </center> </td>
    </tr>




    <tr>
<td> <?php echo $livro2->get_Leitor();?> </td>
<td> <?php echo $livro2->get_Titulo();?> </td>
<td> <?php echo $livro2->get_Autor();?> </td>
<td> <center> <?php echo $livro2->get_totPaginas();?>  </td>
<td> <center> <?php echo $livro2->get_pagAtual();?> </center> </td>
<td> <?php echo $livro2->get_Aberto();?> </td>
<td> < <?php echo $livro2->get_Detalhes();?> </center> </td>
    </tr>


    <tr>
<td> <?php echo $livro3->get_Leitor();?> </td>
<td> <?php echo $livro3->get_Titulo();?> </td>
<td> <?php echo $livro3->get_Autor();?> </td>
<td> <center> <?php echo $livro3->get_totPaginas();?>  </td>
<td> <center> <?php echo $livro3->get_pagAtual();?> </center> </td>
<td> <?php echo $livro3->get_Aberto();?> </td>
<td>  <?php echo $livro3->get_Detalhes();?>  </td>
    </tr>



    <tr>
<td> <?php echo $livro4->get_Leitor();?> </td>
<td> <?php echo $livro4->get_Titulo();?> </td>
<td> <?php echo $livro4->get_Autor();?> </td>
<td> <center> <?php echo $livro4->get_totPaginas();?>  </td>
<td> <center> <?php echo $livro4->get_pagAtual();?> </center> </td>
<td> <?php echo $livro4->get_Aberto();?> </td>
<td> <?php echo $livro4->get_Detalhes();?>  </td>
    </tr>

    </table>

<?php 

// FIM DA TABELA DE LIVROS

?>

<br>


<br>


    <table border="1"> 

     <caption>Relação de Pessoas</caption>
    <tr> 


<td><center> <strong> Nome </strong> </center> </td>
<td><center> <strong> Sexo </strong> </center> </td>
<td><center> <strong> Idade </strong> </center> </td>


    </tr>


    <tr>
<td> <?php echo $pessoa1->getNome();?> </td>
<td> <?php echo $pessoa1->getSexo();?> </td>
<td> <center> <?php echo $pessoa1->getIdade();?> </center> </td>
    </tr>


    <tr>
<td> <?php echo $pessoa2->getNome();?> </td>
<td> <?php echo $pessoa2->getSexo();?> </td>
<td> <center><?php echo $pessoa2->getIdade();?> </td>
    </tr>

    <tr>
<td> <?php echo $pessoa3->getNome();?> </td>
<td> <?php echo $pessoa3->getSexo();?> </td>
<td> <center> <?php echo $pessoa3->getIdade();?> </center> </td>
    </tr>

</body>
</html>







