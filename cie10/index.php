<?php
include '../conexion/conexion.php'; 
 //solucionar problemas de cache de formularios importate
  header('Cache-Control: no-cache, must-revalidate, max-age=0');
  header('Cache-Control: post-check=0, pre-check',false);
  ob_start();
	$_SESSION['uri'] = $_SERVER['REQUEST_URI'];//capturamos url universal localizacion
?>
<!DOCTYPE html>
<html lang="es">
	<head>
	    <title>Buscador CIE10</title>
	    <link rel="shortcut icon" href="../img/cie10.png" />
	    <meta charset="utf-8">
	    <!--Let browser know website is optimized for mobile-->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <!--Importg bootstrap 4.1.1-->
	    <link type="text/css" rel="stylesheet" href="../css/bootstrap4-bubblegum.min.css"/>
	    <link type="text/css" rel="stylesheet" href="../css/fontawesome-all.css"/>
	    <!--se implementa libreria css para estilo de autocoplete-->
	    <link type="text/css" rel="stylesheet" href="../css/easy-autocomplete.min.css"/>
  	</head>

  	<body>
		<main>
			<header>
		        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
					<div class="container">
					  	<a class="navbar-brand" href="">
				      		<img src="../img/cie10.png" width="25" height="30" class="d-inline-block align-top" alt="">
				      		CIE-10
				    	</a>
					</div>
				</nav>
		    </header>
		    <div class="py-4"></div><br>

		    <div class="container col-md-6 offset-md-3 py-4">
		    	<div class="card">
			    	<h4 class="card-header"><i class="fas fa-search"></i> Buscar CIE-10</h4>
			    	<div class="card-body container-fluid">
			    		<div class="row">
				        	<div class="col-md-10 offset-md-1 border-secondary mb-3">
				        		<input type="text" class="form-control mb-2 mr-sm-2" id="codigocie" placeholder="Ingrese código o término exacto" autofocus="true">
							</div>
							<div class="col-md-10 offset-md-1 border-secondary mb-3">
								<label for="nombreCodigo">Descripción</label>
				        		<textarea type="text" id="nombreCodigo"  class="form-control mb-2 mr-sm-2" readonly="readonly" rows="4"></textarea>
							</div>
							<div class="col-md-10 offset-md-1 border-secondary mb-3">
								<label for="Sexo">Sexo</label>
				        		<input type="text" class="form-control mb-2 mr-sm-2" id="sexo" readonly="readonly">
							</div>
						</div>	
			    	</div>
		    	</div>
		    </div>
		</main>
	<?php
		require_once('../extend/footer.php');
	?>
	<!--Importar /jquery-3.3.1.min.js-->
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../js/jquery.easy-autocomplete.min.js"></script>
	<!--Importar datatables js q incluye bootstrap 4-->
	<script src="../js/bootstrap4.1.1.min.js"></script>

	<script>
		//creacion de script para autocompletar
		var options = {

		  url: "/cie10/jsonCie.php",//se llama el json php

		  getValue: "codigo",
		  adjustWidth: false,

		  list: {	
		  	maxNumberOfElements: 6,
		  	match: {
		      enabled: true
		    },
		    onSelectItemEvent: function() {
					var value = $("#codigocie").getSelectedItemData().descripcion;
					var sexo = $("#codigocie").getSelectedItemData().sexo;
					$("#nombreCodigo").val(value).trigger("change");
					$("#sexo").val(sexo).trigger("change");
				}
		  	}
		};

		$("#codigocie").easyAutocomplete(options);
  	</script>
	 <?php
		$con->close();
	?>
	</body>
</html>