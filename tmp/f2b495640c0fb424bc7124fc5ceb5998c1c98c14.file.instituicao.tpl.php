<?php /* Smarty version Smarty-3.1.8, created on 2014-01-31 03:16:46
         compiled from "view\usuario\instituicao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2608752eaec17ddbdf2-00151740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2b495640c0fb424bc7124fc5ceb5998c1c98c14' => 
    array (
      0 => 'view\\usuario\\instituicao.tpl',
      1 => 1391134603,
      2 => 'file',
    ),
    '57ebd120ac442f2b59812c145e1b013c6ef75667' => 
    array (
      0 => 'view\\usuario\\minhacontatemplate.tpl',
      1 => 1391038042,
      2 => 'file',
    ),
    '48cbb389a45ae1cfebdc22a5dbe9cb135e0728fe' => 
    array (
      0 => 'view\\index.tpl',
      1 => 1391082332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2608752eaec17ddbdf2-00151740',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52eaec1812e6b8_90359620',
  'variables' => 
  array (
    'url' => 0,
    'message' => 0,
    'usuarioLogado' => 0,
    'userInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52eaec1812e6b8_90359620')) {function content_52eaec1812e6b8_90359620($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="pt-BR" xml:lang="br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8851-1" />
    <title>Site bla bla bla </title>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
css/style.css" type="text/css" media="screen" />
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

	<script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
js/jquery-1.10.2.min.js" type="text/javascript"></script>

	
</head>
<body>    <!---class="bg-home"--->
	<div class="container">
        <?php if ($_smarty_tpl->tpl_vars['message']->value!=''){?>
            <div id="mensagem" class="resultado <?php echo $_smarty_tpl->tpl_vars['message']->value['tipo'];?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value['msg'];?>
<span id="closeMsg">Sair</span></div>
        <?php }else{ ?>
            <div id="mensagem" class="resultado"><span id="closeMsg">Sair</span></div>
        <?php }?>
        <div id="header">
            <div class="arealogin">
                <div class="login">
                    <ul>
                        <?php if ($_smarty_tpl->tpl_vars['usuarioLogado']->value==false){?>
                            <li><a href ="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
Usuario/Cadastro">Cadastre-se</a> <strong>|</strong> </li>

                            <li><a href ="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
Usuario/Login">Login</a>
                        <?php }else{ ?>
                            <li>Bem vindo <strong><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['nome'];?>
</strong> <strong>|</strong></li>
                            <li><a href ="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
Usuario/MinhaConta">Minha Conta</a> <strong>|</strong></li>
                            <li><a href ="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
Usuario/Logout">Sair</a></li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="container">

            <div id="menu">
                <ul>
                    <li><a href="#">inicio</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
Home/Premio">premio</a></li>
                    <li><a href="#">parceiros</a></li>
                    <li><a href="#">edital</a></li>
                    <li><a href="#">participacao</a></li>
                    <li><a href="#">como se escrever</a></li>
                    <li><a href="#">contato</a></li>
                </ul>
            </div>

        </div>
    </div>
    
	<div class="container over">
		<div id="body">

			

    <div class="box03">
    <h4>MINHA CONTA</h4>
    
        <div class="menuMinhaConta">
            <ul>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
Usuario/Instituicao">&bull; Minha Inscri&ccedil;&atilde;o</a>
                </li>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
Usuario/AlterarDados">&bull; Alterar dados</a>
                </li>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
Usuario/AlterarSenha">&bull; Alterar senha</a>
                </li>
                <li class="sair">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
Usuario/Logout"><strong>Sair</strong></a>
                </li>
            </ul>
            
        </div>
 
   </div>
   
   <div class="line"></div>
   
    <div class="box04">
        

    <h4>Dados da Intui&ccedil;&atilde;o</h4>

    <form name="formInstuicao" id="formInstuicao" method="post">

        <input type="hidden" name="postback" value="true" />

        <div class="lar-01">
            <label for="nomeInstituicao">&bull; Nome da Institui&ccedil;&atilde;o</label><br />

            <input type="text" name="nomeInstituicao" id="nomeInstituicao" maxlength="1000" value="<?php echo $_smarty_tpl->tpl_vars['instituicao']->value->getNome();?>
" />
        </div>

        <div class="lar-07 margem-01">
            <label for="cnpj">&bull; CNPJ</label><br />

            <input name="cnpj" id="cnpj" value="<?php echo $_smarty_tpl->tpl_vars['instituicao']->value->getCnpj();?>
">
        </div>

        <div class="lar-07">
            <label for="email">&bull; E-mail:</label><br />

            <input name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['instituicao']->value->getEmail();?>
"/>
        </div>

        <div class="lar-07 margem-01">
            <label for="telefone">&bull; Telefone:</label><br />

            <input name="telefone" id="telefone" value="<?php echo $_smarty_tpl->tpl_vars['instituicao']->value->getTelefone();?>
" />
        </div>

        <div class="lar-07">
            <label for="telefoneOpcional"> Telefone (2):</label><br />

            <input name="telefoneOpcional" id="telefoneOpcional" value="<?php echo $_smarty_tpl->tpl_vars['instituicao']->value->getTelefoneAlternativo();?>
" />
        </div>

        <div class="lar-07 margem-01">
            <label for="site">Site</label><br />

            <input name="site" id="site" value="<?php echo $_smarty_tpl->tpl_vars['instituicao']->value->getSite();?>
"/>
        </div>

        <div class="lar-07">
            <label for="facebook">Facebook:</label><br />

            <input name="facebook" id="facebook" value="<?php echo $_smarty_tpl->tpl_vars['instituicao']->value->getFacebook();?>
" />
        </div>

        <div class="lar-10 margem-01">
            <label for="cidade">&bull; Cidade:</label><br />

            <input name="cidade" value="<?php echo $_smarty_tpl->tpl_vars['instituicao']->value->getCidade();?>
" />
        </div>

        <div class="lar-13 margem-01">
            <label for="uf">&bull; UF:</label><br />

            <input name="uf" id="uf" maxlength="4" value="<?php echo $_smarty_tpl->tpl_vars['instituicao']->value->getUf();?>
"/>
        </div>

        <div class="lar-12 margem-01">
            <label for="pais">&bull; Pa&iacute;s:</label><br />

            <input name="pais" id="pais" value="<?php echo $_smarty_tpl->tpl_vars['instituicao']->value->getPais();?>
"/>
        </div>

        <div class="lar-12 margem-01">
        
             <label for="cep">&bull; CEP</label><br />
    
             <input name="cep" id="cep" value="<?php echo $_smarty_tpl->tpl_vars['instituicao']->value->getCep();?>
" />
            
        </div>

        <div class="lar-14">
           <label for="endereco">&bull; Endere&ccedil;o:</label><br />

           <input name="endereco" id="endereco" value="<?php echo $_smarty_tpl->tpl_vars['instituicao']->value->getEndereco();?>
"/>
        </div>

        <div class="lar-11">
            <label for="outrasInformacoes">Outras informa&ccedil;&otilde;es:</label><br />

            <textarea name="outrasInformacoes" id="outrasInformacoes">
               <?php echo $_smarty_tpl->tpl_vars['instituicao']->value->getOutrasInformacoes();?>

            </textarea>
        </div>


        <button>Salvar</button>
    </form>


    </div>


            
		</div>
	</div>
    
    <div class="footer">

	</div>
</body>
</html>
<?php }} ?>