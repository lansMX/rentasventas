<?php 

require_once('conexion.php');

$bd = new BD();

$conexion = $bd->fetchData("select * from tab_complejopisos where Piso = 'PB'");
var_dump($conexion);

 ?><!DOCTYPE html>
<html>
<head>
	<title>test</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<meta charset="utf-8"></meta>
</head>
<body>
	<style type="text/css">
		.content{
			display: inline-block;
		}
		.menu{
			display: inline-block;
		}
		.mapp{
			float: left;
			width: 100%;
			height: 500px;
		}
		.calculador{
			display: inline-block;
		}
		/*svg{
			width: 900px;
			height: 600px;
		}
		.land{
			fill: #f00;
		}
		.active{
			fill: #f00;
			opacity: 1;
		}
		.cls-1{
			fill: #0f0;
		}
		.cls-1:hover{
			fill: #00f;
		}
		.cls-3or:hover{
			fill: #ee2172;
		}
		.cls-2:hover{
			fill: #00;
		}*/
	</style>
	<style type="text/css">
		svg{
			position: absolute;
			width: 100%;
			height: 1000px;
		}
		img{
			position: absolute;
			z-index: -1;
		}
		.land:hover{
			fill:#0f0 !important;
			opacity: 1;
		}
		.land{fill:white;opacity:.1; stroke:#000;stroke-miterlimit:10;}
		.contorno{opacity: .1;fill: none;}
	</style>

	<div class="header">
		header
	</div>
	
	<div class="content">
		<div class="menu">
			menu
		</div>
		<div class="mapp">
			<?= $conexion[0]['SGV']; ?>	
			<?= "<img src='".$conexion[0]['Fondo']."'>"; ?>
		</div>	
		<div class="calculador">
			<form name="ejemplo">
				<label for="m2finals">M <sup>2</sup> FINALES</label>
				<input type="text" id="m2finales"> <br><br>
				<label for="tipoLocal">TIPO DE LOCAL</label>
				<select id="tipoLocal">
					<option value="1">Kiosko</option>
					<option value="2">Local</option>
					<option value="3">consultorio</option>
					<option value="4">Departamento</option>
					<option value="4">Habitación</option>
					<option value="6">Hotel</option>
					<option value="7">Oficina</option>
				</select><br><br>
				<label for="precioxm2">PRECIO X M<sup>2</sup> </label>
				<input id="precioxm2" type="number" value="10" disabled style="border:none;"><br><br>
				<label for="preciototal">PRECIO TOTAL: $</label>
				<span id="preciototal"></span><br><br>
				<label for="preciocontado">PRECIO DE CONTADO: $</label>
				<span id="preciocontado"></span><br><br>
				<!--<select id="planpago">
					<option>PAGO DE CONTADO</option>
					<option>PLAN DE PAGO</option>
				</select><br><br>-->
				<label for="tipoLocal">CONTROL DE PORCENTAJE</label><br><br>
			    <input id="porcentaje" type="range" name="porcentaje" min="30" max="100" step="1" value="0"><br><br>
			    <label for="valorporcentaje">ENGANCHE</label>
			    <input type="text" name="valorporcentaje" id="valorporcentaje"><sup> %</sup><br><br>
			    <label for="total">TOTAL $ </label>
			    <span id="total"></span><br><br>
				<label for="mensual">MENSUALIDADES</label>
			    <select id="mensual" name="mensual" onchange="pagomensual()">
			    	<?php for($i=1; $i<=12; $i++) { ?>
						<option value="<?= $i ?>"> <?= $i ?> </option>
					<?php } ?>
				</select><br><br>
				<label for="preciomensual">PRECIO POR MENSUALIDAD: $ </label>
				<span id="preciomensual"></span><br><br>
			</form>
		</div>
	</div>

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

  	<script type="text/javascript">
  		$(".land").mouseover(function(){
  			$(this).attr("fill", "red");
  			$(this).attr("opacity", "1");
  		});
		
		$(".land").mouseover(function() {
			var title = $(this).attr('title');
			$(this).attr('fill', '#f00');
			$(this).attr('opacity', '.5');
			$("#parteCuerpo").text(title);
			console.log('mouseover ' + $(this).attr('fill'));
		});
		$(".land").mouseout(function() {
			var title = $(this).attr('title');
			$(this).attr('fill', '#333');
			$(this).attr('opacity', '1');
		});	
		$(".land").click(function() {
			$(this).attr("id");
			$.ajax({
				method : 'POST',
				url : 'fetchData',
				data : { 'query' : 'select * from tab_bellanca' },
				success: function(result){
					console.log(result);console.log("success");
				},
				error: function(r){
					console.log(r);console.log("error");
				}
			});
			// var paths = $('.mapp > svg > g').find('path');			
			// $.each(paths, function(i, v){
			// 	$(v).removeClass('active');
			// });
			// $(this).addClass('active');
			// var myValue = $(this).attr('id');
			// $.each(obj.data, function(i, v){
			// 	if(myValue == v.id){
			// 		$("#m2finales").val(v.superficie);
			// 	}
			// });
		});

		$(document).ready(function(){
    
		$("#m2finales").keyup( function(){
			$('#porcentaje').change(function() {
				$('#valorporcentaje').val($(this).val());
				var porcentaje = $('#valorporcentaje').val();
				var precioc = $('#preciocontado').text();
				var total = ((precioc * porcentaje)/100).toFixed(2);				
				$("#total").html(total);
			});
		    	var value = $(this).val();
		    	var precio = $("#precioxm2").val();
		    	var total1 = value * precio;
		    	$("#preciototal").html(total1);
		    	$("#preciocontado").html(total1);
			});
		});

		function pagomensual(){
			var pagomes = $('select[name="mensual"]').val();
			var precioc = $('#preciocontado').text();
			var pagomensual = (precioc / pagomes).toFixed(2);
			$("#preciomensual").html(pagomensual);
			
		}


		function tryin(id) {
			$.ajax({
			    url: 'http://www3.inegi.org.mx//sistemas/api/indicadores/v1//Indicador/6207024010/'+id+'/es/true/json/6e672e8b-7b0f-fde7-5912-ae24e98e3377',
			    data: id,
			    type: 'GET',
			    crossDomain: true
			}).done(function(data){
				console.log(data);
			});
		}tryin(1);

	var text = '{"data":[{"superficie":"500","id":"MX-AGU"},{"superficie":"600","id":"MX-BCN"},{"superficie":"700","id":"MX-BCS"},{"superficie":"800","id":"MX-CAM"},{"superficie":"900","id":"MX-CHP"},{"superficie":"100","id":"MX-CHH"},{"superficie":"200","id":"MX-COA"},{"superficie":"300","id":"MX-OCL"},{"superficie":"400","id":"MX-DIF"},{"superficie":"1500","id":"MX-DUR"},{"superficie":"2500","id":"MX-GUA"},{"superficie":"2500","id":"MX-GRO"},{"superficie":"5003","id":"MX-H"},{"superficie":"3500","id":"MX-JAL"},{"superficie":"4500","id":"MX-MEX"},{"superficie":"5500","id":"MX-MIC"},{"superficie":"6500","id":"MX-MOR"},{"superficie":"7500","id":"MX-NAY"},{"superficie":"8500","id":"MX-NLE"},{"superficie":"9500","id":"MX-OAX"},{"superficie":"5430","id":"MX-PUE"},{"superficie":"11500","id":"MX-QUE"},{"superficie":"12500","id":"MX-ROO"},{"superficie":"34500","id":"MX-SLP"},{"superficie":"55400","id":"MX-SIN"},{"superficie":"531500","id":"MX-SON"},{"superficie":"500","id":"MX-TAB"},{"superficie":"500","id":"MX-TAM"},{"superficie":"23500","id":"MX-TLA"},{"superficie":"45500","id":"MX-VER"},{"superficie":"34500","id":"MX-YUC"},{"superficie":"500","id":"MX-ZAC"}]}';
	var obj = JSON.parse(text);
		// });
	</script>

</body>
</html>