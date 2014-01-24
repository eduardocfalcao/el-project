{extends 'index.tpl'}

{block name=body}

    <div class="">
        <div class="menuMinhaConta">
            <ul>
                <li>
                    <a href="#">Minha Inscri&ccedil;&atilde;o</a>
                </li>
                <li>
                    <a href="{$url}Usuario/AlterarDados">Alterar dados</a>
                </li>
                <li>
                    <a href="{$url}Usuario/AlterarSenha">Alterar senha</a>
                </li>
                <li>
                    <a href="{$url}Usuario/Logout">Sair</a>
                </li>
            </ul>
        </div>
        <div>
            {block name=minhaContaBody}{/block}
        </div>
   </div>

{/block}