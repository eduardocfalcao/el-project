<?php $this->extend('/Layouts/minhacontatemplate'); ?>


<?php echo $this->Form->create('Projeto',
						    array(
						    		'url' => array('controller' => 'Projeto', 'action' => 'editar'),
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
        <label for="responsavel">&bull; Responsável:</label><br />

         <?php echo $this->Form->input('responsavel'); ?>
    </div>

    <div class="lar-16 margem-01">
        <label for="cpf">&bull; Equipe que integrou o projeto e atribuições:</label><br />

         <?php echo $this->Form->input('equipe', array('rows' => '5', 'cols' => '10')); ?>
    </div>

    <div class="lar-02">
        <label>&bull; Período de realização do projeto:</label><br />
		
		<label for="dataInicio">&bull; Início:</label><br />
        <?php echo $this->Form->input('periodoInicio'); ?>
        
         <label for="dataFim">&bull; Fim:</label><br />
        <?php echo $this->Form->input('periodoFim'); ?>
    </div>

    <div class="lar-02">
        <label for="outrasInformacoes">Município:</label><br />

       	<?php echo $this->Form->input('municipio'); ?>
    </div>
    
    <div class="lar-13 margem-01">
        <label for="uf">Estado:</label><br />

       	<?php echo $this->Form->input('uf'); ?>
    </div>
			
	<div class="lar-16 margem-01">
        <label for="criancasEnvolvidas">&bull;Crianças envolvidas:</label><br />

         <?php echo $this->Form->input('criancasEnvolvidas', array('rows' => '5', 'cols' => '10')); ?>
    </div>
    
    <div class="lar-16 margem-01">
        <label for="objetivos">&bull;Objetivos:</label><br />

         <?php echo $this->Form->input('objetivos', array('rows' => '5', 'cols' => '10')); ?>
    </div>	
    
      <div class="lar-16 margem-01">
        <label for="justificativa">&bull;Justificativa:</label><br />

         <?php echo $this->Form->input('justificativa', array('rows' => '5', 'cols' => '10')); ?>
    </div>	
    
    <div class="lar-16 margem-01">
        <label for="metodologia">&bull;Metodologia:</label><br />

         <?php echo $this->Form->input('metodologia', array('rows' => '5', 'cols' => '10')); ?>
    </div>	
    
    <div class="lar-16 margem-01">
        <label for="atividades">&bull;Atividades:</label><br />

         <?php echo $this->Form->input('atividades', array('rows' => '5', 'cols' => '10')); ?>
    </div>		
    
    <div class="lar-16 margem-01">
        <label for="resultados">&bull;Resultados:</label><br />

         <?php echo $this->Form->input('resultados', array('rows' => '5', 'cols' => '10')); ?>
    </div>		
    
    <div class="lar-16 margem-01">
        <label for="planoUtilizacaoRecurso">&bull;Plano de reutilização do recurso:</label><br />

         <?php echo $this->Form->input('planoUtilizacaoRecurso', array('rows' => '5', 'cols' => '10')); ?>
    </div>			
    
    		   
						   
<?php echo $this->Form->end('Salvar');