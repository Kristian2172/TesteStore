<?php
require('../config.php');

//Consultar registos da Base de dados
$query = "SELECT * FROM categorias";
$stmt = $db->prepare($query);
$stmt->execute();
$categorias = $stmt->fetchAll();
$nr_categorias = $stmt->rowCount();
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
        <h1>Criação de uma categoria</h1>

        <?php
        if ($nr_categorias == 0) {
            echo "<p><strong>Ainda sem tarefas criadas</strong></p>";?>
            <br>
            <a href="create.php" class="btn btn-secondary btn-sm">Criar uma categoria</a>

        <?php } else {
        ?>
            <!-- Tarefas criadas -->
            <table class="table">
                <thead>
                    <tr>
                        <td scope="col">Id</td>
                        <td scope="col">Nome da categoria</td>
                        <td scope="col">Desconto(%)</td>
                        <td scope="col">Ações</td>
                    </tr>
                    <br>
                </thead>
                <tbody>
                    <a href="create.php" class="btn btn-secondary btn-sm">Criar uma categoria</a>
                    <?php
                    foreach ($categorias as $categoria) {
                    ?>
                        <tr>
                            <td><?php echo $categoria['id'] ?></td>
                            <td><?php echo $categoria['nome'] ?></td>
                            <td><?php echo $categoria['desconto'] ?></td>

                            <td>
                                <a href="edit.php?id=<?php echo $categoria['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                            </td>

                        </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>

        <?php
        }
        ?>
        <a href="../index.php" class="btn btn-secondary btn-sm">Voltar para o inicio</a>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Icon -->
    <script src="https://kit.fontawesome.com/e66c2a9638.js" crossorigin="anonymous"></script>
</body>

</html>