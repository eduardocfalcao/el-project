<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('style');
		echo $this->Html->css('style-acordion');
		
		echo $this->Html->script('jquery-1.11.0.min');
		echo $this->Html->script('jquery.accordion');
		echo $this->Html->script('jquery.easing.1.3');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="container">
  
        <div id="header">
            <div class="arealogin">
                <div class="login">
                    <ul>
                        <?php if(isset($usuario) && $usuario != null){ ?>
                            <li>Bem vindo <strong><?php echo $usuario['login']; ?></strong> <strong>|</strong></li>
                            <li> <?php echo $this->Html->link('Minha Conta', array('controller' => 'Instituicao','action' => 'minhaconta')); ?></li>
                            <li><strong>|</strong></li>
                            <li><?php echo $this->Html->link('Sair', array('controller' => 'Instituicao','action' => 'Logout')); ?>
                        <?php } else { ?>
                        	<li><?php echo $this->Html->link('Cadastre-se', array('controller' => 'Instituicao','action' => 'Cadastro')); ?></li>
                            <li><strong>|</strong> </li>

                            <li><?php echo $this->Html->link('Login', array('controller' => 'Instituicao','action' => 'Login')); ?></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="container">

            <div id="menu">
                <ul>
                    <li><?php echo $this->Html->link('Inicio', array('controller' => 'Pages','action' => 'Home')); ?></li>
                    <li><?php echo $this->Html->link('Prêmio', array('controller' => 'Home','action' => 'Premio')); ?></li>
                    <li><?php echo $this->Html->link('Parceiros', array('controller' => 'Home','action' => 'Parceiros')); ?></li>
                    <li><?php echo $this->Html->link('Edital', array('controller' => 'Home','action' => 'Edital')); ?></li>
                    <li><?php echo $this->Html->link('Participação', array('controller' => 'Home','action' => 'Participacao')); ?></li>
                    <li><?php echo $this->Html->link('Como se Inscrever', array('controller' => 'Home','action' => 'Comoseinscrever')); ?></li>
                    <li><?php echo $this->Html->link('Contato', array('controller' => 'Home','action' => 'Contato')); ?></li>
                </ul>
            </div>

        </div>
    </div>
    
	<div class="container over">
		<div id="body">
		
			<?php echo $this->Session->flash(); ?>
			
			<?php echo $this->fetch('content'); ?>
            
		</div>
	</div>
    
    <div class="footer">

	</div>
</body>
</html>