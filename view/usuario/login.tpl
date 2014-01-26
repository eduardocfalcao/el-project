{extends 'index.tpl'}

{block name=body}

<div class="box01">

<h4>Login</h4>

    <form method="post">
        <input type="hidden" name="postback" value="true" /><br />
        <label for="login">&bull; Nome de Usu&aacute;rio:</label><br />
        <input type="text" name="login" id="login" />
       
        <br /><br />

        <label for="senha">&bull; Senha:</label><br />
        <input type="password" name="senha" id="senha" />
        
        <br /><br />

		<a href="">Esqueci minha senha</a>

        <button>Acesse sua conta</button>
    </form>
</div>   

<div class="line"></div> 

{/block}