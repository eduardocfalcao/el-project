
<div class="container" style="height: 450px;">



<h5 style="margin-top: 30px;">
	Recuperar Senha
</h5>

<p>
	Digite abaixo o seu e-mail.
	Caso esse seja o seu e-mail cadastrado, enviaremos uma senha tempor&aacute;ria.
</p>

<?php echo $this->Form->create('RecuperarSenha',
							    array(
							    		'url' => array('controller' => 'Instituicao', 'action' => 'recuperarsenha'),
									    'inputDefaults' => array
									    (
									        'label' => false,
									        'div' => false
									    ) 
							    	)
							   ); ?>
	<div>						   	
		<div class="lar-02 margem-01">					   
			<label for="email">E-mail:</label>
			<?php echo $this->Form->input("email", array("class" => "validate[required]")); ?>
		</div>
	</div>
<?php echo $this->Form->end("Recuperar Senha"); ?>

</div>