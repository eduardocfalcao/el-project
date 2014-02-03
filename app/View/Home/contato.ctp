<?php echo $this->assign('background',"bg-contato"); ?>


<div class="container" style="overflow: hidden;margin-bottom: 40px;">
<h4>Fale Conosco</h4>

<div class="box05">

<p>In id lacinia nisi. Quisque sagittis blandit purus sit amet luctus. Suspendisse id viverra lectus. Sed sit amet lacus ac libero fringilla faucibus vitae a leo. Suspendisse dictum turpis sit amet felis tempor, eget commodo felis iaculis. Phasellus interdum congue libero sit amet  sed.
</p>

</div>

<div class="box06">

<h3 style="text-align: center; font-weight: normal;">Contacte-nos através do nosso formulário ou através do e-mail abaixo:</h3>
<br/>
<h3 style="text-align: center;margin-top:-20px;">participaçãoprojetosinfantil@premio.com</h3>

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


</div>