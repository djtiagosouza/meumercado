<?php session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login | Checklist Equipamentos</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/nifty.min.css" rel="stylesheet">
    <link href="css/demo/nifty-demo-icons.min.css" rel="stylesheet">
    <link href="css/demo/nifty-demo.min.css" rel="stylesheet">
    <link href="plugins/magic-check/css/magic-check.min.css" rel="stylesheet">
    <link href="plugins/pace/pace.min.css" rel="stylesheet">
    <script src="plugins/pace/pace.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/nifty.min.js"></script>
    <script src="js/demo/bg-images.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link href ="css/border.css" rel="stylesheet" type="text/css"></link>
</head>
    <body>
        <div id="container" class="cls-container">
            <div id="bg-overlay"></div>
                <div class="cls-content">
                    <div class="cls-content-sm panel">
                        <div class="panel-body">
                            <div class="mar-ver pad-btm">
                                <br>
                                 <br>
                                <h1 class="h2 mar-no">Controle de Checklist</h1>
                                  
                            </div>
                                <form method="POST" action="controllers/login.php">
                                    <div class="form-group">

                                    <input type="text" class="form-control" name="login" style="text-transform:uppercase" placeholder="USUÁRIO" autofocus required>

                                    </div>
                                    <div class="form-group">

                                    <input type="password" name="password" class="form-control" placeholder="SENHA" required>

                                    </div>

                                     <?php
                                         if(isset($_SESSION['online']) && $_SESSION['online'] == false){
                                         echo '<small style="color:red">Login ou senha inválido(s)!</small>';
                                          }
                                         unset($_SESSION['online']);
                                    ?>

                                    <button class="btn btn-primary btn-lg  btn-block borda">Entrar</button>
                                </form>
                                <br>
                              
                                <form method="POST" action="http://172.18.0.17/cria-usuario/">
                                <input type="hidden" class="form-control" name="id" id="id">
                                    <div>
                                        <button type="submit" class="btn btn-info btn-sm borda">Criar usuário</button>
                                    </div>
                                </form>
                           
                                <form method="POST" action="http://172.18.0.17/recuperar-senha/">
                                    <input type="hidden" class="form-control" name="id" id="id">
                                    <div>
                                        <button type="submit" class="btn btn-second btn-sm">Recuperar senha</button>
                                    </div>
                                </form>
                       
                           

                        </div>
                    </div>
                </div>
        </div>
