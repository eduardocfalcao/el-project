<?php $this->extend('/Layouts/minhacontatemplate'); ?>

<?php echo $this->Form->create('Responsavel',
						    array(
						    		'url' => array('controller' => 'Responsavel', 'action' => 'editar'),
								    'inputDefaults' => array
								    (
								        'label' => false,
								        'div' => false
								    ) 
						    	)
						   ); ?>

    <div class="lar-07 margem-01">
        <label for="nome">&bull; Nome:</label><br />

         <?php echo $this->Form->input('nome', array("class" => "validate[required]", "maxlength" => "1000")); ?>
    </div>

    <div class="lar-07">
        <label for="cargo">&bull; Cargo:</label><br />

         <?php echo $this->Form->input('cargo', array("class" => "validate[required]", "maxlength" => "1000")); ?>
    </div>

    <div class="lar-07 margem-01">
        <label for="cpf">&bull; CPF:</label><br />

         <?php echo $this->Form->input('cpf', array("class" => "field-cpf validate[required]")); ?>
    </div>

    <div class="lar-07">
        <label for="rg">&bull; RG:</label><br />

        <?php echo $this->Form->input('rg', array("class" => "field-rg validate[required]")); ?>
    </div>

    <div class="lar-16">
        <label for="outrasInformacoes">Outras informa&ccedil;&otilde;es:</label><br />

       	<?php echo $this->Form->input('outrasInformacoes',array('rows' => 5, 'cols' =>10, "maxlength" => "5000")); ?>
    </div>

<?php 
	echo $this->Form->end('Salvar');
?>