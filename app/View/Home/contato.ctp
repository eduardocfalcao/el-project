


<div class="container" style="overflow: hidden;margin-bottom: 40px;">

	<div class="box11">
		<h4>Contato</h4>

		<?php echo $this->Form->create('Contato',
								    array(
								    		'url' => array('controller' => 'Home', 'action' => 'contato'),
										    'inputDefaults' => array
										    (
										        'label' => false,
										        'div' => false
										    ) 
								    	)
								   ); ?>

		<ul>     
			<div class="lar-17 margem-02">                 
			    <li>
			        <label for="nome">• Nome</label>
			        <?php echo $this->Form->input('nome', array("class" => "validate[required]", "maxlength" => "200")); ?>
			    </li>
			</div>	

			<div class="lar-17"> 
			    <li>
			        <label for="nomeInstituicao">• Nome da Instítuição</label>
			        <?php echo $this->Form->input('nomeInstituicao', array("class" => "validate[required]", "maxlength" => "500")); ?>
			    </li>
			</div>

			<div class="lar-17 margem-02"> 
			    <li>
			        <label for="email">• Email</label>
			        <?php echo $this->Form->input('email', array("class" => "validate[required]", "maxlength" => "500")); ?>
			    </li>
			</div>
			<div class="lar-17"> 
			    <li>
			        <label for="assunto">• Assunto</label>
			        <?php echo $this->Form->input('assunto', array("class" => "validate[required]", "maxlength" => "1000")); ?>
			    </li>
			</div>
			<div class="lar-18"> 
			    <li>
			        <label for="mensagem">• Mensagem</label>
			        <?php echo $this->Form->input('mensagem', array('rows' => 5, 'cols' =>10,
			        							  "class" => "validate[required]", "maxlength" => "5000")); ?>
			    </li>
			</div>
		</ul>
		   
		<?php 
			echo $this->Form->end('Salvar'); 
		?>

	</div>

	<div class="box12">

		<?php echo $this->Html->image('bg-inscrever.png', array('style' => 'display: block;margin: 0 auto;')); ?>


		<h3 style="text-align: center; font-weight: normal;">Entre em contato por meio do formulário ao lado ou do e-mail abaixo:</h3>
		<br/>
		<h3 style="text-align: center;margin-top:-20px;font-size: 22px;">premioparticipacaoinfantil@gmail.com</h3>

	</div>
</div>


















































<!---

<div class="container" style="overflow: hidden;margin-bottom: 40px;">
<h4>Fale Conosco</h4>

<div class="box05">

<h3 style="text-align: center; font-weight: normal;">Contacte-nos através do nosso formulário ou através do e-mail abaixo:</h3>
<br/>
<h3 style="text-align: center;margin-top:-20px;">participaçãoprojetosinfantil@premio.com</h3>

</div>

<div class="box06">



</div>
</div>


<div class="container">

<h4>Contato</h4>

<form action="enviar_contato.php" method="post">

<ul>     
<div class="lar-15 margem-02">                 
    <li>
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" />
    </li>
</div>	

<div class="lar-15"> 
    <li>
        <label for="instituicao">Nome da Instítuição</label>
        <input type="text" name="instituicao" id="instituicao" />
    </li>
</div>

<div class="lar-15 margem-02"> 
    <li>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" />
    </li>
</div>
<div class="lar-15"> 
    <li>
        <label for="subject">Assunto</label>
        <input type="text" name="subject" id="subject" />
    </li>
</div>
<div class="lar-00"> 
    <li>
        <label for="message">Mensagem</label>
        <textarea name="message" id="message" rows="30" cols="30" class="width-01"></textarea>
    </li>
</div>
<div class="lar-01">
    <li>
        <button type="submit" id="send_message" value="Enviar">Enviar Mensagem</button>
    </li>
</div>
</ul>

</form>


</div> -->