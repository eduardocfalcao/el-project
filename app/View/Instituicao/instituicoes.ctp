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

<h4> <?PHP echo utf8_encode("Listagem de Instituições"); ?></h4>

<table>
	<tr>
		<th>
			<?PHP echo utf8_encode("Nome Instituição"); ?>
		</th>
		<th>
			E-mail
		</th>
		<th>
			<?PHP echo utf8_encode("Inscrição Finalizada"); ?>
		</th>
		<th>
			
		</th>
		<th>
			
		</th>
		<th>
			
		</th>
	</tr>
	<?PHP foreach($instituicoes as $instituicao){ ?>
		<tr>
			<td>
				<?PHP echo $instituicao["Instituicao"]["nome"]; ?>
			</td>
			<td>
				<?PHP echo $instituicao["Instituicao"]["email"]; ?>
			</td>
			<td>
				<?PHP echo $instituicao["Instituicao"]["concluido"] ? "Sim" : utf8_encode("Não"); ?>
			</td>
			<td>
				<?PHP echo $this->Html->link('Detalhes', 
											 array('controller' => 'Instituicao','action' => 'visualizar', $instituicao["Instituicao"]["id"]), 
											 array("class" => "k-button visualizarDetalhes")); ?>
			</td>
			<td>
				<?PHP echo $this->Html->link('Download PDF', 
											 array('controller' => 'Instituicao','action' => 'relatorioAdmin', $instituicao["Instituicao"]["id"]), 
											 array("class" => "k-button", "target" => "_blank")); ?>
			</td>
			<td>
				<?PHP echo $this->Html->link( utf8_encode("Download inscrição"), 
											 array('controller' => 'Instituicao','action' => 'downloadInscricao', $instituicao["Instituicao"]["id"]), 
											 array("class" => "k-button", "target" => "_blank", 
											 	   "alt" => "Será feito o download do pdf e de todos os anexos em um arquivo zip.")); ?>
			</td>
		</tr>
	<?PHP }?>
</table>

<div class="paginator">

<?PHP

	echo $this->Paginator->prev('« Mais novas', null, null, array('class' => 'desabilitado'));
	echo $this->Paginator->numbers();
	echo $this->Paginator->next('Mais antigas »', null, null, array('class' => 'desabilitado'));

?>

</div>