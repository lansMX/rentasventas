
<!DOCTYPE html>
<html>
<head>
	<title>test</title>
	<meta charset="utf-8">
	<link id="estilossvg" rel="stylesheet" href="css/local.css">
	<link rel="stylesheet" type="text/css" href="bower_components/tooltipster/dist/css/tooltipster.bundle.min.css"/>
  <!-- <link rel="stylesheet" type="text/css" href="bower_components/tooltipster/dist/css/tooltipster-sideTip-punk.min.css"/> -->

	<style type="text/css">
		body{
			background-color: #fff;
			color: #000;
			font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
		}
		.content{
			display: inline-block;
			width: 100%;
		}
		.menu{
			display: inline-block;
		}

		.map{
			display: inline-block;
			/*width: 100%;*/
			height: 200px;
			position: relative;
		}
		.mapp{
			width: 502px;
			height: 490px;
		}

		.calculador{
			float: right;
		}

		/*.calculador{
			margin-top: -60%;
			margin-left: 250%;
			width: 40%;
			position: relative;
		}*/

		.etiqueta{
			padding-left: 30px;
		}
		/*svg{
			width: 900px;
			height: 600px;
			position: absolute;
		}*/

		svg{
			width: 100%;
			height: 100%;
			position: absolute;
		}

		text{
			font-size: 28px;
		}

		.inp{
			width: 105px;
			height: 20px;
		}
		.imgFondoPlano{
			width: 100%;
			height: auto;
			position: absolute;
			z-index: -1;
		}

	</style>


</head>
<body>
	<div class="content">
		<div>
			<select name="SP" id="SP" class="" tabindex="1" style="height:43px; border:1px solid #FFF; font-size:33px; ">
				<option value="PB" selected="">PB</option>
				<option value="1N">1N</option>
				<option value="2N">2N</option>
				<option value="3N">3N</option>
			</select>
			<hr>
		</div>
		<div class="map">
			<div class="mapp"></div>
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
						<td>$ <input type="text" id="precioxm2" value="100"> <!-- <span id="precioxm2">1000</span> --></td>
					</tr>
					<tr>
						<td><label for="preciototal">PRECIO TOTAL:</label></td>
						<td>$ <input type="text" id="preciototal"><!-- <span id="preciototal"></span> --></td>
					</tr>
					<tr>
						<td><label for="preciocontado">PRECIO DE CONTADO:</label></td>
						<td>$ <input type="text" id="preciocontado"><!-- <span id="preciocontado"></span> --></td>
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
						<td>$ <input type="text" id="total"><!-- <span id="total"></span> --></td>
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
						<td>$ <input type="text" id="preciomensual"><!-- <span id="preciomensual"></span> --></td>
					</tr>
					</tbody>
				</table>
			</form>
		</div>
	</div>	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.number.js"></script>
	<script type="text/javascript" src="bower_components/tooltipster/dist/js/tooltipster.bundle.min.js"></script>

  

	<script type="text/javascript">

		var default_floor = "1";
		$(document).ready(function(){
			var min_range = $("#porcentaje").attr("min");
			var val_range = $("#porcentaje").val(min_range);
			$('#tipoTerreno option[value=2]').attr('selected','selected');

			// ***********************************
			$('#m2finales').number( true, 0 );
			$("#precioxm2").number(true, 2);
			$("#preciototal").number(true, 2);
			$("#preciocontado").number(true, 2);
			$("#total").number(true, 2);
			$("#preciomensual").number(true, 2);
			loadData(default_floor);
		});

		function loadData(floor){
			// api/api.php/tab_complejopisos/1
			$.ajax({
				type :  "GET",
				url  : 	"api/api.php/tab_complejopisos/"+floor,
				dataType: "JSON",
				success: function(response){
					
					var svg = response.SVG;
					var fondo = response.Fondo;

					$(".mapp").append(svg + "<img class='imgFondoPlano' src='" + fondo + "'>" );
				}
			});
		}


		$(".land").mouseover(function(){
			var title = $(this).attr('title');
			$("#parteCuerpo").text(title);
		});

		function selectLand(ctrl){
			console.log($(ctrl));
			var paths = $('.mapp > svg > g').find('path');
			$.each(paths, function(i, v){
				$(v).removeClass('active');
			});

			var paths = $('.mapp > svg > g').find('poligon');
			$.each(paths, function(i, v){
				$(v).removeClass('active');
			});

			var paths = $('.mapp > svg > g').find('rect');
			$.each(paths, function(i, v){
				$(v).removeClass('active');
			});

			$(ctrl).addClass('active');
			var myValue = $(ctrl).attr('id');
			console.log(myValue);
			var title = $(this).attr("title");
			$("#localSelected").text(title);

			$.getJSON("datos/infedo.json", function( data ) {
	          var items = [];
	          var opciones = "";

	          	for (var i = 0; i < data.data.length; i++) {
          			//console.log(data.data[i]);
          			if(myValue == data.data[i].id){
						//console.log(data.data[i].superficie);
						$("#m2finales").val(data.data[i].superficie);

						var value = $("#m2finales").val();
						var precio = $("#precioxm2").val();
				    	var total1 = value * precio;

				    	$("#preciototal").val(total1);
				    	$("#preciocontado").val(total1);

						$('#porcentaje').change();
					}
          		}

	      	});
		}

		$('#porcentaje').change(function(){
			$('#valorporcentaje').val($(this).val());
			var porcentaje = $('#valorporcentaje').val();
			var precioc = $('#preciocontado').val();
			//var total = ((precioc * porcentaje)/100).toFixed(2);
			var total = ((precioc * porcentaje)/100);
			$("#total").val(total);
			pagomensual();
		});

		function pagomensual(){
			var pagomes = $('select[name="mensual"]').val();
			var precioc = $('#total').val();
			//var pagomensual = (precioc / pagomes).toFixed(2);
			var pagomensual = (precioc / pagomes);
			$("#preciomensual").val(pagomensual);
		}


		$("#tipoTerreno").change(function(){
			var tipo = parseInt($(this).val());
			switch(tipo){
				case 1:
					$("#svglocal").hide();
					$("#svgplaza").show();
					$("#estilossvg").attr("href", "css/plaza.css");
					$("#localSelected").text("México");
					getAllSuperficie();
					break;
				case 2:
					$("#svglocal").show();
					$("#svgplaza").hide();
					$("#estilossvg").attr("href", "css/local.css");
					break;
				case 3:
					break;
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

		
		

		function getAllSuperficie(){
			$.getJSON( "datos/infedo.json", function( data ) {
	          	var items = [];
	          	var opciones = "";
	          	var mtotales = 0;
		        $.each(data.data, function(index, i){
		          	console.log(i.superficie);
		          	mtotales = mtotales + parseInt(i.superficie);
		        });

	          	//console.log(mtotales);
	          	$("#m2finales").val(mtotales);
	            var value = $("#m2finales").val();

				var precio = $("#precioxm2").val();
		    	var total1 = value * precio;
				//console.log(total1);
		    	$("#preciototal").val(total1);
		    	$("#preciocontado").val(total1);
				$('#porcentaje').change();
	      	});
		}
    </script>

</body>
</html>
