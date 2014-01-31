<div class="box01">

    <h4>Login</h4>

    <form method="post" action="{$url}Usuario/Login">
        <input type="hidden" name="postback" value="true" />

        <label for="login">&bull; Nome de Usu&aacute;rio:</label><br />
        <input type="text" name="login" id="login" />

        <br /><br />

        <label for="senha">&bull; Senha:</label><br />
        <input type="password" name="senha" id="senha"/>

        <br /><br />

        <a href="">Esqueci minha senha</a>

        <button>Acesse sua conta</button>
    </form>
</div>

<div class="line"></div>

<div class="box02">

    <h4>Cadastre-se</h4>

    <form name="formUsuario" id="formUsuario" method="post" action="{$url}Usuario/Cadastro">

        <input type="hidden" name="postback" value="true" />

        <div class="lar-02 margem-01">
            <label for="nome">&bull; Nome da Instituição:</label><br />

            <input type="text" name="nome" id="nome" maxlength="1000" />
        </div>

        <div class="lar-02">
            <label for="login">&bull; CNPJ:</label><br />

            <input name="login" placeholder="00.000.000/0000-00"/>
        </div>
        
        <div class="lar-02 margem-01">
            <label for="email">&bull; E-mail:</label><br />

            <input type="email" name="email" id="email" maxlength="150"/>
        </div>
        

        <div class="lar-02">
            <label for="login">&bull; Usu&aacute;rio:</label><br />

            <input name="login"/>
        </div>

        <div class="lar-02 margem-01">
            <label for="senha">&bull; Senha:</label><br />

            <input type="passoword" name="senha" id="senha"/>
        </div>

        <div class="lar-02">
            <label for="confirmarSenha">&bull; Confirmar Senha:</label><br />

            <input type="passoword" name="confirmarSenha" id="confirmarSenha"/>
        </div>

        <button>Finalizar Cadastro</button>
    </form>

</div>