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

    <div class="container">
        <form action="" class="form-horizontal" method="post">

        <!div class="col-md-6">
            <div class="form-group">
                <label for="fecha" class="control-label">Fecha Recibido</label>
                <input class="form-control form-control-sm" id="fecharec" type="text" placeholder="Fecha actual">
            </div>
            <div class="form-group">
                <label for="hora" ">Hora-Recibido</label>
                <input class="form-control form-control-sm" id="horarec" type="text" placeholder="Hora actual">
            </div>
        <!/div>
        
        <!div class="col-md-6">
            <div class="form-group">
                <label for="option" >Elige opción</label>
                <select class="" name="" id="">
                    <option value="">Opcion 1</option>
                    <option value="">Opcion 2</option>
                    <option value="">Opcion 3</option>
                </select>
            </div>

            <div class="form-group">
                <label for="mensaje" >Mensaje:</label>
                <textarea class="form-control form-control-sm" id="mensaje" placeholder="Escribe tu mensaje"></textarea>
            </div>

            <div class="form-group">
                <label for="archivo" class="form-control-file" >Adjuntar Archivo</label>
                <input class="" type="file" name="" id="adjunto">
                <p class="help-blocK" >Maximo 25MB</p>
            </div>
        <!/div>

        <br><br><br>
        </form>
        <form class="form-horizontal">
                
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                </div>
            </div>

        </form>
        
	    <br><br><br><br><br><br><br>
    </div>


    <div class="container-fluid">
    <form class="form-horizontal">
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4" >Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4" >Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4" >Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
        <label for="archivo" class="control-label" >Adjuntar Archivo</label>
                <input class="form-control" type="file" name="" id="adjunto">
                <p class="help-blocK" >Maximo 25MB</p>
        </div>
    </div>    
    
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>...</option>
        </select>
        </div>
        <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
    </div>


    <br><br><br><br><br>
    <div class="container-fluid">
    <form class="form-horizontal">
    <div class="form-row">
        <div class="form-group col-md-1">
            <label for="inputEmail4" >Email</label>
        </div>
        <div class="form-group col-md-5">
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-1">
            <label for="inputPassword4">Password</label>
        </div>
            <div class="form-group col-md-5">
        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4" >Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4" >Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
        <label for="archivo" class="control-label" >Adjuntar Archivo</label>
                <input class="form-control" type="file" name="" id="adjunto">
                <p class="help-blocK" >Maximo 25MB</p>
        </div>
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
