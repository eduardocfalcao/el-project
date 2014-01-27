{extends 'usuario/minhacontatemplate.tpl'}

{block name=minhaContaBody}

    <h4>Dados da Intui&ccedil;&atilde;o</h4>

    <form name="formInstuicao" id="formInstuicao" method="post">

        <input type="hidden" name="postback" value="true" />

        <div class="lar-01">
            <label for="nome">&bull; Nome da Institui&ccedil;&atilde;o</label><br />

            <input type="text" name="nomeInstituicao" id="nomeInstituicao" maxlength="1000" />
        </div>

        <div class="lar-02 margem-01">
            <label for="cnpj">&bull; CNPJ</label><br />

            <input name="cnpj" id="cnpj">
        </div>

        <div class="lar-02">
            <label for="email">&bull; E-mail:</label><br />

            <input name="email" id="email"/>
        </div>

        <div class="lar-02">
            <label for="telefone">&bull; Telefone:</label><br />

            <input name="telefone" id="telefone" />
        </div>

        <div class="lar-02">
            <label for="telefoneOpcional"> Telefone (2):</label><br />

            <input name="telefoneOpcional" id="telefoneOpcional" />
        </div>

        <div class="lar-02">
            <label for="site">Site</label><br />

            <input name="site" id="site"/>
        </div>

        <div class="lar-02 margem-01">
            <label for="facebook">Facebook:</label><br />

            <input name="facebook" id="facebook" />
        </div>

        <div class="lar-02">
            <label for="cidade">&bull; Cidade:</label><br />

            <input name="cidade" class="lar-02" />
        </div>

        <div class="lar-05 margem-02">
            <label for="uf">&bull; UF:</label><br />

            <input name="uf" id="uf" maxlength="4" />
        </div>

        <div class="lar-03">
            <label for="pais">&bull; Pa&iacute;s:</label><br />

            <input name="pais" id="pais"/>
        </div>

        <div class="lar-02">
            <label for="endereco">&bull; Endere&ccedil;o:</label><br />

            <input name="endereco" id="endereco" />
        </div>

        <div class="lar-02">
            <label for="cep">&bull; CEP</label><br />

            <input name="cep" id="cep" />
        </div>

        <div class="lar-02">
            <label for="outrasInformacoes">Outras informa&ccedil;&otilde;es:</label><br />

            <textarea name="outrasInformacoes" id="outrasInformacoes">
            </textarea>
        </div>


        <button>Salvar</button>
    </form>

{/block}
