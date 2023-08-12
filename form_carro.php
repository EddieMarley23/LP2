<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de Formulário do carro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\styles.css">
</head>
<body>
    <div class="container">
        <h3>Preencha os Dados</h3>
        <form method="post">
            <div class="form-group">
                <label for="marca">marca:</label>
                <input type="text" class="form-control" id="marca" name="marca" required>
            </div>
            <div class="form-group">
                <label for="modelo">Modelo:</label>
                <input type="text" class="form-control" id="modelo" name="modelo" required>
            </div>
            <div class="form-group">
                <label for="ano">Ano:</label>
                <input type="date" class="form-control" id="ano" name="ano" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

</div>
<div class="container">
<?php

include 'Carro.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $ano = $_POST["ano"];
    $carro = new Carro ($marca,$modelo,$ano);

    echo "Dados Enviados";
    echo "<br><br>Marca: ".$carro->get_marca();
    echo "<br><br>Modelo: ".$carro->get_modelo();
    echo "<br><br>Ano: ".$carro->get_ano();
}

?>
</div>
</body>
</html>

