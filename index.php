<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0ixCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Page Kids</title>
    <style>
       .box{
        display:inline-block;
        text-align: center;
        margin-left: 120px;
        margin-bottom: 90px;
    }
    </style>
</head>
<body>

<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="https://static.vecteezy.com/system/resources/previews/013/535/285/non_2x/video-game-illustration-on-a-background-premium-quality-symbols-icons-for-concept-and-graphic-design-vector.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
        Page Kids
    </a>
</nav>

<div class="jumbotron">
    <form action="index.php" method="POST"> 
<div class="box"> 
    <div class="card" style="width: 16rem; height: 14rem;"> 
    <img class="card-img-top" src="https://img.freepik.com/vector-premium/gato-divertido-dibujos-animados-sentado-sobre-fondo-blanco_29190-6823.jpg?w=2000" alt="Card image cap" style="width: 15rem; height:13rem;">
        <div class="card-body"> 
        <h5 class="card-title">Gato</h5>
        <input type ="submit" class="btn btn-primary" name="gato" value="Reproducir"> 
</div>
    </div> 
        </div>

    
<div class="box"> 
    <div class="card" style="width: 16rem; height:14rem;"> 
    <img class="card-img-top" src="https://img.freepik.com/vector-premium/ilustracion-dibujos-animados-lindo-perro-bebe_33070-3206.jpg" alt="Card image cap" style="width: 15rem; height:13rem;">
        <div class="card-body"> 
        <h5 class="card-title">Perro</h5>
        <input type ="submit" class="btn btn-primary" name="perro" value="Reproducir"> 
</div>
    </div> 
        </div>

 <div class="box"> 
    <div class="card" style="width: 16rem; height:14rem;"> 
    <img class="card-img-top" src="https://img.freepik.com/vector-premium/linda-vaca-dibujos-animados_160606-325.jpg?w=2000" alt="Card image cap" style="width: 15rem; height:13rem;">
        <div class="card-body"> 
        <h5 class="card-title">Vaca</h5>
        <input type ="submit" class="btn btn-primary" name="vaca" value="Reproducir"> 
</div>
    </div> 
        </div>

<div class="box"> 
    <div class="card" style="width: 16rem; height:14rem;"> 
    <img class="card-img-top" src="https://img.freepik.com/vector-gratis/abecedario-colores_1214-141.jpg" alt="Card image cap" style="width: 15rem; height:13rem;">
        <div class="card-body"> 
        <h5 class="card-title">Abecedario</h5>
        <input type ="submit" class="btn btn-primary" name="abecedario" value="Reproducir"> 
</div>
    </div> 
        </div>
     </div>
     </form>
</body>
</html>
<?php
include_once('animal.php');
?>
