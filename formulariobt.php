<?php

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Imprimir Envio</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Bootstrap/estilos.css">

  </head>

  <body>
	<header>
	   <div class="container">
	        <h2>Imprimir Envio ...</h2>
	   </div>
	</header>

    <div class="container-fluid">
        <form action="" class="form-inline" method="post">
	    
            <div class="form-group">
                <label for="fecha" class="control-label col-md-2">Fecha-Recibido</label>
                <div class="col-md-10">
                    <input class="form-control" id="fecharec" type="text" placeholder="Fecha actual">
                </div>
            </div>
            <div class="form-group">
                <label for="hora" class="control-label col-md-2">Hora-Recibido</label>
                <div class="col-md-10">
                    <input class="form-control" id="horarec" type="text" placeholder="Hora actual">
                </div>
            </div>

            <div class="form-group">
                <label for="option" class="control-label col-md-2">Elige opción</label>
                <div class="col-md-10">
                    <select class="form-control" name="" id="">
                        <option value="">Opcion 1</option>
                        <option value="">Opcion 2</option>
                        <option value="">Opcion 3</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="mensaje" class="control-label col-md-2">Mensaje:</label>
                <div class="col-md-10">
                    <textarea class="form-control" id="mensaje" placeholder="Escribe tu mensaje"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="archivo" class="control-label col-md-2">Adjuntar Archivo</label>
                <div class="col-md-10">
                    <input class="form-control col-md-10" type="file" name="" id="adjunto">
                    <p class="help-blocK" >Maximo 25MB</p>
                </div>
            </div>

         </form>
        
	    <br><br><br><br><br><br><br>
    </div>




	<footer>
		<div class="container">
		<br>
		    <p>Derechos reservados de autor Edwin Olaya Mantilla, Versi&oacute;n 2.1 email: monomanti@gmail.com  Movil: 315 881 96 51</p>

		</div>
		<br>
	</footer>

    <script src="../Bootstrap/js/jquery.3.2.1.js"></script>
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>