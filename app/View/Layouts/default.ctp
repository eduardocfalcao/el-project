<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Prêmio
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('style');
		echo $this->Html->css('style-acordion');
		echo $this->Html->css('validationEngine.jquery');
		echo $this->Html->css('zebra_datepicker');
		echo $this->Html->css('jquery-ui');
		echo $this->Html->css('tooltip');
		
		echo $this->Html->script('jquery-1.11.0.min');
		echo $this->Html->script('jquery-ui.min');
		echo $this->Html->script('i18n/jquery.ui.datepicker-pt-BR.min');
		
		echo $this->Html->script('jquery.accordion');
		echo $this->Html->script('jquery.easing.1.3');
		echo $this->Html->script('jquery.validationEngine-pt_BR');
		echo $this->Html->script('jquery.validationEngine');
		echo $this->Html->script('jquery.maskedinput.min');
		echo $this->Html->script('zebra_datepicker');
		echo $this->Html->script('main');
		echo $this->Html->script('masks');
		echo $this->Html->script('tooltip');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body class="<?php echo $this->fetch('background'); ?>">
<div class="container-master">
	<div class="container">
  
        <div id="header">
            <div class="arealogin">
                <div class="login">
                    <ul>
                        <?php if(isset($usuario) && $usuario != null){ ?>
                            <li>Bem vindo <strong><?php echo $usuario['login']; ?></strong> <strong>|</strong></li>
                            <li> <?php echo $this->Html->link('Minha Conta', array('controller' => 'Instituicao','action' => 'minhaconta')); ?></li>
                            <li><strong>|</strong></li>
                            <li><?php echo $this->Html->link('Sair', array('controller' => 'Instituicao','action' => 'Logout')); ?></li>
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
                    <li class="menu-item01"><?php echo $this->Html->link('Início', array('controller' => 'Pages','action' => 'home')); ?></li>
                    <li class="menu-item02"><?php echo $this->Html->link('Prêmio', array('controller' => 'Home','action' => 'premio')); ?></li>
                    <li class="menu-item03"><?php echo $this->Html->link('Parceiros', array('controller' => 'Home','action' => 'parceiros')); ?></li>
                    <li class="menu-item04"><?php echo $this->Html->link('Edital', array('controller' => 'Home','action' => 'edital')); ?></li>
                    <li class="menu-item05"><?php echo $this->Html->link('Considerações', array('controller' => 'Home','action' => 'consideracoes')); ?></li>
                    <li class="menu-item06"><?php echo $this->Html->link('Inscrição', array('controller' => 'Home','action' => 'inscricao')); ?></li>
                    <li class="menu-item07"><?php echo $this->Html->link('Contato', array('controller' => 'Home','action' => 'contato')); ?></li>
                </ul>
            </div>

        </div>
    </div>
</div>
    
	<div class="container over">
		<div id="body">
		
			<?php echo $this->Session->flash(); ?>
			
			<?php echo $this->fetch('content'); ?>
            
		</div>
	</div>
    
    <div class="footer <?php echo $this->fetch('footer'); ?>">

	</div>
</body>
</html>