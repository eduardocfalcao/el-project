<?php $this->extend('/layouts/minhacontatemplate'); ?>


<h4>Dados da Intui&ccedil;&atilde;o</h4>

<?php echo $this->Form->create('Instituicao',
						    array(
						    		'url' => array('controller' => 'Instituicao', 'action' => 'detalhes'),
								    'inputDefaults' => array
								    (
								        'label' => false,
								        'div' => false
								    ) 
						    	)
						   ); ?>

    <div class="lar-01">
        <label for="nomeInstituicao">&bull; Nome da Institui&ccedil;&atilde;o</label><br />
		
		<?php echo $this->Form->input('nome'); ?>
		
    </div>

    <div class="lar-07 margem-01">
        <label for="cnpj">&bull; CNPJ</label><br />

       	<?php echo $this->Form->input('cnpj'); ?>
    </div>

    <div class="lar-07 margem-01">
        <label for="telefone">&bull; Telefone:</label><br />

       	<?php echo $this->Form->input('telefone'); ?>
    </div>

    <div class="lar-07">
        <label for="telefoneOpcional"> Telefone (2):</label><br />

       	<?php echo $this->Form->input('telefoneAlternativo'); ?>
    </div>

    <div class="lar-07 margem-01">
        <label for="site">Site</label><br />

       	<?php echo $this->Form->input('site'); ?>
    </div>

    <div class="lar-07">
        <label for="facebook">Facebook:</label><br />

       	<?php echo $this->Form->input('facebook'); ?>
    </div>

    <div class="lar-10 margem-01">
        <label for="cidade">&bull; Cidade:</label><br />

        <?php echo $this->Form->input('cidade'); ?>
    </div>

    <div class="lar-13 margem-01">
        <label for="uf">&bull; UF:</label><br />

       	<?php echo $this->Form->input('uf'); ?>
    </div>

    <div class="lar-12 margem-01">
        <label for="pais">&bull; Pa&iacute;s:</label><br />

        	<?php echo $this->Form->input('pais'); ?>
    </div>

    <div class="lar-12 margem-01">
    
         <label for="cep">&bull; CEP</label><br />

         <?php echo $this->Form->input('cep'); ?>
    </div>

    <div class="lar-14">
       <label for="endereco">&bull; Endere&ccedil;o:</label><br />

       <?php echo $this->Form->input('endereco'); ?>
    </div>

    <div class="lar-11">
        <label for="outrasInformacoes">Outras informa&ccedil;&otilde;es:</label><br />

       	<?php echo $this->Form->input('outrasInformacoes',array('rows' => 5, 'cols' =>10)); ?>
    </div>


<?php echo $this->Form->end('Salvar'); ?>

