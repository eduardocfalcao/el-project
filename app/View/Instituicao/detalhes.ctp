<?php $this->extend('/Layouts/minhacontatemplate'); ?>


<h4>Dados da Instui&ccedil;&atilde;o</h4>

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
	
	<?php echo $this->Form->hidden('id'); ?>
	
    <div class="lar-07 margem-01">
        <label for="nomeInstituicao">&bull; Nome da Institui&ccedil;&atilde;o:</label><br />
		
		<?php echo $this->Form->input('nome', array("class" => "validate[required]", "maxlength" => "1000")); ?>
		
    </div>

    <div class="lar-07">
        <label for="cnpj">&bull; CNPJ:</label><br />

       	<?php echo $this->Form->input('cnpj', array("class" => "field-cnpj validate[required]")); ?>
    </div>

    <div class="lar-07 margem-01">
        <label for="telefone">&bull; Telefone:</label><br />

       	<?php echo $this->Form->input('telefone', array("class" => "field-telefone validate[required]")); ?>
    </div>

    <div class="lar-07">
        <label for="telefoneOpcional">&bull; Telefone (2):</label><br />

       	<?php echo $this->Form->input('telefoneAlternativo', array("class" => "field-telefone")); ?>
    </div>

    <div class="lar-07 margem-01">
        <label for="site">&bull; Site:</label><br />

       	<?php echo $this->Form->input('site',  array("maxlength" => "255")); ?>
    </div>

    <div class="lar-07">
        <label for="facebook">&bull; Facebook:</label><br />

       	<?php echo $this->Form->input('facebook',  array("maxlength" => "255")); ?>
    </div>

    <div class="lar-10 margem-01">
        <label for="cidade">&bull; Cidade:</label><br />

        <?php echo $this->Form->input('cidade', array("class" => "validate[required]", "maxlength" => "150")); ?>
    </div>

    <div class="lar-13 margem-01">
        <label for="uf">&bull; UF:</label><br />

       	<?php echo $this->Form->input('uf', array("class" => "validate[required]", "maxlength" => "4")); ?>
    </div>

    <div class="lar-12 margem-01">
        <label for="pais">&bull; Pa&iacute;s:</label><br />

        	<?php echo $this->Form->input('pais', array("class" => "validate[required]", "maxlength" => "150")); ?>
    </div>

    <div class="lar-12 margem-01">
    
         <label for="cep">&bull; CEP:</label><br />

         <?php echo $this->Form->input('cep', array("class" => "field-cep validate[required]")); ?>
    </div>

    <div class="lar-14">
       <label for="endereco">&bull; Endere&ccedil;o:</label><br />

       <?php echo $this->Form->input('endereco', array("class" => "validate[required]", "maxlength" => "1000")); ?>
    </div>

    <div class="lar-16">
        <label for="outrasInformacoes">&bull; Outras informa&ccedil;&otilde;es:</label><br />

       	<?php echo $this->Form->input('outrasInformacoes',array('rows' => 5, 'cols' =>10, "maxlength" => "5000")); ?>
    </div>
    
      <div class="lar-16">
        <label for="historico">&bull; Histórico:</label><br />

       	<?php echo $this->Form->input('historico',array('rows' => 5, 'cols' =>10, "class" => "validate[required]", "maxlength" => "1500")); ?>
    </div>
	
   
<?php 
	echo $this->Form->end('Salvar'); 
?>
    
 	
   

