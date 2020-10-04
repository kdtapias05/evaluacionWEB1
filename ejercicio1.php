<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<header>

<nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">WEB 1</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a class="nav-link" href="ejercicio1.php">Punto 1 <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="ejercicio2.php">Punto 2 <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="ejercicio3.php">Punto 3 <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="ejercicio4.php">Punto 4 <span class="sr-only">(current)</span></a>
        </li>
        </ul>
       <form class="form-inline my-2 my-lg-0">
         <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
       </form>
       </div>

</nav>


</header>

<main>

<div class="container-fluid">
    <h1 class="text-center mt-3"><img src="images.jpg" alt="Imagen1" width = "400px"></h1>
    <h1 class="text-center">CALCULATOR</h1>
    <form action="ejercicio1.php" method="POST">
<div class="form-group row mt-3 justify-content-center">
    <label for="number1" class="col-1">Número 1</label>
    <input type="number" name="number1" id="number1" class="form-control col-2"  placeholder="Número 1">
    <label for="number2" class="col-1">Número 2</label>
    <input type="number" class="form-control col-2" name="number2" id="number2" placeholder="Número 2">
</div>
<div class="form-group row mt-3 justify-content-center">
    <select name="operator" id="operator" class="form-control offset-1 col-5">
    <option value="" selected disabled>Selecciona una operacion</option>
    <option value="add">Sumar</option>
    <option value="rest">Restar</option>
    <option value="multiplication">Multiplicar</option>
    <option value="divide">Dividir</option>
    </select>
</div>
            
<div class="form-group row justify-content-center">
<div class="col-1">
    <button type="submit" name ="realizaroperacion" class="btn btn-dark">Realizar Operacion</button>
</div>
</div>
    </form>
        
 <?php if(isset($_POST['realizaroperacion'])) : ?>
        
 <?php 
    if(!empty($_POST['operator'])) {
    $operator = $_POST['operator'];
                
    $number1 = isset($_POST['number1']);
    $number2 = isset($_POST['number2']);
                
    if ($operator == "add") {
                    
    $result = $_POST["number1"] + $_POST["number2"];
                    
    }
    else if ($operator == "rest") {
    $result = $_POST["number1"] - $_POST["number2"];
    }
    else if ($operator == "multiplication") {
    $result = $_POST["number1"] * $_POST["number2"];
    }
    else {
    $result = $_POST["number1"] / $_POST["number2"];
    }
    }
    else {
    echo 'No se ha seleccionado ningún operador';     
    }
   ?>
                
    <h4 class="text-center">
      <?php echo("El resultado de la operación es: ". $result) ?>
    </h4>

     <h4></h4>
     <?php endif ?>

   
    </div>

</main>

<footer>


</footer>
    
    

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html> 