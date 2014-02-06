<?php $this->extend('/Layouts/minhacontatemplate'); ?>


<?php echo $this->Form->create('Anexo',
						    array(
						    		'type' => 'file',
						    		'url' => array('controller' => 'Instituicao', 'action' => 'anexos'),
								    'inputDefaults' => array
								    (
								        'label' => false,
								        'div' => false
								    ) 
						    	)
						   ); ?>
						   
						   
	<div class="lar-01">
		<label for="anexo1"> Anexo 1:</label><br />

        <?php echo $this->Form->file('anexo1'); ?>
    </div>
    
   <div class="lar-01">
        <label for="nome"> Anexo 2:</label><br />

        <?php echo $this->Form->file('anexo2'); ?>
   </div>
    
    <div class="lar-01">
        <label for="nome"></label>Anexo 3:</label><br />

        <?php echo $this->Form->file('anexo3'); ?>
    </div>
    
    <div class="lar-01">
    	<label>Anexo 4:</label><br />
        <?php echo $this->Form->file('anexo4'); ?>
    </div>
    
    
<?php echo $this->Form->end("Enviar arquivos"); ?>
