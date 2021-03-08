



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





?>


<table border="1"> 

<caption>Relação de Livros</caption>
<br>
<tr> 


<td>Leitor   </td>
<td>Titulo   </td>
<td>Autor    </td>
<td>Total de páginas </td>
<td> Página Atual </td>
<td> Aberto </td>

</tr>

<?php
function getAll($livroEscolhido) {
    echo $livroEscolhido->get_Leitor($livroEscolhido); 
    echo $livroEscolhido->get_Titulo($livroEscolhido);
    echo $livroEscolhido->get_Autor($livroEscolhido);
    echo $livroEscolhido->get_totPaginas($livroEscolhido);
    echo $livroEscolhido->get_pagAtual($livroEscolhido);
    echo $livroEscolhido->get_Aberto($livroEscolhido);
}


?>

<tr>
<td> <?php echo $livro1->get_Leitor(); ?> </td>
<td> <?php echo $livro1->get_Titulo();?> </td>
<td> <?php echo $livro1->get_Autor();?> </td>
<td> <center> <?php echo $livro1->get_totPaginas();?>  </td>
<td> <?php echo $livro1->get_pagAtual();?> </center> </td>
<td> <?php echo $livro1->get_Aberto();?> </td>
</tr>


<tr>
<td> <?php echo $livro2->get_Leitor();?> </td>
<td> <?php echo $livro2->get_Titulo();?> </td>
<td> <?php echo $livro2->get_Autor();?> </td>
<td> <center> <?php echo $livro2->get_totPaginas();?>  </td>
<td> <?php echo $livro2->get_pagAtual();?> </center> </td>
<td> <?php echo $livro2->get_Aberto();?> </td>
</tr>


<tr>
<td> <?php echo $livro3->get_Leitor();?> </td>
<td> <?php echo $livro3->get_Titulo();?> </td>
<td> <?php echo $livro3->get_Autor();?> </td>
<td> <center> <?php echo $livro3->get_totPaginas();?>  </td>
<td> <?php echo $livro3->get_pagAtual();?> </center> </td>
<td> <?php echo $livro3->get_Aberto();?> </td>
</tr>



<tr>
<td> <?php echo $livro4->get_Leitor();?> </td>
<td> <?php echo $livro4->get_Titulo();?> </td>
<td> <?php echo $livro4->get_Autor();?> </td>
<td> <center> <?php echo $livro4->get_totPaginas();?>  </td>
<td> <?php echo $livro4->get_pagAtual();?> </center> </td>
<td> <?php echo $livro4->get_Aberto();?> </td>
</tr>

</table>

<?php 



?>


</body>
</html>







