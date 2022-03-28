<?php
    require('config.php');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->

    <title><?php echo $appName; ?></title>
</head>

<body>
    <div class="container">
        <h1><?php echo $appName; ?></h1>

        <!-- Botão para consultar artigo -->
        <a href="artigos/index.php" class="btn btn-secondary">Consultar artigos</a>

        <!-- Botão para consultar categoria -->
        <a href="categorias/index.php" class="btn btn-secondary">Consultar categorias</a>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Icon -->
    <script src="https://kit.fontawesome.com/efb1940d88.js" crossorigin="anonymous"></script>
</body>

</html>