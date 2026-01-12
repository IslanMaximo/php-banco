<?php
    echo("<p>Entrar</p>");
    echo ("<h1>Escolha seu jogo</h1>");
    echo ("<p>Ordenar:<a href='index.php?o=n'> Nome</a> | <a href='index.php?o=d'>Distribuidora </a>| <a href='index.php?o=na'>Nota Alta </a>| <a href='index.php?o=nb'>Nota Baixa </p></a>");
    echo ("<form action='index.php?cod=b' method='get'>");
    echo ("<input type='text' name='busca' id='busca'>");
    echo ("<input type='button' name='Buscar' id='Buscar' value='Buscar'>");
    echo ("</form>");
?>