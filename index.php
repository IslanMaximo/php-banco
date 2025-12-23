<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <?php
        include_once "include/banco.php"; //Abertura do banco
    ?>
    <title>jogos</title>
</head>
<body>
    <main>
        <?php
        include_once "include/header.php"; //Cabeçalho
        $o = $_GET['o'] ?? "nome";
        $q = "SELECT * FROM jogos";

        switch($o){
            case "o":
                $q .= " Order by nome";
                break;
            case "d":
                $q .= " Order by produtora";
                break;
            case "na":
                $q .= " Order by nota desc";
                break;
            case "nb":
                $q .= " Order by nota";
                break;
            break;
        }
            $busca= $banco->query($q);
            echo "<table>";
            while($resultado = $busca->fetch_object()){
                echo "<tr>
                <td ><img class='tamb' src='fotos/$resultado->capa' alt=''></td>
                <td><a href= 'descricao.php?cod=$resultado->cod' >$resultado->nome</a>
                    <br>$resultado->genero
                </td>
                    </tr>";
            }
            echo"</table>";
        ?>
    </main>
</body>
</html>