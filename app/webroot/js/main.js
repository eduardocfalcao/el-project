//Script principal da aplica��o

$(document).ready(function() {
	$('form').validationEngine();
	$('input.datepicker').Zebra_DatePicker({
		format: "d/m/Y"
	});
});