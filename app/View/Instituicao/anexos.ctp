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
	<h4>Anexos</h4>	
    
    <h5 style="margin-top: -25px;color: #444; font-weight: normal;">Registros do Projeto: Fotos, links, vídeo, matérias na imprensa etc:</h5>  
    <br/> 
						   
	<div class="lar-01">
		<label for="anexo1">&bull; Anexo 1:</label>
        <?php echo $this->Form->file('anexo1'); ?>
       <?php if(!empty($instituicao["Instituicao"]["anexo1"])) {  
        	 	echo $this->Html->link($instituicao["Instituicao"]["anexo1"], 
        								 array("controller" => 'Instituicao', "action" => "download", 
        								 $instituicao["Instituicao"]["anexo1"])); 
			}	        								 
        ?>
    </div>
    
   <div class="lar-01">
        <label for="nome">&bull; Anexo 2:</label>

        <?php echo $this->Form->file('anexo2'); ?>
        
         <?php if(!empty($instituicao["Instituicao"]["anexo2"])) {  
        	 	echo $this->Html->link($instituicao["Instituicao"]["anexo2"], 
        								 array("controller" => 'Instituicao', "action" => "download", 
        								 $instituicao["Instituicao"]["anexo2"])); 
			}	        								 
        ?>
   </div>
    
    <div class="lar-01">
        <label for="nome"></label>&bull; Anexo 3:</label>

        <?php echo $this->Form->file('anexo3'); ?> 
        
         <?php if(!empty($instituicao["Instituicao"]["anexo3"])) {  
        	 	echo $this->Html->link($instituicao["Instituicao"]["anexo3"], 
        								 array("controller" => 'Instituicao', "action" => "download", 
        								 $instituicao["Instituicao"]["anexo3"])); 
			}	        								 
        ?>
    </div>
    
    <div class="lar-01">
    	<label>&bull; Anexo 4:</label>
        <?php echo $this->Form->file('anexo4'); ?> 
        
         <?php if(!empty($instituicao["Instituicao"]["anexo4"])) {  
        	 	echo $this->Html->link($instituicao["Instituicao"]["anexo4"], 
        								 array("controller" => 'Instituicao', "action" => "download", 
        								 $instituicao["Instituicao"]["anexo4"])); 
			}	        								 
        ?>
    </div>
    
    
<?php echo $this->Form->end("Enviar arquivos"); ?>
