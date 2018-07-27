<?php
session_start();
if (!$_SESSION['usuarioNome']) {
    header("Location: login.php");
}else{
    $bem_vindo = "Usuário: " . $_SESSION['usuarioNome'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Tallys Henrike">
        <title>Lê Santê</title>
        <link rel="icon" href="">
        <link rel="stylesheet" href="css/style.css">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-dark bg-info">
            <span class="navbar-brand mb-0 h1"><?php echo $bem_vindo ?></span>
            <a href="sair.php" class="btn btn-danger">Sair</a>
        </nav>
        <div class="container">
            <div class="row menu-principal">
                <div class="col-10 col-md-5">
                    <a href="cadastrar-cliente.php" class="bg-success text-white item-menu-principal">Cliente</a>
                </div>
                <div class="col-10 col-md-5">
                    <a href="cadastrar-servico.php" class="bg-primary text-white item-menu-principal">Serviço</a>
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <script src="validacao.js" type="text/javascript"></script>
    </body>
</html>