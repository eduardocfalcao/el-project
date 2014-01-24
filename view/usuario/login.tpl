{extends 'index.tpl'}

{block name=body}

<h4>Login</h4>

    <form method="post">
        <input type="hidden" name="postback" value="true" /><br />
        <label for="login">- Nome de Usu&aacute;rio:</label><br />
        <input type="text" name="login" id="login" placeholder="Search here"/>
       
        <br /><br />

        <label for="senha">- Senha:</label><br />
        <input type="password" name="senha" id="senha" />
        
        <br /><br />

        <button>Login</button>
    </form>
{/block}