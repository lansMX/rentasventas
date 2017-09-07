<?php 

if (isset($_GET['map'])) {
	echo "<h1>OK</h1>";

}
else {
	echo "<h1>NO</h1>";
}

 ?><!DOCTYPE html>
<html>
<head>
	<title>test</title>
	<meta charset="utf-8"></meta>
	<link id="estilossvg" rel="stylesheet" href="css/local.css">
	<style type="text/css">
		body{
			background-color: #3e3e3e;
			font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
		}
		.content{
			display: inline-block;
		}
		.menu{
			display: inline-block;
		}

		.mapp{
			display: inline-block;
			width: 100%;
			height: 500px;
		}
		.calculador{
			margin-top: -60%;
			margin-left: 90%;
			width: 40%;
		}
		.etiqueta{
			padding-left: 30px;
		}
		svg{
			width: 900px;
			height: 600px;
		}

		text{
			font-size: 28px;
		}

		.inp{
			width: 105px;
			height: 20px;
		}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
	<div class="content">
		<select name="SP" id="SP" class="" tabindex="1" style="height:43px; border:1px solid #FFF; font-size:33px; ">
			<option value="PB" selected="">PB</option>
			<option value="1N">1N</option>
			<option value="2N">2N</option>
			<option value="3N">3N</option>
		</select>
		<div class="mapp">

			

		</div>
		<div class="calculador">
				<form name="ejemplo">
		<table>
			<thead></thead>
			<tbody>
			<tr>
				<td colspan="2"><h1 id="localSelected" style="font-weight:normal"></h1></td>
			</tr>
			<tr>
				<td><label for="tipoTerreno"></label>Tipo terreno</td>
				<td>
					<select name="tipoTerreno" id="tipoTerreno">
						<option value="1">Plaza</option>
						<option value="2">local</option>
						<option value="3">Mts2</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label for="m2finals">M <sup>2</sup> FINALES</label></td>
				<td><input type="text" id="m2finales" class="inp" readonly></td></tr>
			<tr>
				<td><label for="tipoLocal">TIPO DE LOCAL</label></td>
				<td>
					<select id="tipoLocal">
						<option value="1">Kiosko</option>
						<option value="2">Local</option>
						<option value="3">consultorio</option>
						<option value="4">Departamento</option>
						<option value="4">Habitación</option>
						<option value="6">Hotel</option>
						<option value="7">Oficina</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label for="precioxm2">PRECIO X M<sup>2</sup></label></td>
				<td>$ <span id="precioxm2">1000</span></td>
			</tr>
			<tr>
				<td><label for="preciototal">PRECIO TOTAL:</label></td>
				<td><span id="preciototal"></span></td>
			</tr>
			<tr>
				<td><label for="preciocontado">PRECIO DE CONTADO:</label></td>
				<td><span id="preciocontado"></span></td>
			</tr>
			<tr>
				<td><label for="tipoLocal">CONTROL DE PORCENTAJE</label></td>
				<td><input id="porcentaje" type="range" name="porcentaje" min="30" max="100" step="1"></td>
			</tr>
			<tr>
				<td><label for="valorporcentaje">ENGANCHE</label></td>
				<td><input type="number" name="valorporcentaje" id="valorporcentaje" class="inp">%</td>
			</tr>
			<tr>
				<td><label for="total">TOTAL:</label></td>
				<td><span id="total"></span></td>
			</tr>
			<tr>
				<td><label for="mensual">MENSUALIDADES</label></td>
				<td>
					<select id="mensual" name="mensual" onchange="pagomensual()">
	    			<?php for($i=1; $i<=12; $i++) { ?>
						<option value="<?= $i ?>"> <?= $i ?> </option>
					<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td><label for="preciomensual">PRECIO POR MENSUALIDAD:</label></td>
				<td> $<span id="preciomensual"></span></td>
			</tr>
			</tbody>
			</table>
				<!--<select id="planpago">
					<option>PAGO DE CONTADO</option>
					<option>PLAN DE PAGO</option>
				</select><br><br>-->
			</form>
		</div>
	</div>



	<script type="text/javascript">

		$(document).ready(function(){
			var min_range = $("#porcentaje").attr("min");
			var val_range = $("#porcentaje").val(min_range);
			$('#tipoTerreno option[value=2]').attr('selected','selected');
		});

		$(".land").mouseover(function(){
			var title = $(this).attr('title');
			$("#parteCuerpo").text(title);
		});

		$(".land").click(function(){
			var paths = $('.mapp > svg > g').find('path');
			$.each(paths, function(i, v){
				$(v).removeClass('active');
			});

			$(this).addClass('active');
			var myValue = $(this).attr('id');

			var title = $(this).attr("title");
			$("#localSelected").text(title);

			$.each(obj.data, function(i, v){
				if(myValue == v.id){
					$("#m2finales").val(v.superficie);

					var value = $("#m2finales").val();
					var precio = $("#precioxm2").text();
		    	var total1 = value * precio;

		    	$("#preciototal").html(total1);
		    	$("#preciocontado").html(total1);
					$('#porcentaje').change();
				}
			});
		});

		$('#porcentaje').change(function(){
			$('#valorporcentaje').val($(this).val());
			var porcentaje = $('#valorporcentaje').val();
			var precioc = $('#preciocontado').text();
			var total = ((precioc * porcentaje)/100).toFixed(2);
			$("#total").html(total);
			pagomensual();
		});

		function pagomensual(){
			var pagomes = $('select[name="mensual"]').val();
			var precioc = $('#total').text();
			var pagomensual = (precioc / pagomes).toFixed(2);
			$("#preciomensual").html(pagomensual);
		}

		var text = '{"data":[{"superficie":"500","id":"MX-AGU"},{"superficie":"600","id":"MX-BCN"},{"superficie":"700","id":"MX-BCS"},{"superficie":"800","id":"MX-CAM"},{"superficie":"900","id":"MX-CHP"},{"superficie":"100","id":"MX-CHH"},{"superficie":"200","id":"MX-COA"},{"superficie":"300","id":"MX-OCL"},{"superficie":"400","id":"MX-DIF"},{"superficie":"1500","id":"MX-DUR"},{"superficie":"2500","id":"MX-GUA"},{"superficie":"2500","id":"MX-GRO"},{"superficie":"5003","id":"MX-H"},{"superficie":"3500","id":"MX-JAL"},{"superficie":"4500","id":"MX-MEX"},{"superficie":"5500","id":"MX-MIC"},{"superficie":"6500","id":"MX-MOR"},{"superficie":"7500","id":"MX-NAY"},{"superficie":"8500","id":"MX-NLE"},{"superficie":"9500","id":"MX-OAX"},{"superficie":"5430","id":"MX-PUE"},{"superficie":"11500","id":"MX-QUE"},{"superficie":"12500","id":"MX-ROO"},{"superficie":"34500","id":"MX-SLP"},{"superficie":"55400","id":"MX-SIN"},{"superficie":"531500","id":"MX-SON"},{"superficie":"500","id":"MX-TAB"},{"superficie":"500","id":"MX-TAM"},{"superficie":"23500","id":"MX-TLA"},{"superficie":"45500","id":"MX-VER"},{"superficie":"34500","id":"MX-YUC"},{"superficie":"500","id":"MX-ZAC"}]}';
		var obj = JSON.parse(text);

		$("#tipoTerreno").change(function(){
			if($(this).val() == 1){
				$("#svglocal").hide();
				$("#svgplaza").show();
				$("#estilossvg").attr("href", "css/plaza.css");
				$("#localSelected").text("México");
			}else if($(this).val() == 2){
				$("#svglocal").show();
				$("#svgplaza").hide();
				$("#estilossvg").attr("href", "css/local.css");
			}else if ($(this).val() == 3) {

			}
		});

		$("#svgplaza g").click(function(){

		});

		$("#SP").change(function(){
			var p = $(this).val();
			var n = JSON.parse(JSON.stringify(asipararapido));
			switch (p) {
				case "PB":
					$(".mapp").empty();

					$(".mapp").append(n.n0);
					break;
				case "1N":
					$(".mapp").empty();
					$(".mapp").append(n.n1);
					break;
				case "2N":
					//alert(p);
					break;
				default:
					//alert("default");
			}
		});

		var asipararapido = "";
        $.getJSON( "datos/catalogo.json", function( data ) {
          var items = [];
          var opciones = "";
          
          var idMap = "<?= $_GET['map']; ?>";
          $.each( data.catalogo, function( key, val ) {
          	if (val.id == idMap) {
          		opciones = 	val.codesvg[0].n1;
          		asipararapido = val.codesvg[0];
          	}
          	
          });
         
          $(".mapp").append(opciones);

        });
      </script>

</body>
</html>
