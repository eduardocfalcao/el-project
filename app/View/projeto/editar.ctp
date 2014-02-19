<?php $this->extend('/Layouts/minhacontatemplate'); ?>


<div class="windowHelp">
         
        <p>Os campos com asterisco (*) são de preenchimento obrigatório.</p> 
        
        <h4>Ajuda para o preenchimento dos dados do Projeto</h4>
        
        <p>
        &bull; Equipe que integrou o projeto e atribuições :<br/>
        	Coloque o nome daqueles que atuaram diretamente no projeto e seus respectivos cargos.<br/><br/>
            
        &bull; Crinças Envolvidas: <br/>
        	Disponibilize o número de crianças envolvidas no projeto. Ex:<br/>
            3-6 anos: 15 crianças.<br/>
            7-9 anos: 10 crianças. <br/>          	
            9-11 anos: 20 crianças.<br/>
            Total de crianças: 35 crianças.
            <br/><br/>
        
        &bull; Objetivos:<br/>
        	Liste os principais objetivos do projeto. Máximo de 1000 caracteres (sem espaço). <br/><br/>
        
        &bull; Justificativa:<br/>
        	Por que o projeto foi/está sendo realizado? Caracterize o problema, público e local/região de desenvolvimento do projeto. Apresente informações que demonstrem a relevância da ação. Descreva a(s) mudança(s) propostas pelo projeto. Máximo de 3000 caracteres (sem espaço). <br/><br/>
            
        &bull; Metodologia :<br/>
        	Em relação à metodologia do projeto, descreva: as principais concepções que norteiam as ações propostas; os procedimentos adotados, etapas e processos; como se deu a participação das crianças nas tomadas de decisão, na auto-organização, na colocação de demandas e interesses próprios; como se estabeleceu a relação entre adultos e crianças; como foi o envolvimento da família e da comunidade; as características inovadoras. Máximo de 3000 caracteres (sem espaço).<br/><br/>
            
        &bull; Atividades:<br/>
        	Descreva as atividades já realizadas ou em andamento. Máximo de 3000 caracteres (sem espaço).<br/><br/>
            
        &bull; Resultados:<br/>
        	Descreva os resultados obtidos e, no caso dos projetos em andamento, aponte os resultados parciais. Descreva os impactos do projeto, diretos ou indiretos nos diversos aspectos das vidas das crianças.  Máximo de 3000 caracteres (sem espaço).<br/><br/>
            
        &bull; Plano de reutilização do recurso, caso vença o prêmio:<br/>
        	Os recursos são destinados à realização de oficinas com as crianças, capacitações da equipe, adaptações no ambiente físico, compra de materiais etc. Descreva em que atividade o recurso será investido, justifique essa opção e os resultados esperados. Máximo de 3500 caracteres (sem espaço).<br/><br/>
            

<br/><br/>
       </p>
</div>


<div class="box-master">
    <div class="esq">
        <h4>Dados do Projeto</h4>	
        <p style="font-size: 12px;margin: -25px 0 25px 0;">Os campos com asterisco (*) são de preenchimento obrigatório.</p> 
    </div>
    
    <div class="dir">
        <span class="buttonHelp">Central de Ajuda</span>
    </div>
</div>


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
        <label for="cpf">&bull; Equipe que integrou o projeto e atribuições: *</label><br />

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
        <label for="objetivos">&bull; Objetivos: *</label><br />

         <?php echo $this->Form->input('objetivos', array('rows' => '5', 'cols' => '10', "class" => "", "maxlength" => "5000")); ?>
    </div>	
    
      <div class="lar-16 margem-01">
        <label for="justificativa">&bull; Justificativa: *</label><br />

         <?php echo $this->Form->input('justificativa', array('rows' => '5', 'cols' => '10', "class" => "", "maxlength" => "5000")); ?>
    </div>	
    
    <div class="lar-16 margem-01">
        <label for="metodologia">&bull; Metodologia: *</label><br />

         <?php echo $this->Form->input('metodologia', array('rows' => '5', 'cols' => '10', "class" => "", "maxlength" => "5000")); ?>
    </div>	
    
    <div class="lar-16 margem-01">
        <label for="atividades">&bull; Atividades: *</label><br />

         <?php echo $this->Form->input('atividades', array('rows' => '5', 'cols' => '10', "class" => "", "maxlength" => "5000")); ?>
    </div>		
    
    <div class="lar-16 margem-01">
        <label for="resultados">&bull; Resultados: *</label><br />

         <?php echo $this->Form->input('resultados', array('rows' => '5', 'cols' => '10', "class" => "", "maxlength" => "5000")); ?>
    </div>		
    
    <div class="lar-16 margem-01">
        <label for="planoUtilizacaoRecurso">&bull; Plano de reutilização do recurso, caso vença o prêmio: *</label><br />

         <?php echo $this->Form->input('planoUtilizacaoRecurso', array('rows' => '5', 'cols' => '10', "class" => "", "maxlength" => "5000")); ?>
    </div>			
    
    		   
						   
<?php echo $this->Form->end('Salvar');