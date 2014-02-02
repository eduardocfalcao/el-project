{extends 'usuario/minhacontatemplate.tpl'}



{block name=minhaContaBody}

	<h4>ALTERAR SENHA</h4>

    <form name="formUsuario" id="formUsuario" method="post">

        <div class="lar-03 margem-01">
        
        <input type="hidden" name="postback" value="true" />

        <label for="senhaAtual">Senha Atual:</label>

        <input value="" type="password" name="senhaAtual" id="senhaAtual" maxlength="1000">
        </div>

		<div class="lar-03 margem-01">
        <label for="novaSenha">Nova Senha:</label>

        <input value="" type="password" name="novaSenha" id="novaSenha" />
        </div>

		<div class="lar-03">
        <label for="repetirSenha">Repetir Senha:</label>

        <input value="" type="password" name="repetirSenha" id="repetirSenha" />
		</div>

        <button>Alterar Senha</button>
    </form>


{/block}