{extends 'usuario/minhacontatemplate.tpl'}

{block name=minhaContaBody}

	<h4>ALTERAR DADOS</h4>

    <form name="formUsuario" id="formUsuario" method="post">

        <div class="lar-01"><input type="hidden" name="postback" value="true" />

        <label for="nome">Nome:</label>

        <input value="{$usuario->getNome()}" type="text"   name="nome" id="nome" maxlength="1000">
		</div>
        
        <div class="lar-02 margem-01">
        <label for="sexo">Sexo:</label><br />

        <div class="radius margem-03"><input type="radio" name="sexo" value="1" {if $usuario->getSexo() eq 1}checked{/if}> Masculino</div>
        
        <div class="radius margem-04"><input type="radio" name="sexo" value="2" {if $usuario->getSexo() eq 2}checked{/if}> Feminino</div>
		</div>
        
        <div class="lar-02">
        <label for="dataNascimento">Data Nascimento:</label>
        <input value="{$usuario->getDataNascimento()->format('d/m/Y')}" name="dataNascimento" id="dataNascimento" />
		</div>
        
        <div class="lar-02">
        <label for="cidade">Cidade:</label>

        <input value="{$usuario->getCidade()}" name="cidade" id="cidade" />
		</div>
        
        <div class="lar-05 margem-02">
        <label for="uf">UF:</label>

        <input value="{$usuario->getuf()}" name="uf" id="uf" maxlength="4" />
		</div>
        
        <div class="lar-03">
        <label for="pais">Pa&iacute;s:</label>

        <input value="{$usuario->getPais()}" name="pais" id="pais" />
        </div>

        <button class="botao01">Atualizar</button>
    </form>


{/block}