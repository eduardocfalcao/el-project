<?php $this->extend('/Layouts/minhacontatemplate'); ?>

<h5 style="margin-top: 30px;">Antes de começar sua inscrição, leia com atenção às dicas abaixo:</h5>

<p>Preencha todos os campos das páginas do menu acima. Fique atento aos campos obrigatórios e ao final da inscrição clique em <strong>Salvar</strong>.<br/><br/>
Assim que todas as páginas estiverem preenchidas, clique no botão <strong>Finalizar</strong> para sua inscrição ser válida.<br/><br/>
Caso você precise mudar alguma informação após finalizar a inscrição, você poderá voltar ao modo de edição clicando em <strong>Editar</strong>.  Mas lembre-se que para sua inscrição ser válida, você terá que clicar novamente em <strong>Finalizar</strong>.

</p>

<p>
	Estado: 
	<?php if($finalizado){?>
		<strong>Finalizado</strong>
	<?php } else { ?>
		<strong>Em edição</strong>
	<?php } ?>
</p>

<div>
	<?php if($podeFinalizar){?>
		<div>
			<?php echo $this->Html->link("Finalizar Inscrição", array("controller" => "Instituicao", "action" => "concluirInscricao")); ?>
		</div>
	<?php } else { ?>
		<div>
			<span>Finalizar Inscrição</span>
		</div>
	<?php } ?>	
</div>

<div>
	<?php if($finalizado == true){?>
		<div>
			<?php echo $this->Html->link("Editar Inscrição", array("controller" => "Instituicao", "action" => "editarInscricao")); ?>
		</div>
	<?php } else { ?>
		<div>
			<span>Finalizar Inscrição</span>
		</div>
	<?php } ?>
	
</div>

<div>
	<?php if(isset($validacao)){?>
	<p>
		A sua inscrição não pode ser finalizada pois possui a seguinte pendência:
		<?php echo $validacao; ?>
	</p>
	<?php } ?>
	
</div>