<!-- <?php 
  // require_once('conexion.php');
  // $bd = new BD();
  // $conexion = $bd->fetchData("select * from cat_complejos");
?>  -->
<!DOCTYPE html>
<html>
  <head>
    <title>Menú Complejos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <style>
      body{
        font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
      }
      .top{
        left: 0px;
        margin-top: -8px;
        width: 100%;
        height: 40px;
        background-color: #333;
        position: absolute;
      }
      .menu{
        height: 100%;
        width: 17%;
        position: absolute;
        z-index: 1;
        top: 40px;
        left: 0;
        background-color: #555;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 20px;
      }
      .menu a{
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 22px;
        color: #f1f1f1;
        display: block;
        transition: 0.3s;
      }
      .menu a:hover{
        background-color: #e02222;
        color: #f1f1f1;
      }
      .icon{
        margin-left: 75%;
      }
      .contenedor{
        margin-left:17%;
      }
    </style>
  </head>
  <body>
    <!--general -->
    <div>
      <!-- menu lateral / barra superior-->
      <div class="top"></div>
      <div class="menu">
        <h3><i class="fa fa-bars icon fa-lg"></i></h3>
        <a href="#"><i class="fa fa-home" aria-hidden="true"></i><span> Inicio</span></a>
        <a href="#" onclick="ventas()"><i class="fa fa-money" aria-hidden="true"></i><span> Ventas</span></a>
      </div>
      <!-- contenedor-->
      <div class="contenedor" >
        <div id="ventas">
          VENTAS
        </div>
        <!--contenedor planos-->
        <div id="contenedor_planos" style="display: none;">
        </div>
        <!--fin contendor planos-->
      </div>
      <!-- fin contenedor-->
    </div>
    <!-- fin general -->
  </body>
  <script type="text/javascript">
  // $(document).ready(function(){});
  function ventas(){
    $("#ventas").css({"display":"block"});
  }
  </script>
  </body>
</html>
