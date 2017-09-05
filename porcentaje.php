
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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

<script type="text/javascript">
$(document).ready(function(){
    
	$("#m2finales").keyup( function(){
		$('#porcentaje').change(function() {
			$('#valorporcentaje').val($(this).val());
			var porcentaje = $('#valorporcentaje').val();
			var precioc = $('#preciocontado').text();
			var total = ((precioc * porcentaje)/100).toFixed(2);
			$("#total").html(total);
			/* $('#valorporcentaje').val($(this).val());
			var porcentaje = $('#valorporcentaje').val();
			var precio = $('#precioxm2').val();
			var total = ((precio * 100)/ porcentaje).toFixed(2);;
			$("#total").html(total); */
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
	//console.log(pagomensual);
}




</script>