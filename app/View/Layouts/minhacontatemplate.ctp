<div class="box03">
<h4>MINHA CONTA</h4>

    <div class="menuMinhaConta">
        <ul>
            <li>
            	<?php echo $this->Html->link('Minha inscrição', array('controller' => 'Instituicao','action' => 'minhaconta')); ?>
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
   
<div class="box04 line01">

<h4>Formulário de Inscrição</h4>


	<div class="inscricao">
		
		<?php if($finalizado == false){ ?>
			<ul class="menuativo">
				<li>
	            	<?php echo $this->Html->link('‣ Instituição', array('controller' => 'Instituicao','action' => 'detalhes')); ?>
	            </li>
	            <li>
	            	<?php echo $this->Html->link('‣ Responsável Legal', array('controller' => 'Responsavel','action' => 'editar')); ?>
	            </li>
	            <li>
	           		<?php echo $this->Html->link('‣ Projeto', array('controller' => 'Projeto','action' => 'Editar')); ?>
	            </li>
	             <li>
	           		<?php echo $this->Html->link('‣ Documentos', array('controller' => 'Instituicao','action' => 'documentos')); ?>
	            </li>
	             <li class="last">
	           		<?php echo $this->Html->link('‣ Anexos', array('controller' => 'Instituicao','action' => 'anexos')); ?>
	            </li>
   			</ul>
   		<?php } else { ?>
   			<ul class="menuinativo">
	   			<li>
	            	‣ Instituição
	            </li>
	            <li>
	            	‣ Responsável Legal
	            </li>
	            <li>
	            	‣ Projeto
	            </li>
	             <li>
	             	‣ Documentos
	            </li>
	             <li>
	             	‣ Anexos
	            </li>
	        </ul>
   		<?php } ?>
	</div>
	<div>
		<?php echo $this->fetch('content'); ?>	
	</div>
</div>
