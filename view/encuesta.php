<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Encuesta</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Encuesta</h1>
        <a href="resultado.php">Ver resultados</a>
        <a href="../index.php">Volver</a>
        <?php
            require_once("../model/Data.php");

            $d = new Data();

            $vista = $d->listarPreguntas();

            foreach($vista as $v){
                echo "<h5>Pregunta ".$v[0]."</h5>";
                echo "<form action='../controller/submit.php' method='post'>";
                    echo "<div class='form-group'>";
                        echo "<input type=hidden name='id' value='".$v[0]."'>";
                        echo "<input type=hidden name='opc' value = '1'>";
                        echo "<input class='btn btn-dark' type='submit' value='".$v[1]."' role='button'>";
                    echo "</div>";
                echo "</form>";

                echo "<form action='../controller/submit.php' method='post'>";
                    echo "<div class='form-group'>";
                        echo "<input type=hidden name='id' value='".$v[0]."'>";
                        echo "<input type=hidden name='opc' value = '2'>";
                        echo "<input class='btn btn-dark' type='submit' value='".$v[4]."' role='button'>";
                    echo "</div>";
                echo "</form>";
            }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>