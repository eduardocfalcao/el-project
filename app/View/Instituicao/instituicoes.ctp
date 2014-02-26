<?php $this->extend('/Layouts/minhacontatemplate'); ?>

  <script>
    $(document).ready(function() {
        var window = $("#viewWindow");
        
        $(".visualizarDetalhes").bind("click",function(e){
        	e.preventDefault();
        	
        	window.kendoWindow({
            	width: "615px",
            	height: "500px"
       		});
       		
        	var url = $(this).attr("href");
        	 $.get(url, function(data){
        	 	 $("#viewWindow").html(data);
        		window.data("kendoWindow").open();
        	});
        });
    });
</script>

<div id="viewWindow" style="overflow-y: auto;"></div>

<h4> <?PHP echo utf8_encode("Listagem de Institui��es"); ?></h4>

<table class="list-inst">
	<tr>
		<th class="width300">
			<?PHP echo utf8_encode("Nome Institui��o"); ?>
		</th>
		<th class="width200">
			E-mail
		</th>
		<th class="width100">
			<?PHP echo utf8_encode("Inscri��o Finalizada"); ?>
		</th>
		<th class="width60">
			
		</th>
		<th class="width60">
			
		</th>
		<th class="width60">
			
		</th>
	</tr>
	<?php $odd = false;?>
	
	<?PHP foreach($instituicoes as $instituicao){ ?>
		<?php if($odd){ ?>
			<tr class="odd">
		<?php } else {?>
			<tr>
		<?php }
			$odd = !$odd;
		?>
			<td>
				<?PHP echo $instituicao["Instituicao"]["nome"]; ?>
			</td>
			<td>
				<?PHP echo $instituicao["Instituicao"]["email"]; ?>
			</td>
			<td>
				<?PHP echo $instituicao["Instituicao"]["concluido"] ? "Sim" : utf8_encode("N�o"); ?>
			</td>
			<td>
				<?PHP echo $this->Html->link('Detalhes', 
											 array('controller' => 'Instituicao','action' => 'visualizar', $instituicao["Instituicao"]["id"]), 
											 array("class" => "icones-pdf-view visualizarDetalhes")); ?>
			</td>
			<td>
				<?PHP echo $this->Html->link('Download PDF', 
											 array('controller' => 'Instituicao','action' => 'relatorioAdmin', $instituicao["Instituicao"]["id"]), 
											 array("class" => "icones-pdf-down", "target" => "_blank")); ?>
			</td>
			<td>
				<?PHP echo $this->Html->link( utf8_encode("Download inscri��o"), 
											 array('controller' => 'Instituicao','action' => 'downloadInscricao', $instituicao["Instituicao"]["id"]), 
											 array("class" => "icones-pdf-zip", "target" => "_blank", 
											 	   "alt" => utf8_encode("Ser� feito o download do pdf e de todos os anexos em um arquivo zip."))); ?>
			</td>
		</tr>
	<?PHP }?>
</table>

<div class="paginator">

<?PHP

	echo $this->Paginator->prev('Anterior', null, null, array('class' => 'desabilitado'));
	echo "|";
	echo $this->Paginator->numbers();
	echo "|";
	echo $this->Paginator->next(utf8_encode('Pr�ximo'), null, null, array('class' => 'desabilitado'));

?>

</div>