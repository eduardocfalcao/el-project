{extends 'usuario/minhacontatemplate.tpl'}

{block name=minhaContaBody}
    <form name="formInstuicao" id="formInstuicao" method="post">

        <input type="hidden" name="postback" value="true" />

        <div class="lar-01">
            <label for="nome">&bull; Nome:</label><br />

            <input type="text" name="nome" id="nome" maxlength="1000" value="{$responsavel->getNome()}" />
        </div>

        <div class="lar-02">
            <label for="cargo">&bull; Cargo:</label><br />

            <input name="cargo" id="cargo" value="{$responsavel->getCargo()}" />
        </div>

        <div class="lar-02 margem-01">
            <label for="cpf">&bull; CPF:</label><br />

            <input name="cpf" id="cpf" value="{$responsavel->getCpf()}">
        </div>

        <div class="lar-02">
            <label for="rg">&bull; RG:</label><br />

            <input name="rg" id="rg" value="{$responsavel->getRg()}"/>
        </div>

        <div class="lar-02">
            <label for="outrasInformacoes">Outras informa&ccedil;&otilde;es:</label><br />

            <textarea name="outrasInformacoes" id="outrasInformacoes">
                {$responsavel->getOutrasInformacoes()}
            </textarea>
        </div>

        <button>Salvar</button>
    </form>
{/block}