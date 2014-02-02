<?php $this->extend('/layouts/minhacontatemplate'); ?>

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

    <label for="senhaAtual">Senha Atual:</label>

   	<?php echo $this->Form->input('senhaAtual', array('type' => 'password')); ?>
    </div>

	<div class="lar-03 margem-01">
    <label for="novaSenha">Nova Senha:</label>

    <?php echo $this->Form->input('senha', array('type' => 'password')); ?>
    </div>

	<div class="lar-03">
    <label for="repetirSenha">Repetir Senha:</label>

    <?php echo $this->Form->input('repetirSenha', array('type' => 'password')); ?>
	</div>

<?php echo $this->Form->end('Alterar Senha'); ?>