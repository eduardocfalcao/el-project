<?php $this->extend('/Layouts/minhacontatemplate'); ?>

<h4>ALTERAR SENHA</h4>

<?php echo $this->Form->create('Instituicao',
							    array(
							    		'url' => array('controller' => 'Instituicao', 'action' => 'alterarsenha'),
									    'inputDefaults' => array
									    (
									        'label' => false,
									        'div' => false
									    ) 
							    	)
							   ); ?>
    <div class="lar-03 margem-01">

    <label for="senhaAtual">&bull; Senha Atual:</label>

   	<?php echo $this->Form->input('senhaAtual', array('type' => 'password', "class" => "validate[required]")); ?>
    </div>

	<div class="lar-03 margem-01">
    <label for="novaSenha">&bull; Nova Senha:</label>

    <?php echo $this->Form->input('senha', array('type' => 'password', "class" => "validate[required]", "id" => "senha")); ?>
    </div>

	<div class="lar-03">
    <label for="repetirSenha">&bull; Repetir Senha:</label>

    <?php echo $this->Form->input('repetirSenha', array('type' => 'password', "class" => "validate[required,equals[senha]]")); ?>
	</div>

<?php echo $this->Form->end('Alterar Senha'); ?>