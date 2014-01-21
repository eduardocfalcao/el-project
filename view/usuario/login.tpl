{extends 'index.tpl'}

{block name=body}

    <form method="post">
        <input type="hidden" name="postback" value="true" />
        <label for="login">Usu&aacute;rio:</label>
        <input type="text" name="login" id="login" />

        <br />

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" />

        <button>Login</button>
    </form>
{/block}