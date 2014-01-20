{block name=body}

    <form name="formUsuario" id="formUsuario" method="post">

        <input type="hidden" name="postback" value="true" />

        <label for="nome">Nome:</label>

        <input value="{$usuario->getNome()}" type="text"   name="nome" id="nome" maxlength="1000">

        <br />

        <label for="email">E-mail:</label>

        <input value="{$usuario->getEmail()}" type="email" name="email" id="email" maxlength="150" />

        <br />

        <label for="dataNascimento">Data Nascimento:</label>
        <input value="{$usuario->getDataNascimento()->format('d/m/Y')}" name="dataNascimento" id="dataNascimento" />

        <br />

        <label for="sexo">Sexo:</label>

        <input type="radio" name="sexo" value="1" {if $usuario->getSexo() eq 1}checked{/if}> Masculino
        <br />
        <input type="radio" name="sexo" value="2" {if $usuario->getSexo() eq 2}checked{/if}> Feminino
        <br />

        <label for="cidade">Cidade:</label>

        <input value="{$usuario->getCidade()}" name="cidade" id="cidade" />
        <br/>

        <label for="uf">UF:</label>

        <input value="{$usuario->getuf()}" name="uf" id="uf" maxlength="4" />
        <br />

        <label for="pais">Pa&iacute;s:</label>

        <input value="{$usuario->getPais()}" name="pais" id="pais" />
        <br/>

        <button>Atualizar</button>
    </form>


{/block}