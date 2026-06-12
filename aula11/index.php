<?php
  session_start();
 if(isset($_POST["btn"])){
     $nome = $_POST["nome"];
    $senha =$_POST["senha"];

     if(empty(trim($nome))){
        echo "<script> alert('Campo nome em branco');window.location.href='index.php'; </script>";
        exit;
    }
    if(empty(trim($senha))){
        echo "<script> alert('Campo senha em branco');window.location.href='index.php'; </script>";
        exit;
    }

    if($nome =="Mauricio" && $senha = "123a"){

    $_SESSION['logado'] = TRUE;
    header("location: home.php");

    }else{
        
    echo "<script> alert('usuario ou senha incorreto');window.location.href='index.php'; </script>";
        exit;
        
    }
 }
    
    ?>




<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula 11</title>
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    
        

    <div class="container">

       
        <div class="row">
            <h1 style="text-align: center; margin: top 10%;">Tela de Login</h1>
        </div>
        <form action="" method="post">
        
        <div class="row">
            <div class="col-md-12">
                <label  class="form-label">Usuario</label>
                    <input type="text" class="form-control" placeholder="digite seu usuario aqui" name="nome" >

            </div>
        </div>
     
         <div class="row">
            <div class="col-md-12">
                <label  class="form-label">senha</label>
             <input type="password" class="form-control" placeholder="digite sua senha aqui" name="senha" >

            </div>
        </div>

         <div class="row">



            <div class="col-md-12">
              <button class="btn btn-primary" style="width: 100%; background-color: red; margin-top: 3%" name="btn" >Logar</button> 

            </div>
        </div>

    </div>
</form>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>