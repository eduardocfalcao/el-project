{block name=body}

<form name="formUsuario" id="formUsuario" method="post">

    <input type="hidden" name="postback" value="true" />

    <label for="nome">Nome:</label>

    <input type="text" name="nome" id="nome" maxlength="1000"   />

    <br />

    <label for="email">E-mail:</label>

    <input type="email" name="email" id="email" maxlength="150"/>

    <br />

    <label for="dataNascimento">Data Nascimento:</label>

    <input name="dataNascimento" id="dataNascimento" />

    <br />

    <label for="dataNascimento">sexo:</label>

    <input type="radio" name="sexo" value="1" checked text=""> Masculino
    <br />
    <input type="radio" name="sexo" value="2"> Feminino
    <br />

    <label for="cidade">Cidade:</label>

    <input name="cidade" id="cidade" />
    <br/>

    <label for="uf">UF:</label>

    <input name="uf" id="uf" maxlength="4" />
    <br />

    <label for="pais">Pa&iacute;s:</label>

    <input name="pais" id="pais" />
    <br/>

    <label for="login">Nome de Usu&aacute;rio:</label>

    <input name="login" />

    <br />

    <label for="senha">Senha:</label>

    <input type="passoword" name="senha" id="senha" />

    <br />

    <label for="confirmarSenha">Confirmar Senha:</label>

    <input type="passoword" name="confirmarSenha" id="confirmarSenha" />

    <button>Cadastrar</button>
</form>


{/block}
