<!DOCTYPE html>
<html lang="en" >
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie-edge">
     <title>Cadastro de Medicamento</title>
</head>
<body>
    <section class="content">
        <div class="cadastro">
            <h3>Formulario de Cadastro</h3>
            <form class = "form"  method= "POST" action="index.php">
                <label for="name">Nome:</label>
                <input class=" field" name="name" placeholder="Nome">
                <label for="caixa">Caixas:</label>
                <input class=" field" name="caixa" placeholder="Caixas">
                <label for="dose">Doses por caixa:</label>
                <input class=" field" name="dose" placeholder="Doses por caixa">
                <label for="preco">Preço:</label>
                <input class=" field" name="preco" placeholder="Preço">
                <label for="tipo">Tipo:</label>
                <input class=" field" name="tipo" placeholder="Tipo">
                <input type="submit" value="Enviar" name="enviar">

            </form>
        </div>
    </section>



<?php
  
     if(isset($_POST['enviar'])){
        $nome= $_POST['name'];
        $caixa=$_POST['caixa'];
        $dose=$_POST['dose'];
        $preco= $_POST['preco'];
        $tipo=$_POST['tipo'];
     }
 ?>
    </body>
</html>