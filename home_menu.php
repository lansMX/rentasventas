<!DOCTYPE html>
<html>
  <head>
    <title>Menú Complejos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <style media="screen">
      body{
        background-color: #B30000;
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

      .contenedorfoto > a > img{
        width: 200px;
      }

    </style>
  </head>
  <body>
    <div class="container">
      <h1 style="font-weight:normal">Renta y venta</h1>
      <hr>
      <div class="contenedorfoto">
        <a href="javascript:void(0)">
          <img src="http://www.periodicocentral.mx/2017/media/k2/items/src/8ee32f4a7dc339e385d15d54d4e3744e.jpg" border="0" alt=""/>
        </a>
        <br/>
        <span>Plaza 1</span>
      </div>

      <div class="contenedorfoto">
        <a href="javascript:void(0)">
          <img src="images/4.jpg" border="0" alt=""/>
        </a>
        <br/>
        <span>Plaza 2</span>
      </div>

      <div class="contenedorfoto">
        <a href="javascript:void(0)">
          <img src="images/4.jpg" border="0" alt=""/>
        </a>
        <br/>
        <span>Plaza 3</span>
      </div>

      <div class="contenedorfoto">
        <a href="javascript:void(0)">
          <img src="images/4.jpg" border="0" alt=""/>
        </a>
        <br/>
        <span>Plaza 4</span>
      </div>

      <div class="contenedorfoto">
        <a href="javascript:void(0)">
          <img src="images/4.jpg" border="0" alt=""/>
        </a>
        <br/>
        <span>Plaza 5</span>
      </div>

    </div>
  </body>
</html>
