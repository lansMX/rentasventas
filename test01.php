<?php 

require_once('conexion.php');

$bd = new BD();

$conexion1 = $bd->conexion();
var_dump($conexion1);
$conexion = $bd->fetchData("select * from tab_bellanca");
var_dump($conexion);

echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";

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
			display: inline-block;
			width: 100%;
			height: 500px;
		}
		.calculador{
			display: inline-block;
		}
		svg{
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
		}
	</style>
	<div class="header">
		header
	</div>
	
	<div class="content">
		<div class="menu">
			menu
		</div>
		<div class="mapp" >	

<!-- Imagen 1 -->
 <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 927 458">
	<defs>
	<style>.cls-1{fill:#fff;}.cls-2{font-size:12px;font-family:MyriadPro-Regular, Myriad Pro;}
	</style>
	</defs>
	<title>test01</title>
	
	<rect  class="cls-1" x="9" y="9" width="909" height="440"/>

	<path class="land" d="M1207,150V572H316V150h891m18-18H298V590h927V132Z" transform="translate(-298 -132)"/>
	
	<rect  class="cls-1" x="64" y="30" width="114" height="151"/>

	<path class="land" d="M467,171V304H371V171h96m18-18H353V322H485V153Z" transform="translate(-298 -132)"/>
	
	<rect  class="cls-1" x="214" y="30" width="114" height="151"/>

	<path class="land" d="M617,171V304H521V171h96m18-18H503V322H635V153Z" transform="translate(-298 -132)"/>
	
	<rect  class="cls-1" x="356" y="31" width="114" height="151"/>

	<path class="land" d="M759,172V305H663V172h96m18-18H645V323H777V154Z" transform="translate(-298 -132)"/>
	
	<rect  class="cls-1" x="500" y="32" width="114" height="151"/>

	<path class="land" d="M903,173V306H807V173h96m18-18H789V324H921V155Z" transform="translate(-298 -132)"/>
	
	<rect  class="cls-1" x="645" y="32" width="114" height="151"/>

	<path class="land" d="M1048,173V306H952V173h96m18-18H934V324h132V155Z" transform="translate(-298 -132)"/>
	
	<rect  class="cls-1" x="60" y="275" width="114" height="151"/>

	<path class="land" d="M463,416V549H367V416h96m18-18H349V567H481V398Z" transform="translate(-298 -132)"/>
	
	<rect  class="cls-1" x="215" y="276" width="114" height="151"/>

	<path class="land" d="M618,417V550H522V417h96m18-18H504V568H636V399Z" transform="translate(-298 -132)"/>
	
	<rect  class="cls-1" x="357" y="274" width="114" height="151"/>

	<path class="land" d="M760,415V548H664V415h96m18-18H646V566H778V397Z" transform="translate(-298 -132)"/>
	
	<rect  class="cls-1" x="500" y="273" width="114" height="151"/>

	<path class="land" d="M903,414V547H807V414h96m18-18H789V565H921V396Z" transform="translate(-298 -132)"/>
	
	<rect  class="cls-1" x="782" y="33" width="114" height="151"/>

	<path class="land" d="M1185,174V307h-96V174h96m18-18H1071V325h132V156Z" transform="translate(-298 -132)"/>
	
	<rect  class="cls-1" x="644" y="272" width="114" height="151"/>

	<path class="land" d="M1047,413V546H951V413h96m18-18H933V564h132V395Z" transform="translate(-298 -132)"/>
	
	<rect  class="cls-1" x="783" y="271" width="114" height="151"/>

	<path class="land" d="M1186,412V545h-96V412h96m18-18H1072V563h132V394Z" transform="translate(-298 -132)"/>
	<text class="cls-2" transform="translate(101.41 93.06)">1</text>
	<text class="cls-2" transform="translate(248.47 82.47)">2</text>
	<text class="cls-2" transform="translate(394.35 77.76)">3</text>
	<text class="cls-2" transform="translate(536.71 83.65)">4</text>
	<text class="cls-2" transform="translate(680.24 83.65)">5</text>
	<text class="cls-2" transform="translate(813.18 87.18)">6</text>
	<text class="cls-2" transform="translate(100.24 330.71)">7</text>
	<text class="cls-2" transform="translate(252 329.53)">8</text>
	<text class="cls-2" transform="translate(396.71 329.53)">9</text>
	<text class="cls-2" transform="translate(533.18 333.06)">10</text>
	<text class="cls-2" transform="translate(675.53 321.29)">11</text>
	<text class="cls-2" transform="translate(817.88 327.18)">12</text>

	</svg>

<!-- fIN imagen 1 -->
 
<!-- imagen 2 -->
		<svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 997.35 458"><title>test02</title>
		
		<rect clasS="cls-1" x="79.35" y="9" width="909" height="440" fill="#fff"/>
		
		<path d="M1207,150V572H316V150h891m18-18H298V590h927V132Z" transform="translate(-227.65 -132)"/>
		
		<rect clasS="cls-1" x="165.35" y="61" width="52" height="89" fill="#fff"/>
		
		<path d="M482.82,153H355.18a2.18,2.18,0,0,0-2.18,2.18V319.82a2.18,2.18,0,0,0,2.18,2.18H482.82a2.18,2.18,0,0,0,2.18-2.18V155.18a2.18,2.18,0,0,0-2.18-2.18Z" transform="translate(-227.65 -132)"/>
		
		<rect clasS="cls-1" x="315.35" y="61" width="52" height="89" fill="#fff"/>
		
		<polygon class="land" points="407.35 21 275.35 21 275.35 190 407.35 190 407.35 21 407.35 21"/>
		
		<rect clasS="cls-1" x="457.35" y="62" width="52" height="89" fill="#fff"/>
		
		<polygon class="land" points="549.35 22 417.35 22 417.35 191 549.35 191 549.35 22 549.35 22"/>
		
		<rect clasS="cls-1" x="601.35" y="63" width="52" height="89" fill="#fff"/>
		
		<polygon class="land" points="693.35 23 561.35 23 561.35 192 693.35 192 693.35 23 693.35 23"/>
		
		<rect clasS="cls-1" x="746.35" y="63" width="52" height="89" fill="#fff"/>
		
		<polygon class="land" points="838.35 23 706.35 23 706.35 192 838.35 192 838.35 23 838.35 23"/>
		
		<rect clasS="cls-1" x="161.35" y="306" width="52" height="89" fill="#fff"/>
		
		<polygon class="land" points="253.35 266 121.35 266 121.35 435 253.35 435 253.35 266 253.35 266"/>
		<rect clasS="cls-1" x="316.35" y="307" width="52" height="89" fill="#fff"/>
		<polygon class="land" points="408.35 267 276.35 267 276.35 436 408.35 436 408.35 267 408.35 267"/>
		<rect clasS="cls-1" x="458.35" y="305" width="52" height="89" fill="#fff"/>
		<polygon class="land" points="550.35 265 418.35 265 418.35 434 550.35 434 550.35 265 550.35 265"/>
		<rect clasS="cls-1" x="601.35" y="304" width="52" height="89" fill="#fff"/>
		<polygon class="land" points="693.35 264 561.35 264 561.35 433 693.35 433 693.35 264 693.35 264"/>
		<rect clasS="cls-1" x="883.35" y="64" width="52" height="89" fill="#fff"/>
		<polygon class="land" points="975.35 24 843.35 24 843.35 193 975.35 193 975.35 24 975.35 24"/>
		<rect clasS="cls-1" x="745.35" y="303" width="52" height="89" fill="#fff"/>
		<polygon class="land" points="837.35 263 705.35 263 705.35 432 837.35 432 837.35 263 837.35 263"/>
		<rect clasS="cls-1" x="884.35" y="302" width="52" height="89" fill="red"/>
		<polygon class="land" points="976.35 262 844.35 262 844.35 431 976.35 431 976.35 262 976.35 262"/>
		<text transform="translate(171.76 93.06)" font-size="12" fill="#fff" font-family="MyriadPro-Regular, Myriad Pro">1</text><text transform="translate(318.82 82.47)" font-size="12" fill="#fff" font-family="MyriadPro-Regular, Myriad Pro">2</text><text transform="translate(464.71 77.76)" font-size="12" fill="#fff" font-family="MyriadPro-Regular, Myriad Pro">3</text><text transform="translate(607.06 83.65)" font-size="12" fill="#fff" font-family="MyriadPro-Regular, Myriad Pro">4</text><text transform="translate(750.59 83.65)" font-size="12" fill="#fff" font-family="MyriadPro-Regular, Myriad Pro">5</text><text transform="translate(883.53 87.18)" font-size="12" fill="#fff" font-family="MyriadPro-Regular, Myriad Pro">6</text><text transform="translate(170.59 330.71)" font-size="12" fill="#fff" font-family="MyriadPro-Regular, Myriad Pro">7</text><text transform="translate(322.35 329.53)" font-size="12" fill="#fff" font-family="MyriadPro-Regular, Myriad Pro">8</text><text transform="translate(467.06 329.53)" font-size="12" fill="#fff" font-family="MyriadPro-Regular, Myriad Pro">9</text><text transform="translate(603.53 333.06)" font-size="12" fill="#fff" font-family="MyriadPro-Regular, Myriad Pro">10</text><text transform="translate(745.88 321.29)" font-size="12" fill="#fff" font-family="MyriadPro-Regular, Myriad Pro">11</text><text transform="translate(888.24 327.18)" font-size="12" fill="#fff" font-family="MyriadPro-Regular, Myriad Pro">12</text><text transform="translate(0 100.12)" font-size="12" font-family="MyriadPro-Regular, Myriad Pro"><tspan letter-spacing="-0.01em">L</tspan><tspan x="5.5" y="0">o</tspan><tspan x="12.08" y="0" letter-spacing="-0.01em">r</tspan><tspan x="15.89" y="0" letter-spacing="0em">em ipsum</tspan></text></svg>

<!-- Fin imagen 2 -->



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


	<script type="text/javascript">
		
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
			var paths = $('.mapp > svg > g').find('path');			
			$.each(paths, function(i, v){
				$(v).removeClass('active');
			});
			$(this).addClass('active');
			var myValue = $(this).attr('id');
			$.each(obj.data, function(i, v){
				if(myValue == v.id){
					$("#m2finales").val(v.superficie);
				}
			});
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