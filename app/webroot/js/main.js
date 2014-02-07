//Script principal da aplicação

$(document).ready(function() {
	$('form').validationEngine();
	$('input.datepicker').Zebra_DatePicker({
		format: "d/m/Y"
	});
});