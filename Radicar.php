<?php
  header('Cache-Control: no-cache, must-revalidate, max-age=0');
  header('Cache-Control: post-check=0, pre-check',false);
  ob_start();
  $_SESSION['uri'] = $_SERVER['REQUEST_URI'];//capturamos url universal localizacion
  
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Radicar</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Bootstrap/css/easy-autocomplete.min.css">
    <!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"!-->
    <link rel="stylesheet" href="../Bootstrap/estilos.css">
  </head>

  <body>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Seleccione Empresa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Buscar</button>
          </div>
        </div>
      </div>
    </div>

	<header>
	   <div class="container">
            <br>
	        <h2>Radicar Correspondencia</h2>
            <br>
	   </div>
	</header>
    <br>
    <div class="container-fluid">
    <form action="" class="form-horizontal" method="post">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="fecha" >Fecha de Recibido</label>
            <input type="text" class="form-control" id="fecha" placeholder="" required>
        </div>
        <div class="form-group col-md-6">
            <label for="hora">Hora de Recibido</label>
            <input type="text" class="form-control" id="hora" placeholder="" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <!--- button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Seleccionar Empresa
            </button!--->
            <input type="text" class="form-control" id="codigoemp" required placeholder="Escriba la empresa a buscar ...">
            <input type="hidden" id="idCodigo" name="idCodigo">

        </div>
        <!-- 
        <div class="form-group col-md-6">
            <input type="text" class="form-control" id="empresa" required placeholder="click en el icono para buscar empresa">
        </div> -->
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="detalle" >Detalle</label>
        <input type="text" class="form-control" id="detalle" required placeholder="Detalle del recibido">
        </div>
        <div class="form-group col-md-6">
        <label for="anexos">Anexos</label>
        <input type="text" class="form-control" id="enexos" required placeholder="Anexos recibidos">
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="nofolios" >No de Folios</label>
        <input type="text" class="form-control" id="nofolios" required placeholder="Número de folios">
        </div>
        <div class="form-group col-md-6">
        <label for="archivo" class="control-label" >Adjuntar Archivo</label>
                <input class="form-control" type="file" name="" id="adjunto">
                <p class="help-blocK" >Maximo 25MB</p>
        </div>
    </div>    

    <div class="form-row">
        <div class="form-group col-md-6">
            <button type="submit" class="btn btn-block btn-lg btn-success">GRABAR</button>
            <br><br>
        </div>
        <div class="form-group col-md-6">
            <button type="submit" class="btn btn-block btn-lg btn-warning">CANCELAR</button>
            <br><br>
        </div>
        <br><br>
    </div>

    </form>
    </div>





	<footer>
		<div class="container">
		<br>
		    <p>Derechos reservados de autor Edwin Olaya Mantilla, Versi&oacute;n 2.1 email: monomanti@gmail.com  Movil: 315 881 96 51</p>

		</div>
		<br>
	</footer>

    <script src="../Bootstrap/js/jquery.3.3.1.min.js"></script>
    <script src="../Bootstrap/js/jquery-1.11.2.min.js"></script>
    <script src="../Bootstrap/popper/popper.min.js" ></script>
    <script src="../Bootstrap/js/bootstrap.min.js" ></script>
    <script src="../Bootstrap/js/jquery.easy-autocomplete.min.js" ></script>
    <!--
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <!-->
    
    <script>
		//creacion de script para autocompletar
		var options = {

		  url: "jsonEmp.php",//se llama el json php   

		  getValue: "nombre",
		  adjustWidth: false,

		  list: {	
		  	maxNumberOfElements: 6,
		  	match: {
		      enabled: true
		    },
		    onSelectItemEvent: function() {
					var value = $("#codigoemp").getSelectedItemData().nombre;
					var idCodigo = $("#codigoemp").getSelectedItemData().id;
					//$("#codigoemp").val(value).trigger("change");
					$("#idCodigo").val(idCodigo).trigger("change");
				}
		  	}
		};

		$("#codigoemp").easyAutocomplete(options);

    /* var options = {

      url: function(phrase) {
        return "jsonEmp.php";
      },

      getValue: function(element) {
        return element.codigo;
      },

      ajaxSettings: {
        dataType: "json",
        method: "POST",
        data: {
          dataType: "json"
        }
      },

      preparePostData: function(data) {
        data.phrase = $("#codigoemp").val();
        return data;
      },

      requestDelay: 400
      };

      $("#codigoemp").easyAutocomplete(options); */
  	</script>

  </body>
</html>
