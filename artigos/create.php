<?php
require('../config.php');

// Categoria
$query = "SELECT * FROM categorias";
$stmt = $db->prepare($query);
$stmt->execute();
$categorias = $stmt->fetchAll();

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

        <form action="store.php" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Escreva o nome do artigo</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="mb-3">
                <label for="stockatual" class="form-label">Escreva o stock atual</label>
                <input type="number" class="form-control" id="stockatual" name="stockatual">
            </div>
            <div class="mb-3">
                <label for="stockminimo" class="form-label">Escreva o stock minimo</label>
                <input type="number" class="form-control" id="stockminimo" name="stockminimo">
            </div>
            <div class="mb-3">
                <label for="preco" class="form-label">Escreva o preco</label>
                <input type="number" step="0.01" class="form-control" id="preco" name="preco">
            </div>

            <!-- Categorias -->
            <div class="mb-3">
                <label for="categoria_id" class="form-label">Escolha a categoria</label>
                <select name="categoria_id" id="categoria_id" class="form-select">
                    <option value=""></option>
                    <?php
                        foreach ($categorias as $categoria){
                    ?>
                        <option value="<?php echo $categoria['id']; ?>"><?php echo $categoria['nome'] ?></option>
                    <?php
                        }
                    ?>
                </select>
            </div>
            <a href="../index.php" class="btn btn-secondary">Voltar</a>
            <button type="submit" class="btn btn-primary">Confirmar</button>
        </form>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>