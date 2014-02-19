<?php $this->extend('/Layouts/minhacontatemplate'); ?>


<div class="windowHelp">
         
        <p>Os campos com asterisco (*) são de preenchimento obrigatório.</p> 
        
        <h4>Ajuda para o preenchimento dos dados do Responsável pela Instituição</h4>
        
        <p>
        &bull; Outras informações:<br/>
        	Coloque o que for necessário.<br/><br/>
 
       </p>
</div>


<div class="box-master">
    <div class="esq">
        	<h4>Responsável pela Instituição</h4>
        <p style="font-size: 12px;margin: -25px 0 25px 0;">Os campos com asterisco (*) são de preenchimento obrigatório.</p> 
    </div>
    
    <div class="dir">
        <span class="buttonHelp">Central de Ajuda</span>
    </div>
</div>




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
        <label for="nome">&bull; Nome: *</label><br />

         <?php echo $this->Form->input('nome', array("class" => "validate[required]", "maxlength" => "1000")); ?>
    </div>

    <div class="lar-07">
        <label for="cargo">&bull; Cargo: *</label><br />

         <?php echo $this->Form->input('cargo', array("class" => "validate[required]", "maxlength" => "1000")); ?>
    </div>

    <div class="lar-07 margem-01">
        <label for="cpf">&bull; CPF: *</label><br />

         <?php echo $this->Form->input('cpf', array("class" => "field-cpf validate[required]")); ?>
    </div>

    <div class="lar-07">
        <label for="rg">&bull; RG: *</label><br />

        <?php echo $this->Form->input('rg', array("class" => "field-rg validate[required]")); ?>
    </div>

    <div class="lar-16">
        <label for="outrasInformacoes">&bull; Outras informa&ccedil;&otilde;es:</label><br />

       	<?php echo $this->Form->input('outrasInformacoes',array('rows' => 5, 'cols' =>10, "maxlength" => "5000")); ?>
    </div>

<?php 
	echo $this->Form->end('Salvar');
?>