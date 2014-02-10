//Script principal da aplicação

$(document).ready(function() {
	$('form').validationEngine();
	$('input.datepicker').datepicker({
		format: "d/m/Y"
	},
	$.datepicker.regional['pt-BR']);
});