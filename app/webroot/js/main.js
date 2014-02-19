//Script principal da aplicação

$(document).ready(function() {
	$('form').validationEngine();
	$('input.datepicker').datepicker({
		format: "d/m/Y"
	},
	$.datepicker.regional['pt-BR']);


    var windowHelp = $(".windowHelp");
    var isShowingHelp = false;
    $(".buttonHelp")
            .bind("click", function() {
            	if(isShowingHelp){
					isShowingHelp = false;
					windowHelp.data("kendoWindow").close();
				}
				else{
					windowHelp.data("kendoWindow").open();
					isShowingHelp = true;
				}
                
                
            });

    if (!windowHelp.data("kendoWindow")) {
        windowHelp.kendoWindow({
            width: "600px",
            title: "Ajuda",
            actions: [
                "Pin",
                "Minimize",
                "Close"
            ],
            visible: false
        });
    }
});