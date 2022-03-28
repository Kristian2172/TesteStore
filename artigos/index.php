<?php
require('../config.php');

//Consultar registos da Base de dados
$query = "  SELECT a.id, a.nome, a.stockatual, a.stockminimo, a.preco, categorias.categoria
            FROM artigos AS a
            INNER JOIN categorias ON a.categoria_id = categorias.id";

$stmt = $db->prepare($query);
$stmt->execute();
$artigos = $stmt->fetchAll();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><?php echo $appName; ?></title>
</head>

<body>
    <div class="container">
    <table class="table">
            <thead>
                <tr>
                    <td scope="col">Id</td>
                    <td scope="col">Nome</td>
                    <td scope="col">Stock Atual</td>
                    <td scope="col">Stock Minimo</td>
                    <td scope="col">Preço</td>
                    <td scope="col">Categoria</td>
                </tr>
            </thead>
            
        </table>

        <a href="../index.php" class="btn btn-secondary btn-sm">Voltar para o inicio</a>




    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Icon -->
    <script src="https://kit.fontawesome.com/e66c2a9638.js" crossorigin="anonymous"></script>
</body>

</html>