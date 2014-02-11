<?php $this->extend('/Layouts/minhacontatemplate'); ?>

<?php echo $this->Form->create('Documentos',
						    array(
						    		'type' => 'file',
						    		'url' => array('controller' => 'Instituicao', 'action' => 'documentos'),
								    'inputDefaults' => array
								    (
								        'label' => false,
								        'div' => false
								    ) 
						    	)
						   ); ?>
	<h4>Documentos</h4>		   
						   
	<div class="lar-01">
		<label for="documentoEstatuto"> 
			Cópia do ato constitutivo ou estatuto da instituição em vigor (alterações contratuais serão aceitas apenas quando consolidadas):
		</label><br />

        <div class="lar-07">
			
        	<?php echo $this->Form->file('documentoEstatuto'); ?>
        
        	<?php if(!empty($instituicao["Instituicao"]["documentoEstatuto"])) { ?>
		    	<?php echo $this->Html->link($instituicao["Instituicao"]["documentoEstatuto"], 
		    								 array("controller" => 'Instituicao', "action" => "download", 
		    								 $instituicao["Instituicao"]["documentoEstatuto"])); ?>
		   <?php } ?>
        
        </div>
    </div>
    
   <div class="lar-01">
        <label for="documentoAssembleia"> 
        	Cópia da ata da última assembleia da entidade
        </label><br />

    <div class="lar-07">
		<?php echo $this->Form->file('documentoAssembleia'); ?></div>

		  	<?php if(!empty($instituicao["Instituicao"]["documentoAssembleia"])) { ?>
		    	<?php echo $this->Html->link($instituicao["Instituicao"]["documentoAssembleia"], 
		    								 array("controller" => 'Instituicao', "action" => "download", 
		    								 $instituicao["Instituicao"]["documentoAssembleia"])); ?>
		   <?php } ?>
   </div>

    
    <div class="lar-01">
        <label for="documentoContratoSocial">Cópia do Contrato Social:</label><br />

        <div class="lar-07">
        
	        <?php echo $this->Form->file('documentoContratoSocial'); ?>
	        	
	        <?php if(!empty($instituicao["Instituicao"]["documentoContratoSocial"])) { ?>
	        	<?php echo $this->Html->link($instituicao["Instituicao"]["documentoContratoSocial"], 
	        								 array("controller" => 'Instituicao', "action" => "download", 
	        								 $instituicao["Instituicao"]["documentoContratoSocial"])); ?>
	        <?php } ?>
        </div>
    </div>
    
    <div class="lar-01">
    	<label for="documentoCnpj">Cópia do CNPJ da instituição ou impresso por meio do site da Receita Federal (www.receita.fazenda.gov.br), comprovando sua existência há no mínimo 02 (dois) anos, contado do último dia do prazo de inscrição:</label><br />
        <div class="lar-07">
        
	        <?php echo $this->Form->file('documentoCnpj'); ?>
	        	
	       <?php if(!empty($instituicao["Instituicao"]["documentoCnpj"])) { ?>
	        	<?php echo $this->Html->link($instituicao["Instituicao"]["documentoCnpj"], 
	        								 array("controller" => 'Instituicao', "action" => "download", 
	        								 $instituicao["Instituicao"]["documentoCnpj"])); ?>
	        <?php } ?>
        </div>
    </div>
    
     <div class="lar-01">
    	<label for="documentoComprovanteEndereco">Cópia do comprovante de endereço da instituição (contas de água, luz, telefone):</label><br />
        <div class="lar-07">
        
	        	<?php echo $this->Form->file('documentoComprovanteEndereco'); ?>
	        	
	        <?php if(!empty($instituicao["Instituicao"]["documentoComprovanteEndereco"])) {  
	        	 	echo $this->Html->link($instituicao["Instituicao"]["documentoComprovanteEndereco"], 
	        								 array("controller" => 'Instituicao', "action" => "download", 
	        								 $instituicao["Instituicao"]["documentoComprovanteEndereco"])); 
				}	        								 
	        ?>
        		
        </div>
    </div>
    
     <div class="lar-01">
    	<label for="documentoResponsavelRg">Cópia do RG do responsável legal ou procurador nomeado (neste caso acompanhado de cópia autenticada da procuração ou Carta de Credenciamento) :</label><br />
        <div class="lar-07">
        
	        <?php echo $this->Form->file('documentoResponsavelRg'); ?>
	        	
	       <?php if(!empty($instituicao["Instituicao"]["documentoResponsavelRg"])) {  
	        	 	echo $this->Html->link($instituicao["Instituicao"]["documentoResponsavelRg"], 
	        								 array("controller" => 'Instituicao', "action" => "download", 
	        								 $instituicao["Instituicao"]["documentoResponsavelRg"])); 
				}	        								 
	        ?>
        	
        </div>
    </div>
    
    <div class="lar-01">
    	<label for="documentoResponsavelCpf">Cópia do CPF do responsável legal ou procurador nomeado (neste caso acompanhado de cópia autenticada da procuração ou Carta de Credenciamento) :</label><br />
       <div class="lar-07"> 

	        <?php echo $this->Form->file('documentoResponsavelCpf'); ?>
	        	
	        <?php if(!empty($instituicao["Instituicao"]["documentoResponsavelCpf"])) {  
	        	 	echo $this->Html->link($instituicao["Instituicao"]["documentoResponsavelCpf"], 
	        								 array("controller" => 'Instituicao', "action" => "download", 
	        								 $instituicao["Instituicao"]["documentoResponsavelCpf"])); 
				}	        								 
	        ?>

       		
       </div>
    </div>
    
    <div class="lar-01">
    	<label for="documentoDeclaracao">Declaração, devidamente preenchida e assinada, com o compromisso de envio das certidões e dos documentos necessários para a premiação, caso a instituição seja selecionada, no prazo máximo de 20 (vinte) dias corridos após a divulgação do resultado desta seleção:</label><br />
       	<div class="lar-07"> 
       		<?php echo $this->Form->file('documentoDeclaracao'); ?>
       		 <?php if(!empty($instituicao["Instituicao"]["documentoDeclaracao"])) {  
	        	 	echo $this->Html->link($instituicao["Instituicao"]["documentoDeclaracao"], 
	        								 array("controller" => 'Instituicao', "action" => "download", 
	        								 $instituicao["Instituicao"]["documentoDeclaracao"])); 
				}	        								 
	        ?>
       	</div>
    </div>   
    
<?php echo $this->Form->end("Enviar arquivos"); ?>