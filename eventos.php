<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eventos</title>


    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<a class="navbar-brand" href="#Inicio">PROTOTIPO FORMULARIO</a>
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item active">
						<a class="nav-link" href="#Cajero">Cajero <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#Encuesta">Encuesta <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#Consulta">Consulta <span class="sr-only">(current)</span></a>
					</li>
				</ul>   
			</div>
		</nav>



<div class="container">

    <h1 align="center">¿Cómo te enteraste de Eventos Católicos?</h1>

    <form name="form1" onSubmit="return Validar()"  method="GET" action="datos1.php">
    <!-- Primera Fila -->
        <div class="row">
        
        <!-- Bloque de Audiometría -->
            <div class="col-md-3">
                <div class="card h-43" style="width: 18rem;">
                <img class="card-img-top" src="prensa.jpg" alt="Card image cap" width="120" height="150">
                <div class="card-body"> 
                    <h1 align="center">
                    <label class="btn btn-secondary" >
                        <input type="radio" name="options" id="option1" autocomplete="off" value="prensa" > Prensa
                    </label>
                    </h1>
                </div>
                </div>
            </div>

        <!-- Bloque de Cardiología -->
            <div class="col-md-3">
                <div class="card h-43" style="width: 18rem">
                <img class="card-img-top" src="fb.jpg" alt="Card image cap" width="120" height="150">
                <div class="card-body"> 
                    <h1 align="center">
                    <label class="btn btn-secondary" >
                        <input type="radio" name="options" id="option1" autocomplete="off" value="fb" > Facebook
                    </label>
                    </h1>
                </div>
                </div>
            </div>

        <!-- Bloque de Cirugía General -->
            <div class="col-md-3">
                <div class="card h-43" style="width: 18rem">
                <img class="card-img-top" src="radio.jpg" alt="Card image cap" width="120" height="150">
                <div class="card-body"> 
                    <h1 align="center">
                    <label class="btn btn-secondary" >
                        <input type="radio" name="options" id="option1" autocomplete="off" value="radio" > Radio
                    </label>
                    </h1>
                </div>
                </div>
            </div>
            
        <!-- Bloque de Cirugía Pediátrica -->
            <div class="col-md-3">
                <div class="card h-43" style="width: 18rem">
                <img class="card-img-top" src="tv.png" alt="Card image cap" width="120" height="150">
                <div class="card-body"> 
                    <h1 align="center">
                    <label class="btn btn-secondary" >
                        <input type="radio" name="options" id="option1" autocomplete="off" value="tv" > Televisión
                    </label>
                    </h1>
                </div>
                </div>
            </div>
        </div>

    <br>
    <div class="row">
    <!-- Columna en blanco -->
        <div class="col-md-5">
        </div>

    <!-- Bloque de Urología -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="pers.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="person" > Otra persona
                </label>
                </h1>
            </div>
            </div>
        </div>

    </div>
        <!-- Fila para el boton -->
        <div class="row">
        <!-- Columna en blanco -->
            <div class="col-md-11">
            </div>

        <!-- Boton -->
            <div class="col-md-1">
                <input type="submit" value="Siguiente" class="btn btn-outline-success" />
            </div>

    </div>

    
    </form>
    <br>
    <br>
</div>
    
</body>
</html>