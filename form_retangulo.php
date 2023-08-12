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
                <label for="largura">Largura:</label>
                <input type="text" class="form-control" id="lagura" name="largura" required>
            </div>
            <div class="form-group">
                <label for="largura">Altura:</label>
                <input type="text" class="form-control" id="altura" name="altura" required>
            </div>
          
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

</div>
<div class="container">
<?php

include 'retangulo.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $largura = $_POST["largura"];
    $altura = $_POST["altura"];

    $retangulo = new Retangulo ($largura,$altura);

    echo "Dados Enviados";
    echo "<br><br>Área: ".$retangulo->calcular_area();
    echo "<br><br>Perímetro: ".$retangulo->calcular_perimetro();
    
}

?>
</div>
</body>
</html>