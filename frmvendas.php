<?php

    include('conexao.php');

    try {

      $sql = "insert into tblvendas (idvendedor,idproduto,qtd) values (:idvendedor,:idproduto,:qtd)";

      $stmt = $con->prepare($sql);

      

      $stmt->bindValue(":idvendedor",$_POST["idvendedor"]);

      $stmt->bindValue(":idproduto",$_POST["idproduto"]);

      $stmt->bindValue(":qtd",$_POST["qtd"]);

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

    <title>Vendas</title>

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


    <h1>Cadastro de Vendas</h1>

    <!-- método de envio são 2 

        * method="GET" - Enviar sem segurança pois exibe os dados na url - mais rápido

        * method="POST" - Oculta os dados da url - mais lento

    -->

    <form method="post">

        <div class="container">
            <div class="row">
                <div class="col">
                Cliente <input type="text" name="cliente"><br>
                </div>
                <div class="col">
                Email   <input type="email" name="email"><br>
                </div>
                <div class="col">
                    Column
                </div>
            </div>
        </div>

        Numero de Identificação do Vendedor <input type="text" name="idvendedor"><br>

        <br>

        Numero de Identificação do Produto  <input type="text" name="idproduto"><br>

        <br>

        Quantidade <input type="text" name="qtd">

        <input type="submit" value="Cadastrar">

    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>

</html>