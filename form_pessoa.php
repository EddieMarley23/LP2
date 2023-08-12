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
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="Idade">Idade:</label>
                <input type="text" class="form-control" id="Idade" name="Idade" required>
            </div>
            <div class="form-group">
                <label for="profissao">Profissão:</label>
                <input type="text" class="form-control" id="profissao" name="profissao" required>
            </div>
          
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

</div>
<div class="container">
<?php

include 'pessoa.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $nome = $_POST["nome"];
    $Idade = $_POST["Idade"];
    $profissao = $_POST["profissao"];
    $pessoa = new  Pessoa($nome,$Idade,$profissao);

    echo "Dados Enviados";

    echo "<br><br><strong>Nome: </strong>".$pessoa->get_nome();
    echo "<br><br>Idade: ".$pessoa->get_idade();
    echo "<br><br>Profissão: ".$pessoa->get_profissao();

    
}

?>
</div>
</body>
</html>