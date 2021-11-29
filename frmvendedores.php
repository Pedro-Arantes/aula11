<?php

    include('conexao.php');

    try {

      $sql = "insert into tblvendedores (vendedor,dataadmissao,salario) values (:vendedor,:dataadmissao,:salario)";

      $stmt = $con->prepare($sql);

      

      $stmt->bindValue(":vendedor",$_POST["vendedor"]);

      $stmt->bindValue(":dataadmissao",$_POST["dataadmissao"]);

      $stmt->bindValue(":salario",$_POST["salario"]);

      $stmt->execute();

      

    } catch(PDOException $e){

        echo "Não Cadastrou. ".$e->getMessage();


    }

?>


<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Vendedores</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Página inicial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastro
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="frmclientes.php">Clientes</a></li>
            <li><a class="dropdown-item" href="frmprodutos.php">Produtos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="frmvendedores.php">Vendedores</a></li>
            <li><a class="dropdown-item" href="frmvendas.php">Vendas</a></li>
          </ul>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-warning" type="submit">Busca</button>
      </form>
    </div>
  </div>
</nav>




    <h1>Cadastro de Vendedores</h1>

    <!-- método de envio são 2 

        * method="GET" - Enviar sem segurança pois exibe os dados na url - mais rápido

        * method="POST" - Oculta os dados da url - mais lento

    -->

    <form class="g-3  bg text-dark"method="post">
        <div class="container">
            <div class="row">
                <div class="col">
                <label for="examplecliente" class="form-label">Cliente</label>
                <input id="examplecliente"required type="text" name="cliente">
                <br>
                <br>
                </div>
                
                
                
            </div>
            <div class="row">
            <div class="col">
                <label for="exampleemail" class="form-label">Email</label> <input id="exampleemail" required type="email" name="email">
                <br>
                <br>
            </div>

            </div>
            <div class="row container-fluid">
                <div class="col">
                  <input class="btn btn-outline-warning form-control form-control-lg  " type="submit" value="Cadastrar">
                </div>
                <div class="col">
                  <input  class="btn btn-outline-danger form-control form-control-lg" type="reset" value="Apagar">
                </div>

            
            </div>
        </div>

        Vendedor <input type="text" name="vendedor"><br>

        <br>

        Data de Admissão   <input type="date" name="dataadmissao"><br>

        <br>

        Salário <input type="text" name="salario">

        <input type="submit" value="Cadastrar">

    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>

</html>