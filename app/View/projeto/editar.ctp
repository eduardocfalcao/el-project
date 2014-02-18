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
	<h4>Dados do Projeto</h4>	
    
	<div class="lar-07 margem-01">
        <label for="nome">&bull; Nome: *</label><br />

         <?php echo $this->Form->input('nome', array("maxlength" => "1000")); ?>
    </div>

    <div class="lar-07">
        <label for="responsavel">&bull; Responsável: *</label><br />

         <?php echo $this->Form->input('responsavel', array("maxlength" => "1000")); ?>
    </div>
    
    <div class="lar-01">
        <label>&bull; Período de realização do projeto: *</label><br />
		<div class="lar-07 margem-01">
		<label for="dataInicio">Início:</label>
        <?php echo $this->Form->input('periodoInicio', array("class" => "datepicker", "type" => "text")); ?>
        </div>
        <div class="lar-07">
         <label for="dataFim" style="margin-left: 10px;">Fim (previsto, caso projeto esteja em andamento):*</label>
        <?php echo $this->Form->input('periodoFim', array("class" => "datepicker", "type" => "text")); ?>
        </div>
    </div>

    <div class="lar-16 margem-01">
        <label for="cpf">&bull; Equipe que integrou o projeto e atribuições: *<span class="tooltip" onmouseover="tooltip.pop(this, 'Coloque o nome daqueles que atuaram diretamente no projeto e seus respectivos cargos.')">?</span></label><br />

         <?php echo $this->Form->input('equipe', array('rows' => '5', 'cols' => '10', "class" => "", "maxlength" => "2000")); ?>
    </div>

    <div class="lar-03 margem-01">
        <label for="outrasInformacoes">&bull; Município: *</label><br />

       	<?php echo $this->Form->input('municipio', array("maxlength" => "255")); ?>
    </div>
    
    <div class="lar-04">
        <label for="uf">&bull; Estado: *</label><br />

       	<?php echo $this->Form->input('uf', array("maxlength" => "20")); ?>
    </div>
			
	<div class="lar-16 margem-01">
        <label for="criancasEnvolvidas">&bull; Crianças envolvidas: *</label><br />

         <?php echo $this->Form->input('criancasEnvolvidas', array('rows' => '5', 'cols' => '10', "class" => "", "maxlength" => "5000")); ?>
    </div>
    
    <div class="lar-16 margem-01">
        <label for="objetivos">&bull; Objetivos: * <span class="tooltip" onmouseover="tooltip.pop(this, 'Máximo de 1000 caracteres')">?</span></label><br />

         <?php echo $this->Form->input('objetivos', array('rows' => '5', 'cols' => '10', "class" => "", "maxlength" => "5000")); ?>
    </div>	
    
      <div class="lar-16 margem-01">
        <label for="justificativa">&bull; Justificativa: *<span class="tooltip" onmouseover="tooltip.pop(this, 'Máximo de 3000 caracteres')">?</span></label><br />

         <?php echo $this->Form->input('justificativa', array('rows' => '5', 'cols' => '10', "class" => "", "maxlength" => "5000")); ?>
    </div>	
    
    <div class="lar-16 margem-01">
        <label for="metodologia">&bull; Metodologia: *<span class="tooltip" onmouseover="tooltip.pop(this, 'Máximo de 3000 caracteres')">?</span></label><br />

         <?php echo $this->Form->input('metodologia', array('rows' => '5', 'cols' => '10', "class" => "", "maxlength" => "5000")); ?>
    </div>	
    
    <div class="lar-16 margem-01">
        <label for="atividades">&bull; Atividades: *<span class="tooltip" onmouseover="tooltip.pop(this, 'Máximo de 3000 caracteres')">?</span></label><br />

         <?php echo $this->Form->input('atividades', array('rows' => '5', 'cols' => '10', "class" => "", "maxlength" => "5000")); ?>
    </div>		
    
    <div class="lar-16 margem-01">
        <label for="resultados">&bull; Resultados: *<span class="tooltip" onmouseover="tooltip.pop(this, 'Máximo de 3000 caracteres')">?</span></label><br />

         <?php echo $this->Form->input('resultados', array('rows' => '5', 'cols' => '10', "class" => "", "maxlength" => "5000")); ?>
    </div>		
    
    <div class="lar-16 margem-01">
        <label for="planoUtilizacaoRecurso">&bull; Plano de reutilização do recurso, caso vença o prêmio: *<span class="tooltip" onmouseover="tooltip.pop(this, 'Máximo de 3000 caracteres')">?</span></label><br />

         <?php echo $this->Form->input('planoUtilizacaoRecurso', array('rows' => '5', 'cols' => '10', "class" => "", "maxlength" => "5000")); ?>
    </div>			
    
    		   
						   
<?php echo $this->Form->end('Salvar');