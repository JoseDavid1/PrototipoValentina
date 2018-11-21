	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">

		<title>pregunta1</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
	<script type="text/javascript">
		function Validar(){
			if(document.form1.options[0].checked==false && document.form1.options[1].checked==false && document.form1.options[2].checked==false){
				alert('Seleccione un campo');
				return false;
			}
		
			return true
		}

		function radioSeleccionado(formulario, nombre){
			elementos = document.getElementById(formulario).elements;
			longitud = document.getElementById(formulario).length;
			for (var i = 0; i < longitud; i++){
				if(elementos[i].name == nombre && elementos[i].type == "radio" && elementos[i].checked == true){
					return elementos[i];
					
         		}
     		}
     		return false;
			 alert("hola");
		}
	</script>


	</head>
	<!-- hola -->
	<body>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


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


	<form name="form1" onSubmit="return Validar()"  method="GET" action="pregunta2.php">
	<div class="container">	
		<div class="row">
			
				<div class="btn-group btn-group-toggle" data-toggle="buttons">
					<div class="col-lg-4" align="right">
						<label class="btn btn-secondary">
							<input type="radio" name="options" id="option1" autocomplete="off" value="pre1" class="btn btn-lg"> Audiometrías
						</label>
					</div>
					<div class="col-lg-4" align="center">	
						<label class="btn btn-secondary">
							<input type="radio" name="options" id="option2" autocomplete="off" value="pre2" class="btn btn-lg"> Cardiología
						</label>
					</div>
					<div class="col-lg-4" align="right">
						<label class="btn btn-secondary">
							<input type="radio" name="options" id="option3" autocomplete="off" value="pre3" class="btn btn-lg"> Cirugía General
						</label>
					</div>
				</div>
		</div>

		<div class="row">			
				<div class="btn-group btn-group-toggle" data-toggle="buttons">
					<div class="col-lg-4" align="right">
						<label class="btn btn-secondary">
							<input type="radio" name="options" id="option1" autocomplete="off" value="pre1"> Cirugía Pediátrica
						</label>
					</div>
					<div class="col-lg-4" align="center">
						<label class="btn btn-secondary">
							<input type="radio" name="options" id="option2" autocomplete="off" value="pre2"> Dematología
						</label>
					</div>
					<div class="col-lg-4" align="rigth">
						<label class="btn btn-secondary">
							<input type="radio" name="options" id="option3" autocomplete="off" value="pre3"> Endodoncia
						</label>
					</div>
				</div>
		</div>		
			

		<div class="row">
				<div class="btn-group btn-group-toggle" data-toggle="buttons">
					<div class="col-lg-4" align="right">
						<label class="btn btn-secondary">
							<input type="radio" name="options" id="option1" autocomplete="off" value="pre1"> Fisioterapia
						</label>
					</div>
					<div class="col-lg-4" align="center">	
						<label class="btn btn-secondary">
							<input type="radio" name="options" id="option2" autocomplete="off" value="pre2"> Flebología
						</label>
					</div>
					<div class="col-lg-4" align="rigth">
						<label class="btn btn-secondary">
							<input type="radio" name="options" id="option3" autocomplete="off" value="pre3"> Gastroenterlogía
						</label>
					</div>
				</div>
			</div>
		</div>	

			<div class="col-md-12"
				<div class="btn-group btn-group-toggle" data-toggle="buttons">
					<label class="btn btn-secondary">
						<input type="radio" name="options" id="option1" autocomplete="off" value="pre1"> Gineco-Obstetra
					</label>
					<label class="btn btn-secondary">
						<input type="radio" name="options" id="option2" autocomplete="off" value="pre2"> Medicina General
					</label>
					<label class="btn btn-secondary">
						<input type="radio" name="options" id="option3" autocomplete="off" value="pre3"> Neumología
					</label>
				</div>
			</div>

			<div class="col-md-12"
				<div class="btn-group btn-group-toggle" data-toggle="buttons">
					<label class="btn btn-secondary">
						<input type="radio" name="options" id="option1" autocomplete="off" value="pre1"> Nerocirugía
					</label>
					<label class="btn btn-secondary">
						<input type="radio" name="options" id="option2" autocomplete="off" value="pre2"> Neurología
					</label>
					<label class="btn btn-secondary">
						<input type="radio" name="options" id="option3" autocomplete="off" value="pre3"> Nutrición
					</label>
				</div>
			</div>

			<div class="col-md-12"
				<div class="btn-group btn-group-toggle" data-toggle="buttons">
					<label class="btn btn-secondary">
						<input type="radio" name="options" id="option1" autocomplete="off" value="pre1"> Cirugía Pediátrica
					</label>
					<label class="btn btn-secondary">
						<input type="radio" name="options" id="option2" autocomplete="off" value="pre2"> Dematología
					</label>
					<label class="btn btn-secondary">
						<input type="radio" name="options" id="option3" autocomplete="off" value="pre3"> Endodoncia
					</label>
				</div>
			</div>

			<div class="col-md-12"
				<div class="btn-group btn-group-toggle" data-toggle="buttons">
					<label class="btn btn-secondary">
						<input type="radio" name="options" id="option1" autocomplete="off" value="pre1"> Cirugía Pediátrica
					</label>
					<label class="btn btn-secondary">
						<input type="radio" name="options" id="option2" autocomplete="off" value="pre2"> Dematología
					</label>
					<label class="btn btn-secondary">
						<input type="radio" name="options" id="option3" autocomplete="off" value="pre3"> Endodoncia
					</label>
				</div>
			</div>

			<div class="col-md-12"
				<div class="btn-group btn-group-toggle" data-toggle="buttons">
					<label class="btn btn-secondary">
						<input type="radio" name="options" id="option1" autocomplete="off" value="pre1"> Cirugía Pediátrica
					</label>
					<label class="btn btn-secondary">
						<input type="radio" name="options" id="option2" autocomplete="off" value="pre2"> Dematología
					</label>
					<label class="btn btn-secondary">
						<input type="radio" name="options" id="option3" autocomplete="off" value="pre3"> Endodoncia
					</label>
				</div>
			</div>

			<div class="col-md-12"
				<div class="btn-group btn-group-toggle" data-toggle="buttons">
					<label class="btn btn-secondary">
						<input type="radio" name="options" id="option1" autocomplete="off" value="pre1"> Cirugía Pediátrica
					</label>
					<label class="btn btn-secondary">
						<input type="radio" name="options" id="option2" autocomplete="off" value="pre2"> Dematología
					</label>
					<label class="btn btn-secondary">
						<input type="radio" name="options" id="option3" autocomplete="off" value="pre3"> Endodoncia
					</label>
				</div>
			</div>
			

			<div class="col-md-12"
				<div class="btn-group btn-group-toggle" data-toggle="buttons">
					<label class="btn btn-secondary">
						<input type="radio" name="options" id="option1" autocomplete="off" value="pre1"> Cirugía Pediátrica
					</label>
					<label class="btn btn-secondary">
						<input type="radio" name="options" id="option2" autocomplete="off" value="pre2"> Dematología
					</label>
					<label class="btn btn-secondary">
						<input type="radio" name="options" id="option3" autocomplete="off" value="pre3"> Endodoncia
					</label>
				</div>
			</div>
		</div>	

		<input type="submit" value="Aceptar" />
	</div>
</form>



<!--
<form name="form1" onSubmit="return Validar()"  method="post" action="Untitled2.html">
femenino<input type="radio" name="rsexo" value="f" />
masculino<input type="radio" name="rsexo" value="m"/>
<input type="submit" value="Aceptar" />
</form>

-->

 <!--
	 <?php 
		if($_POST["options"] == "pre2") 
		{ 
				echo "pregunta 2";
		} 
?>
	

	  <a href="index.php"><button type="button" class="btn btn-primary btn-lg">Anterior</button></a>
	  <a href="pregunta2.php"><button type="submit" class="btn btn-primary btn-lg">Sigggguiente</button></a>
		
-->
	</body>
	</html>