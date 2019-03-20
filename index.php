<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <title>Resume</title>
</head>

<body>
<div class="container">
  <h1> Pregunta 1: <br>
    <?php 

    $resultado1 = 32 + 3;
    $resultado2 = 3*(2+3);

    echo 'Este es el resultado N°1: '.$resultado1. '<br>';
    echo 'Este es el resultado N°2: '.$resultado2;

    ?>
  </h1>
  <hr>
  <h1>Pregunta 2: <br>
    <?php 

      $valor1 = 7;
      $valor2 = 3;
      $valor3 = '10';
      $valor4 = 4;

      if($valor1 >5 && $valor1 <10){echo '$valor es mayor que 5 pero menor que 10 <br>';};
      if($valor2 >=0 && $valor2 <=20){echo '$valor es mayor o igual a 0 pero menor o igual a 20 <br>';};
      if($valor3 ==='10'){echo '$valor es igual a “10” asegurando que el tipo de dato sea cadena <br>';};
      if(($valor4 > 0 && $valor4 < 5) || ($valor4 < 10 && $valor4 >15)){echo '$valor es mayor a 0 pero menor a 5 o es mayor a 10 pero menor a 15';};

    ?>
  </h1>
</div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
    crossorigin="anonymous"></script>
</body>
</html>