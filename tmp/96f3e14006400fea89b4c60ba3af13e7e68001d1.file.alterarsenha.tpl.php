<?php /* Smarty version Smarty-3.1.8, created on 2014-01-28 01:28:17
         compiled from "view\usuario\alterarsenha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3241052e6eda1e425f2-99491770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96f3e14006400fea89b4c60ba3af13e7e68001d1' => 
    array (
      0 => 'view\\usuario\\alterarsenha.tpl',
      1 => 1390868883,
      2 => 'file',
    ),
    '57ebd120ac442f2b59812c145e1b013c6ef75667' => 
    array (
      0 => 'view\\usuario\\minhacontatemplate.tpl',
      1 => 1390868222,
      2 => 'file',
    ),
    '48cbb389a45ae1cfebdc22a5dbe9cb135e0728fe' => 
    array (
      0 => 'view\\index.tpl',
      1 => 1390865362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3241052e6eda1e425f2-99491770',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52e6eda20aebe8_23953168',
  'variables' => 
  array (
    'url' => 0,
    'message' => 0,
    'usuarioLogado' => 0,
    'userInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e6eda20aebe8_23953168')) {function content_52e6eda20aebe8_23953168($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<body>    
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
                    <li><a href="#">premio</a></li>
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
                    <a href="#">&bull; Minha Inscri&ccedil;&atilde;o</a>
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
        

	<h4>ALTERAR SENHA</h4>

    <form name="formUsuario" id="formUsuario" method="post">

        <div class="lar-01"><input type="hidden" name="postback" value="true" />

        <label for="senhaAtual">Senha Atual:</label>

        <input value="" type="password" name="senhaAtual" id="senhaAtual" maxlength="1000">
        </div>

		<div class="lar-02 margem-01">
        <label for="novaSenha">Nova Senha:</label>

        <input value="" type="password" name="novaSenha" id="novaSenha" />
        </div>

		<div class="lar-02">
        <label for="repetirSenha">Repetir Senha:</label>

        <input value="" type="password" name="repetirSenha" id="repetirSenha" />
		</div>

        <button>Alterar Senha</button>
    </form>



    </div>


            
		</div>
	</div>
    
    <div class="footer">

	</div>
</body>
</html>
<?php }} ?>