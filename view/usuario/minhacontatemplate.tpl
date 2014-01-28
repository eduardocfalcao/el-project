{extends 'index.tpl'}

{block name=body}

    <div class="box03">
    <h4>MINHA CONTA</h4>
    
        <div class="menuMinhaConta">
            <ul>
                <li>
                    <a href="#">&bull; Minha Inscri&ccedil;&atilde;o</a>
                </li>
                <li>
                    <a href="{$url}Usuario/AlterarDados">&bull; Alterar dados</a>
                </li>
                <li>
                    <a href="{$url}Usuario/AlterarSenha">&bull; Alterar senha</a>
                </li>
                <li class="sair">
                    <a href="{$url}Usuario/Logout"><strong>Sair</strong></a>
                </li>
            </ul>
            
        </div>
 
   </div>
   
   <div class="line"></div>
   
    <div class="box04">
        {block name=minhaContaBody}{/block}
    </div>

{/block}