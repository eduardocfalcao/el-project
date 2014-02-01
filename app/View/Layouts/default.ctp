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
                            <li>Bem vindo <strong>{$userInfo.nome}</strong> <strong>|</strong></li>
                            <li> <?php echo $this->Html->link('Minha Conta', array('controller' => 'Usuario','action' => 'MinhaConta')); ?>
                            <strong>|</strong></li>
                            <li><?php echo $this->Html->link('Sair', array('controller' => 'Usuario','action' => 'Logout')); ?>
                        <?php } else { ?>
                        	<li><?php echo $this->Html->link('Cadastre-se', array('controller' => 'Usuario','action' => 'Cadastro')); ?><strong>|</strong> </li>

                            <li><?php echo $this->Html->link('Login', array('controller' => 'Usuario','action' => 'Login')); ?></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="container">

            <div id="menu">
                <ul>
                    <li><?php echo $this->Html->link('Inicio', array('controller' => 'Home','action' => 'Index')); ?></li>
                    <li><?php echo $this->Html->link('Prêmio', array('controller' => 'Home','action' => 'Premio')); ?></li>
                    <li><?php echo $this->Html->link('Parceiros', array('controller' => 'Home','action' => 'Parceiros')); ?></li>
                    <li><?php echo $this->Html->link('Edital', array('controller' => 'Home','action' => 'Edital')); ?></li>
                    <li><?php echo $this->Html->link('Particiacao', array('controller' => 'Home','action' => 'Participacao')); ?></li>
                    <li><?php echo $this->Html->link('Como se Inscrever', array('controller' => 'Home','action' => 'ComoSeInscrever')); ?></li>
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