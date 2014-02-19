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
			
		</th>
		<th>
			<?PHP echo utf8_encode("Nome Instituição"); ?>
		</th>
		<th>
			E-mail
		</th>
		<th>
			Telefone
		</th>
		<th>
			<?PHP echo utf8_encode("Inscrição Finalizada"); ?>
		</th>
	</tr>
	<?PHP foreach($instituicoes as $instituicao){ ?>
		<tr>
			<td>
				<?PHP echo $this->Html->link('Detalhes', array('controller' => 'Instituicao','action' => 'visualizar', $instituicao["Instituicao"]["id"]), 
											 array("class" => "k-button visualizarDetalhes")); ?>
			</td>
			<td>
				<?PHP echo $instituicao["Instituicao"]["nome"]; ?>
			</td>
			<td>
				<?PHP echo $instituicao["Instituicao"]["email"]; ?>
			</td>
			<td>
				<?PHP echo $instituicao["Instituicao"]["telefone"]; ?>
			</td>
			<td>
				<?PHP echo $instituicao["Instituicao"]["concluido"] ? "Sim" : utf8_encode("Não"); ?>
			</td>
		</tr>
	<?PHP }?>
</table>


<?PHP

	echo $this->Paginator->prev('« Mais novas', null, null, array('class' => 'desabilitado'));
	echo $this->Paginator->numbers();
	echo $this->Paginator->next('Mais antigas »', null, null, array('class' => 'desabilitado'));

?>