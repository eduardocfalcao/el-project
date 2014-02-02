<div class="box01">

    <h4>Login</h4>

<?php echo $this->Form->create('Instituicao',
							    array(
							    		'url' => array('controller' => 'Instituicao', 'action' => 'login'),
									    'inputDefaults' => array
									    (
									        'label' => false,
									        'div' => false
									    ) 
							    	)
							   ); ?>

        <label for="login">&bull; Nome de Usu&aacute;rio:</label><br />
        <?php echo $this->Form->input('login'); ?>

        <br /><br />

        <label for="senha">&bull; Senha:</label><br />
        <?php echo $this->Form->input('senha', array('type' => 'password')); ?>

        <br /><br />

        <a href="">Esqueci minha senha</a>

        <?php echo $this->Form->end('Entrar'); ?>
</div>
<div class="line"></div>

<div class="box02">

    <h4>Cadastre-se</h4>

    <?php echo $this->Form->create('Instituicao',
								    array(
								    		'url' => array('controller' => 'Instituicao', 'action' => 'Cadastro'),
										    'inputDefaults' => array
										    (
										        'label' => false,
										        'div' => false
										    ) 
								    	)
								   ); ?>


        <div class="lar-02 margem-01">
            <label for="nome">&bull; Nome da Instituição:</label><br />

            <?php echo $this->Form->input('nome'); ?>
        </div>

        <div class="lar-02">
            <label for="cnpj">&bull; CNPJ:</label><br />

            <?php echo $this->Form->input('cnpj'); ?>
        </div>
        
        <div class="lar-02 margem-01">
            <label for="email">&bull; E-mail:</label><br />

           <?php echo $this->Form->input('email'); ?>
        </div>
        

        <div class="lar-02">
            <label for="login">&bull; Usu&aacute;rio:</label><br />

            <?php echo $this->Form->input('login'); ?>
        </div>

        <div class="lar-02 margem-01">
            <label for="senha">&bull; Senha:</label><br />

            <?php echo $this->Form->input('senha', array('type' => 'password')); ?>
        </div>

        <div class="lar-02">
            <label for="confirmarSenha">&bull; Confirmar Senha:</label><br />

            <?php echo $this->Form->input('confirmarSenha', array('type' => 'password')); ?>
        </div>

       <?php echo $this->Form->end('Finalizar Cadastro'); ?>

</div>