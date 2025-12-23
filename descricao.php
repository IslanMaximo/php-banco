<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descicao</title>
    <?php include_once "include/banco.php"; ?>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <main>
        <?php include_once "include/header.php"; 
            $game = $_GET['cod'];
            $busca = $banco->query("SELECT * FROM jogos where cod = '$game'");
            $resultado = $busca->fetch_object();
            echo ("<table>
                        <tr>
                            <td rowspan='2'><img src='fotos/$resultado->capa' alt=''></td>
                            <td><h3>$resultado->nome</h3></td>
                            <td>$resultado->nota</td>
                        </tr>
                        <tr>
                            <td colspan='3'>$resultado->descricao</td>
                        </tr>
                    </table>");
        ?>
        
    </main>
    
</body>
</html>