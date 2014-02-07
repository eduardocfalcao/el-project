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

        <?php echo $this->Form->file('documentoEstatuto'); ?>
    </div>
    
   <div class="lar-01">
        <label for="documentoAssembleia"> 
        	Cópia da ata da última assembleia da entidade
        </label><br />

        <?php echo $this->Form->file('documentoAssembleia'); ?>
   </div>
    
    <div class="lar-01">
        <label for="documentoContratoSocial">Cópia do Contrato Social:</label><br />

        <?php echo $this->Form->file('documentoContratoSocial'); ?>
    </div>
    
    <div class="lar-01">
    	<label for="documentoCnpj">Cópia do CNPJ da instituição ou impresso por meio do site da Receita Federal (www.receita.fazenda.gov.br), comprovando sua existência há no mínimo 02 (dois) anos, contado do último dia do prazo de inscrição:</label><br />
        <?php echo $this->Form->file('documentoCnpj'); ?>
    </div>
    
     <div class="lar-01">
    	<label for="documentoCompovante">Cópia do comprovante de endereço da instituição (contas de água, luz, telefone):</label><br />
        <?php echo $this->Form->file('documentoCompovanteEndereco'); ?>
    </div>
    
     <div class="lar-01">
    	<label for="documentoResponsavelRg">Cópia do RG do responsável legal ou procurador nomeado (neste caso acompanhado de cópia autenticada da procuração ou Carta de Credenciamento) :</label><br />
        <?php echo $this->Form->file('documentoResponsavelRg'); ?>
    </div>
    
    <div class="lar-01">
    	<label for="documentoResponsavelCpf">Cópia do CPF do responsável legal ou procurador nomeado (neste caso acompanhado de cópia autenticada da procuração ou Carta de Credenciamento) :</label><br />
        <?php echo $this->Form->file('documentoResponsavelCpf'); ?>
    </div>
    
    <div class="lar-01">
    	<label for="documentoDeclaracao">Declaração, devidamente preenchida e assinada, com o compromisso de envio das certidões e dos documentos necessários para a premiação, caso a instituição seja selecionada, no prazo máximo de 20 (vinte) dias corridos após a divulgação do resultado desta seleção:</label><br />
        <?php echo $this->Form->file('documentoDeclaracao'); ?>
    </div>   
    
<?php echo $this->Form->end("Enviar arquivos"); ?>