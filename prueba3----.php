<?php

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Radicar</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Bootstrap/estilos.css">

    <script>
        $('.openBtn').on('click',function(){
            $('.modal-body').load('emerg_empresa.php',function(){
                $('#exampleModal').modal({show:true});
            });
        });
     </script>

  </head>

  <body>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
        <form action="" class="form-horizontal" method="post">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Seleccione Empresa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
                <label for="descrip">Nombre empresa</label>
                <input type="text" class="form-control" id="Ape1" placeholder="" required>
            </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="openBtn" >Buscar</button>
          </div>
        </form>
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
        <div class="form-group col-md-2">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Seleccionar Empresa
            </button>

        </div>
        <div class="form-group col-md-10">
            <input type="text" class="form-control" id="empresa" required placeholder="click en el icono para buscar empresa">
        </div>
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

    <script src="../Bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../Bootstrap/popper/popper.min.js" ></script>
    <script src="../Bootstrap/js/bootstrap.min.js" ></script>
  </body>
</html>
