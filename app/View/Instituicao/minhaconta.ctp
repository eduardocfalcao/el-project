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

<div class="box-bt">

    <div>
        <?php if($podeFinalizar){?>
            <div style="float:left;">
                <?php echo $this->Html->link("Finalizar Inscrição", array("controller" => "Instituicao", "action" => "concluir"),array( "class"=> 'botao')); ?>
            </div>
        <?php } else { ?>
            <div>
                <span class="botao disable">Finalizar Inscrição</span> <!--botão inativo class: disable-->
            </div>
           
        <?php } ?>	
    </div>
    
    <?php if($finalizado){?>
    	<div class="box-detalhe">
     		<p>
        		<strong>Fique atento.</strong> Em breve será possível gerar o comprovante da sua inscrição.
   			</p>
   		 </div>
    <?php } ?>
		
    
    <div>
        <?php if(isset($validacao) && empty($validacao) == false){?>
        <div class="box-detalhe"><p>
            A sua inscrição não pode ser finalizada pois possui a seguinte pendência:
            <?php echo $validacao; ?>
        </p></div>
        <?php } ?>
        
    </div>

</div>