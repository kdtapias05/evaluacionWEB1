<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

<HEADER>



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

</HEADER>

<MAIN>

    
    <div class="container-fluid">
        <h1 class="text-center mt-3"><img src="descarga.png" alt="Imagen1" width = "400px"></h1>
        <h4 class="text-center">Indice de Masa Corporal (IMC)</h4>
        <form class="mt-3" action="ejercicio2.php" method="POST">
            <div class="form-group row mt-3 justify-content-center">
                <label for="peso">Peso</label>
             <div class="col-2">
                <input type="number" name="peso" id="peso" class="form-control"  placeholder="Peso">
            </div>
                <label for="Altura" class="">Altura</label>
            <div class="col-2">
                    <input value="" type="number" name="altura" id="altura" step="any" class="form-control"  placeholder="Altura" >
            </div>
    </div>
    <div class="form-group row justify-content-center">
        <div class="col-1">
            <button type="submit" name="botonCalcular" class="btn btn-dark mt-4 btn-block">Calcular</button>
        </div>
    </div>
        </form>

        <?php if(isset($_POST["botonCalcular"])): ?>
        
             <?php 
                $peso=$_POST["peso"];   
                $altura=$_POST["altura"];
                $imc= round($peso/($altura * $altura),1);

                if ($imc<18.5) { 
                    $escala="Peso insuficiente";
                } 
                else if (($imc>=18.5)&&($imc<=24.9)){ 
                    $escala="Normopeso";
                }
                else if (($imc>=25)&&($imc<=26.9)){ 
                    $escala="Sobrepeso grado I";
                }
                else if (($imc>=27)&&($imc<=29.9)){
                    $escala="Sobrepreso grado II (preobesidad)";
                }
                else if (($imc>=30)&&($imc<=34.9)){ 
                    $escala="Obesidad de tipo I";
                }
                else if (($imc>=35)&&($imc<=39.9)){
                    $escala="Obesidad de tipo II";
                }
                else if (($imc>=40)&&($imc<=49.9) ){ 
                    $escala="Obesidad de tipo III (mórbida)";
                }
                else{ 
                    $escala="Obesidad de tipo IV (extrema)";
                }
            ?>
            <br>
            <h4 class="text-center">
                <?php 
                 echo ("Tu IMC es: ".$imc);
                 echo ("<br>");
                 echo ("Escala: ".$escala); 
                ?>
            </h4>
            <?php endif ?>

</MAIN>

<FOOter>

</FOOter>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>