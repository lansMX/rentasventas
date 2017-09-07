<!DOCTYPE html>
<html>
  <head>
    <title>Menú Complejos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <style media="screen">
      body{
        background-color: #3e3e3e;
        color: #FFF;
        font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
      }

      .container {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
      }

      @media (min-width: 768px) {
        .container {
          width: 750px;
        }
      }
      @media (min-width: 992px) {
        .container {
          width: 970px;
        }
      }
      @media (min-width: 1200px) {
        .container {
          width: 1170px;
        }
      }


      .contenedorfoto {         
         float:left;
         width:200px;
         height:180px;
         margin: 10px;
         padding:5px;
         color: #000;
         background-color:#f5f7f9;
         border-right: #a5a7aa solid 1px;
         border-bottom: #a5a7aa solid 1px;
         text-align:center;
      }

      #menu{
        display: inline-block;
      }

      .contenedorfoto > a > img{
        width: 200px;
      }

    </style>
  </head>
  <body>
    <div class="container">
      <h1 style="font-weight:normal">Renta y venta</h1>
      <hr>
      <div id="menu"></div>

      <script type="text/javascript">
        $.getJSON( "datos/catalogo.json", function( data ) {
          var items = [];
          var opciones = "";
          console.log(data.catalogo);

          $.each( data.catalogo, function( key, val ) {

            opciones += "<div class='contenedorfoto'>" +
                "<a href='javascript:void(0)' onclick='moreDetails("+val.id+")'>" +
                  "<img src='" + val.logo + "' border='0' alt=''/>" +
                "</a>" +
                "<br/>" +
                "<span>" + val.titulo + "</span>" +
              "</div>";
          });
         
          $("#menu").append(opciones);

        });

        function moreDetails(id){
          window.location.href = "index.php?map="+id;
        }
      </script>
      

    </div>
  </body>
</html>
