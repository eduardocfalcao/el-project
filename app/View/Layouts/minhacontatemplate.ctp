<div class="box03">
<h4>MINHA CONTA</h4>

    <div class="menuMinhaConta">
        <ul>
            <li>
            	<?php echo $this->Html->link('Minha inscrição', array('controller' => 'Instituicao','action' => 'detalhes')); ?>
            </li>
            <li>
            	<?php echo $this->Html->link('Alterar senha', array('controller' => 'Instituicao','action' => 'alterarsenha')); ?>
            </li>
            <li class="sair">
           		<?php echo $this->Html->link('Sair', array('controller' => 'Instituicao','action' => 'Logout')); ?>
            </li>
        </ul>
        
    </div>

</div>
<div class="line"></div>
   
<div class="box04">
	<?php echo $this->fetch('content'); ?>
</div>
