<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='shortcut icon' type='image/x-icon' href='res/img/favicon.ico' />
    <title>Crear Encuesta</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        body {
            height:100%;
            margin:0;
            padding:0;
            background-image: url("res/img/laptop.jpg");
        }

        .vertical-center {
            min-height: 100%;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="vertical-center">
        <div class="container bg-white text-dark rounded">
		<br>
            <center><h1>Crear Encuesta</h1></center>
			<br>
                <form action="controller/crearPregunta.php" method="post">
                    <div class="form-group">
                        <input class="form-control" type="text" name="opcionUno" id="opcionUno" placeholder="Opción Uno:">                
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="text" name="opcionDos" id="opcionDos" placeholder="Opción Dos:">                
                    </div>
                    <input class="btn btn-primary btn-lg" type="submit" value="Crear Pregunta" role="button">      
                    <a href="view/encuesta.php" class="btn btn-secondary btn-lg" role="button">Probar Encuestas</a>
                </form>
				<br>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>