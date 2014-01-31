{extends 'usuario/minhacontatemplate.tpl'}

{block name=minhaContaBody}

	<h4>ALTERAR DADOS</h4>

    <form name="formUsuario" id="formUsuario" method="post">

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

        <button class="botao01">Atualizar</button>
    </form>


{/block}