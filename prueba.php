<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Área</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>

<!-- Menu superior -->
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

<h1 align="center">¿A qué área vienes?</h1>

<form name="form1" onSubmit="return Validar()"  method="GET" action="datos1.php">
<!-- Primera Fila -->
    <div class="row">
    
    <!-- Bloque de Audiometría -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem;">
            <img class="card-img-top" src="audiometria.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="pre1" > Audiometrías
                </label>
                </h1>
            </div>
            </div>
        </div>

    <!-- Bloque de Cardiología -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="cardio.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="pre2" > Cardiología
                </label>
                </h1>
            </div>
            </div>
        </div>

    <!-- Bloque de Cirugía General -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="ciru.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="pre3" > Cirugía General
                </label>
                </h1>
            </div>
            </div>
        </div>
        
    <!-- Bloque de Cirugía Pediátrica -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="pedia.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="pre4" > Cirugía Pediátrica
                </label>
                </h1>
            </div>
            </div>
        </div>
    </div>

<!-- Segunda Fila -->
    <br>
    <br>
    <div class="row">
    <!-- Bloque de Dermatología -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem;">
            <img class="card-img-top" src="derma.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="pre5" > Dermotología
                </label>
                </h1>
            </div>
            </div>
        </div>

    <!-- Bloque de Endodoncia -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="endo.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="pre6" > Endodoncia
                </label>
                </h1>
            </div>
            </div>
        </div>

    <!-- Bloque de Fisioterapia -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="fisio.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="pre7" > Fisioterapia
                </label>
                </h1>
            </div>
            </div>
        </div>

    <!-- Bloque de Flebología-->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="flebo.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="pre8" > Flebología
                </label>
                </h1>
            </div>
            </div>
        </div>
    </div>

<!-- fila 3 -->
    <br>
    <br>
    <div class="row">

    <!-- Bloque de Gastroenterología -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem;">
            <img class="card-img-top" src="gastro.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="pre9" > Gastroenterología
                </label>
                </h1>
            </div>
            </div>
        </div>

    <!-- Bloque de Gineco-Obstetra -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="gineco.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="pre10" > Gineco-Obstetra
                </label>
                </h1>
            </div>
            </div>
        </div>

    <!-- Bloque de Medicina General -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="medige.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="pre11" > Medicina General
                </label>
                </h1>
            </div>
            </div>
        </div>

    <!-- Bloque de Neumología -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="neumo.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="pre12" > Neumología
                </label>
                </h1>
            </div>
            </div>
        </div>
    </div>

<!-- Fila 4 -->
    <br>
    <br>
    <div class="row">
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem;">
            <img class="card-img-top" src="neuroci.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="pre13" > Neurocirugía
                </label>
                </h1>
            </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="neurolo.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="pre14" > Neurología
                </label>
                </h1>
            </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="nutri.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="pre15" > Nutrición
                </label>
                </h1>
            </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="odonto.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="pre16" > Odontología
                </label>
                </h1>
            </div>
            </div>
        </div>
    </div>


    <br>
    <br>
    <div class="row">
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem;">
            <img class="card-img-top" src="odonpe.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="pre17" > Odontopediatría
                </label>
                </h1>
            </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="ofta.png" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="pre18" > Oftalmología
                </label>
                </h1>
            </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="oftame.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="pre19" > Optometría
                </label>
                </h1>
            </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="ortodo.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="pre20" > Ortondoncia
                </label>
                </h1>
            </div>
            </div>
        </div>
    </div>


    <br>
    <br>
    <div class="row">
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem;">
            <img class="card-img-top" src="otorri.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="pre21" > Otorrinolaringología
                </label>
                </h1>
            </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="pediatria.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="pre22" > Pediatría
                </label>
                </h1>
            </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="psicolo.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="pre23" > Psicología
                </label>
                </h1>
            </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="psiquia.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="pre24" > Psiquiatría
                </label>
                </h1>
            </div>
            </div>
        </div>
    </div>

<!-- Fila 7 -->
    <br>
    <br>
    <div class="row">

    <!-- Bloque de Radiología -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem;">
            <img class="card-img-top" src="radiologo.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="pre25" > Radiología
                </label>
                </h1>
            </div>
            </div>
        </div>

    <!-- Bloque de Reumatología -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="reuma.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="pre26" > Reumatología
                </label>
                </h1>
            </div>
            </div>
        </div>

    <!-- Bloque de Terapia del Habla -->    
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="teraHabla.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="pre27" > Terapia del Habla
                </label>
                </h1>
            </div>
            </div>
        </div>

    <!-- Bloque de Traumatología -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="trauma.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="pre28" > Traumatología
                </label>
                </h1>
            </div>
            </div>
        </div>
    </div>


<!-- Fila 8 -->
    <br>
    <br>
    <div class="row">
    <!-- Columna en blanco -->
        <div class="col-md-5">
        </div>

    <!-- Bloque de Urología -->
        <div class="col-md-3">
            <div class="card h-43" style="width: 18rem">
            <img class="card-img-top" src="urolo.jpg" alt="Card image cap" width="120" height="150">
            <div class="card-body"> 
                <h1 align="center">
                <label class="btn btn-secondary" >
                    <input type="radio" name="options" id="option1" autocomplete="off" value="pre29" > Urología
                </label>
                </h1>
            </div>
            </div>
        </div>

    </div>

    <br>
    <!-- Fila para el boton -->
    <div class="row">
    <!-- Columna en blanco -->
        <div class="col-md-11">
        </div>

    <!-- Bloque de Urología -->
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