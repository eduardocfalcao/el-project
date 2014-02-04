<?php $this->extend('/layouts/minhacontatemplate'); ?>

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

    <div class="lar-01">
        <label for="nome">&bull; Nome:</label><br />

         <?php echo $this->Form->input('nome'); ?>
    </div>

    <div class="lar-02">
        <label for="cargo">&bull; Cargo:</label><br />

         <?php echo $this->Form->input('cargo'); ?>
    </div>

    <div class="lar-02 margem-01">
        <label for="cpf">&bull; CPF:</label><br />

         <?php echo $this->Form->input('cpf'); ?>
    </div>

    <div class="lar-02">
        <label for="rg">&bull; RG:</label><br />

        <?php echo $this->Form->input('rg'); ?>
    </div>

    <div class="lar-16">
        <label for="outrasInformacoes">Outras informa&ccedil;&otilde;es:</label><br />

       	<?php echo $this->Form->input('outrasInformacoes',array('rows' => 5, 'cols' =>10)); ?>
    </div>

<?php echo $this->Form->end('Salvar'); ?>