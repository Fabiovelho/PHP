<?php

   if(isset($_POST["btn"])){

    $nome = $_POST["nome"];
    $senha =$_POST["senha"];
    $CPF = $_POST["CPF"];
    $email =$_POST["email"];
    $endereço =$_POST["endereço"];
     $nivel =$_POST["nivel"];
    $status =$_POST["status"];

    if(empty(trim($nome))){
        echo "<script> alert('Campo nome em branco');window.location.href='index.php'; </script>";
        exit;
    }
    if(empty(trim($senha))){
        echo "<script> alert('Campo senha em branco');window.location.href='index.php'; </script>";
        exit;
    }
        if(empty(trim($CPF))){
        echo "<script> alert('Campo CPF em branco');window.location.href='index.php'; </script>";
        exit;
        }
          if(empty(trim($senha))){
        echo "<script> alert('Campo senha em branco');window.location.href='index.php'; </script>";
        exit;  
        }
           if(empty(trim($email))){
        echo "<script> alert('Campo email em branco');window.location.href='index.php'; </script>";
           exit;
           }
           if(empty(trim($endereço))){
        echo "<script> alert('Campo endereço em branco');window.location.href='index.php'; </script>";
           exit;
           }
           if(empty(trim($nivel))){
        echo "<script> alert('Campo nivel em branco');window.location.href='index.php'; </script>";
           exit;
           }
      if(empty(trim($status))){
        echo "<script> alert('Campo status em branco');window.location.href='index.php'; </script>";
           exit;
           }

     echo "Nome: " . $nome . "<br>" . 
      "CPF: " . $CPF . "<br>" .
      "senha: " . $senha . "<br>" .
      "email: " . $email . "<br>" . 
      "endereço: " . $endereço . "<br>" . 
       "nivel: " . $nivel . "<br>" .  
        "status: " . $status;
     
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

    <div class="container">
        <form action="" method="post" autocomplete="off">
            
            <div>
                <h1 style="text-align: center;"> Novo Usuario </h1>
            </div>

    
            <div style="margin-top: 3%;" class="row">
    
                <div class="col-md-12">
                    <label  class="form-label">Nome</label>
                    <input type="text" class="form-control" placeholder="digite seu nome aqui" name="nome" >
                </div>

            </div>

            <div style="margin-top: 3%;" class="row">
                
                <div class="col-md-4">
                    <label  class="form-label">CPF</label>
                    <input type="text" class="form-control" placeholder="000.000-00" name="CPF" >
                </div>

                <div class="col-md-4">
                    <label  class="form-label">endereço</label>
                    <input type="text" class="form-control" placeholder="Informe seu endereço" name="endereço" >
                </div>

                <div class="col-md-4">

                    <label  class="form-label">Nivel</label>
                    <select class="form-select" name="nivel">
                        <option selected>Selecionado</option>
                        <option value="1">Usuario</option>
                        <option value="2">Cliente</option>
                        <option value="3">Administrativo</option>
                    </select>
                </div>
            </div>
    
            <div style="margin-top: 3%;" class="row">
                <div class="col-md-4">

                    <label  class="form-label">Email</label>
                    <input type="text" class="form-control" placeholder="Informe seu email" name="email" >

                </div>

            
            

                <div class="col-md-4">
                    <label  class="form-label">senha</label>
                    <input type="password" class="form-control" placeholder="digite sua senha aqui" name="senha" >
                </div>
            
            
           
            
                

                <div class="col-md-4">
                    <label  class="form-label">Status</label>

                    
                        <select class="form-select" name="status">
                            <option selected>Selecionado</option>
                            <option value="1">Usuario</option>
                            <option value="2">Cliente</option>
                            <option value="3">Administrativo</option>
                        </select>
                    
                </div>
         
        </div>
    

        <div style="margin-top: 3%; margin-left: 70%" class="row">

            <div class="cold-md-12">
                <button style=" 
                background-color: red; 
                 margin-top: 3%;" type="submit" class="btn btn-primary"  name="btn">enviar</button>
    
                <button style=" 
                background-color: red; 
                margin-top: 3%;" type="submit" class="btn btn-primary"  name="btn">cancelar</button>
            
            </div>
        </div>
      </form>
   
    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>