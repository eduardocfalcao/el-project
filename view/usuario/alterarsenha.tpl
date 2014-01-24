{extends 'usuario/minhacontatemplate.tpl'}



{block name=minhaContaBody}

    <form name="formUsuario" id="formUsuario" method="post">

        <input type="hidden" name="postback" value="true" />

        <label for="senhaAtual">Senha Atual:</label>

        <input value="" type="password" name="senhaAtual" id="senhaAtual" maxlength="1000">

        <br />

        <label for="novaSenha">Nova Senha:</label>

        <input value="" type="password" name="novaSenha" id="novaSenha" />

        <br />

        <label for="repetirSenha">Repetir Senha:</label>

        <input value="" type="password" name="repetirSenha" id="repetirSenha" />

        <br />

        <button>Alterar Senha</button>
    </form>


{/block}