<?php
if(!empty($_GET['id'])){
//$Cod=$_GET['Cod'];
$detalle=$_POST['APE1'];
   @require("conectardb.php");
   @$link=conectarse();

   @$consulta = "select * from empresas where nombre LIKE '%$detalle%'";
   //echo $consulta;
   @$resultado=mysql_query($consulta);
   @$numregistros=mysql_numrows($resultado);
  
   if ($numregistros==0)
      {
       echo "<br>EMPRESA no encontrada ...</b>";
       echo "<a href='b_empresa.php'>--- REGRESAR ---</a>";
       exit;
      }   
   
   //echo "<body body BACKGROUND=white>";
   echo "<FIELDSET>";
   echo "<FONT FACE='arial'><DIV ALIGN=justify size=-1>";
   
   echo "<tr ALIGN=CENTER><TD><h3>".@STRTOUPPER($tabla)."     [ ".@$numregistros." ] Registros...</h3></TD></TR>";
   echo "<table>";
            echo "<tr bgcolor=cian>";
             echo "<td>Codigo</td>";
            echo "<td>Nombre</td>"; 	
     echo "</tr>";     
  // echo "<table><tr bgcolor=teal>";
         
   	  $i=0;
	  while ($i < $numregistros)
	 {
            //echo "<tr bgcolor=#CCCCCC>";   
            //$nombre=mysql_result($resultado,$i,"Nombre");
            //$nombre2=substr($nombre,0,59);  
            //$codigo=mysql_result($resultado,$i,'Codigo')."-".$nombre2;
             
            echo "<td><a href='javascript: seleccionar(\"$codigo\")'>Llevar</a></td>";
            echo "<td>".mysql_result($resultado,$i,"Codigo")."</td>";
            echo "<td>".mysql_result($resultado,$i,"Nombre")."</td>"; 	
            echo "</tr>";

	 $i++;
	 }

         mysql_close($link);
echo "</table>";
echo "</font>";
echo "</FIELDSET>";
echo "<a href='admin.php'>--- REGRESAR ---</a>";
}else{
    echo 'Content not found....';
}

?>