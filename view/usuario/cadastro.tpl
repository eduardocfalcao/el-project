{extends 'index.tpl'}

{block name=body}

<div class="box02">

<h4>Cadastre-se</h4>

<form name="formUsuario" id="formUsuario" method="post">

    <input type="hidden" name="postback" value="true" />

    <div class="lar-01">
    <label for="nome">&bull; Nome:</label><br />

    <input type="text" name="nome" id="nome" maxlength="1000" />
    </div>
    
    <div class="lar-02 margem-01">
    <label for="dataNascimento">&bull; Sexo:</label><br />

    <div class="radius margem-03"><input type="radio" name="sexo" value="1" checked text=""> Masculino</div>
    <div class="radius margem-04"><input type="radio" name="sexo" value="2"> Feminino</div>
    </div>
    
	<div class="lar-02">
    <label for="dataNascimento">&bull; Data Nascimento:</label><br />

    <input name="dataNascimento" id="dataNascimento"/>
    </div>
    
	<div class="lar-02">
    <label for="cidade">&bull; Cidade:</label><br />

    <input name="cidade" id="cidade" />
    </div>
    
	<div class="lar-05 margem-02">
    <label for="uf">&bull; UF:</label><br />

    <input name="uf" id="uf" maxlength="4"/>
    </div>
    
	<div class="lar-03">
    <label for="pais">&bull; Pa&iacute;s:</label><br />

    <input name="pais" id="pais"/>
    </div>
    
	<div class="lar-02 margem-01">
    <label for="email">&bull; E-mail:</label><br />

    <input type="email" name="email" id="email" maxlength="150" />
    </div>
    
	<div class="lar-02">
    <label for="login">&bull; Nome de Usu&aacute;rio:</label><br />

    <input name="login" class="lar-02"/>
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

{/block}
