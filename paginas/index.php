<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Cadastro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="index.php" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Novo Usuario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar Usuarios</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <div class= "container" >
    <div class= "row">
    <div class="col mt-5">

    <?php 
    include("..\config\config.php");
    switch(@$_REQUEST["page"]){
      case "novo":
        include("novo-usuario.php");
        break;
        
      case "listar":
        include("listar-usuario.php");
        break;

      case "salvar":
        include("salvar-usuario.php");
        break;

      default:
        print "<h1>Bem vindos!</h1>";
      
    }
    ?>

    </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>