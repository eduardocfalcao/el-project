{extends 'usuario/minhacontatemplate.tpl'}

{block name=minhaContaBody}

    <h4>Dados da Intui&ccedil;&atilde;o</h4>

    <form name="formInstuicao" id="formInstuicao" method="post">

        <input type="hidden" name="postback" value="true" />

        <div class="lar-01">
            <label for="nomeInstituicao">&bull; Nome da Institui&ccedil;&atilde;o</label><br />

            <input type="text" name="nomeInstituicao" id="nomeInstituicao" maxlength="1000" value="{$instituicao->getNome()}" />
        </div>

        <div class="lar-07 margem-01">
            <label for="cnpj">&bull; CNPJ</label><br />

            <input name="cnpj" id="cnpj" value="{$instituicao->getCnpj()}">
        </div>

        <div class="lar-07">
            <label for="email">&bull; E-mail:</label><br />

            <input name="email" id="email" value="{$instituicao->getEmail()}"/>
        </div>

        <div class="lar-07 margem-01">
            <label for="telefone">&bull; Telefone:</label><br />

            <input name="telefone" id="telefone" value="{$instituicao->getTelefone()}" />
        </div>

        <div class="lar-07">
            <label for="telefoneOpcional"> Telefone (2):</label><br />

            <input name="telefoneOpcional" id="telefoneOpcional" value="{$instituicao->getTelefoneAlternativo()}" />
        </div>

        <div class="lar-07 margem-01">
            <label for="site">Site</label><br />

            <input name="site" id="site" value="{$instituicao->getSite()}"/>
        </div>

        <div class="lar-07">
            <label for="facebook">Facebook:</label><br />

            <input name="facebook" id="facebook" value="{$instituicao->getFacebook()}" />
        </div>

        <div class="lar-10 margem-01">
            <label for="cidade">&bull; Cidade:</label><br />

            <input name="cidade" value="{$instituicao->getCidade()}" />
        </div>

        <div class="lar-13 margem-01">
            <label for="uf">&bull; UF:</label><br />

            <input name="uf" id="uf" maxlength="4" value="{$instituicao->getUf()}"/>
        </div>

        <div class="lar-12 margem-01">
            <label for="pais">&bull; Pa&iacute;s:</label><br />

            <input name="pais" id="pais" value="{$instituicao->getPais()}"/>
        </div>

        <div class="lar-12 margem-01">
        
             <label for="cep">&bull; CEP</label><br />
    
             <input name="cep" id="cep" value="{$instituicao->getCep()}" />
            
        </div>

        <div class="lar-14">
           <label for="endereco">&bull; Endere&ccedil;o:</label><br />

           <input name="endereco" id="endereco" value="{$instituicao->getEndereco()}"/>
        </div>

        <div class="lar-11">
            <label for="outrasInformacoes">Outras informa&ccedil;&otilde;es:</label><br />

            <textarea name="outrasInformacoes" id="outrasInformacoes">
               {$instituicao->getOutrasInformacoes()}
            </textarea>
        </div>


        <button>Salvar</button>
    </form>

{/block}
