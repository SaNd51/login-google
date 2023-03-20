<?php
include('testar.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Login com botão dançante - @programador.cs</title>
    <link rel="stylesheet" href="estilo.css">
    
</head>
<body>
<div class="caixa__login">
<form style="text-align: center;">
    <a href="sair.php">
    <span></span>
    <span></span>
    <span></span>
    <span></span>        
    Sair
    </a>
</form>

</div>
<?php
	if(isset($_GET['mess'])){
        if ($_GET['mess'] == 'ok') {
            echo
                "<script defer>window.alert('logado!')</script>"
            ;
        }
	}
?>
</body>

</html>