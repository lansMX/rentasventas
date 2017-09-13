<?php
$mysqli = new mysqli("192.168.1.76", "root", "", "invercity");
if ($mysqli === false){
 die("ERROR: No se estableció la conexión. ". mysqli_connect_error());
}
$sql = "Select * from tab_complejopisos limit 1";
if ($result = $mysqli->query($sql) ){
 if ($result->num_rows > 0 ){

   while ($row = $result->fetch_array()) {
    //echo $row['idTab_ComplejoPisos']."<br>";
    echo $row['SVG'];
    echo "<image src='../".$row['Fondo']."' class='imgFondoPlano'>";
   }
   $result->close();
 } else {
   echo "NO se encontró ningún registro que coincida con su busqueda.";
 }

} else {
 echo "Error: No fue posible ejecutar la consulta $sql ". $mysqli->error;
}
$mysqli->close();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!-- <link id="estilossvg" rel="stylesheet" href="../css/local.css"> -->
    <style media="screen">
      svg{
        width: 100%;
        height: 100%;
        position: absolute;
      }
      .land{
        fill: none;
        stroke: #FFF;
        stroke-width: 2;
      }

      .land:hover{fill: #b30000; opacity: 0.3}
      .land.active{fill: #FFFF00;}
      .land.success{fill: #006847;}

      .contorno{
        fill:none;
      }
      .imgFondoPlano{
  			width: 35%;
  			height: auto;
  			position: absolute;
  			z-index: -1;
  		}
    </style>

  </head>
  <body>

  </body>
</html>
