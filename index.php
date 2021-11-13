<?php

require 'Fonction.php';

// si x² + x + 1, delta = -3
// si x² + 2x + 1, delta = 0, x = -1
// si x² + 5x + 1, delta = 21, x1 = -0.2087 , x2 = -4.7813

?>
<!DOCTYPE html>
<html>
<head>
    <title>Quadratic equation</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style>
        body {
            background: #007bff;
            background: linear-gradient(to right, #0062E6, #33AEFF);
        }
    </style>
</head>
<body class="fw-light fs-5">

    <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h2 class="card-title text-center mb-5">Quadratic Equation</h2>

            <form method="post" class="row">
              <div class="col">
                <input type="number" class="form-control" placeholder="a" name="a">
              </div> x² +
              <div class="col">
                <input type="number" class="form-control" placeholder="b" name="b">
              </div> x +
              <div class="col">
                <input type="number" class="form-control" placeholder="c" name="c">
              </div>

              <div class="d-grid mt-3">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" name="btn">CALCULER</button>
              </div>
            </form>

            <hr class="my-4">

            <div class="d-grid mb-2 text-center">

                <?php

                    if ($_POST['a'] == 0) {
                        echo "Votre fontion n'est pas du second degrée";
                    }

                    elseif (!empty($_POST['a']) & !empty($_POST['b']) & !empty($_POST['c']) & isset($_POST['btn'])) {
                        # code...
                        $a = $_POST['a'];
                        $b = $_POST['b'];
                        $c = $_POST['c'];

                        echo "Votre fonction est (".$a.")x² + (".$b.")x + ".$c." = 0" ;
                        echo "<br>";

                        $fonction = new Fonction($a, $b, $c);

                        $fonction->delta();

                        echo "Delta = " . $fonction->delta;

                        echo "<br>";

                        $fonction->calculx();

                    }

                 ?>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>

