<?php

   if(isset($_POST["btn"])){

     $nome = $_POST["nome"];
     $senha =$_POST["senha"];
     $idade =$_POST["idade"];
     $data =$_POST["data"];

      if(empty(trim($nome))){
        echo "<script> alert('Campo nome em branco');window.location.href=index.php; </script>";
         if(empty(trim($senha))){
         exit;
         }
        echo "<script> alert('Campo senha em branco');window.location.href=index.php; </script>";
         if(empty(trim($nome))){
        echo "<script> alert('Campo nome em branco');window.location.href=index.php; </script>";
        exit;
        }
          if(empty(trim($idade))){
        echo "<script> alert('Campo idade em branco');window.location.href=index.php; </script>";
        exit;  
        }
           if(empty(trim($data))){
        echo "<script> alert('Campo data em branco');window.location.href=index.php; </script>";
           exit;
           }




      }

     echo "Nome: " . $nome . "<br>" . 
      "Senha: " . $senha. "<br>" .
      "Idade: " . $idade. "<br>" .
      "Data: " . $data;
   }



?>




<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AULA 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>

  <body>
    
    <ul class="nav">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index2.php">Cadastro de frutas</a>
    </li>
    
    </ul>

    
    <div class="container">




    <form method="post" action="" autocomplete="off">
      
    
    <div class="row">

    
    <div class="col-md-6">
        <label  class="form-label">nome</label>
        <input type="text" class="form-control" placeholder="digite seu nome aqui" name="nome" >
</div>
    
<div class="col-md-6">
        <label  class="form-label">senha</label>
        <input type="password" class="form-control" placeholder="digite sua senha aqui" name="senha" >

      </div>

</div>

<div class="row">

    
    <div class="col-md-6">
        <label  class="form-label">idade</label>
        <input type="text" class="form-control" placeholder="digite sua idade aqui" name="idade" >
</div>
    
<div class="col-md-6">
        <label  class="form-label">data</label>
        <input type="date" class="form-control" placeholder="digite sua data de nascimento aqui" name="data" >

      </div>

</div>

<div class="row">

    <div class="cold-md-12">
    <button style="width: 100%; 
    background-color: red; 
    margin-top: 3%;" type="submit" class="btn btn-primary"  name="btn">enviar</button>
    
  </div>
    
</div>
    </form>
   
  </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>