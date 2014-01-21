<?php /* Smarty version Smarty-3.1.8, created on 2014-01-21 01:02:16
         compiled from "view\usuario\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2771752dd9931b5e6f2-86919906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56ea829e8c9a9f3e382dc974d3605a3e577be0f4' => 
    array (
      0 => 'view\\usuario\\login.tpl',
      1 => 1390258761,
      2 => 'file',
    ),
    '48cbb389a45ae1cfebdc22a5dbe9cb135e0728fe' => 
    array (
      0 => 'view\\index.tpl',
      1 => 1390262530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2771752dd9931b5e6f2-86919906',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52dd9931b94402_04767802',
  'variables' => 
  array (
    'url' => 0,
    'message' => 0,
    'usuarioLogado' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd9931b94402_04767802')) {function content_52dd9931b94402_04767802($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="pt-BR" xml:lang="br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8851-1" />
    <title>Site bla bla bla </title>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
css/style.css" type="text/css" media="screen" />
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

	<script src="/js/jquery.js" type="text/javascript"></script>

	
</head>
<body>    
    <div id="header">
        <?php if ($_smarty_tpl->tpl_vars['message']->value!=''){?>
            <div id="mensagem" class="resultado <?php echo $_smarty_tpl->tpl_vars['message']->value['tipo'];?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value['msg'];?>
<span id="closeMsg">[X]</span></div>
        <?php }else{ ?>
            <div id="mensagem" class="resultado"><span id="closeMsg">[X]</span></div>
        <?php }?>
        
        <div id="login">
            <ul>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">Home</a>
                    <?php if ($_smarty_tpl->tpl_vars['usuarioLogado']->value==false){?>
                        <a href ="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
Usuario/Login">Login</a>
                    <?php }else{ ?>
                        <a href ="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
Usuario/Logout">Sair</a>
                    <?php }?>

                </li>
            </ul>
        </div>
        
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
    
	<div class="container">
		<div id="body">
			

    <form method="post">
        <input type="hidden" name="postback" value="true" />
        <label for="login">Usu&aacute;rio:</label>
        <input type="text" name="login" id="login" />

        <br />

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" />

        <button>Login</button>
    </form>

		</div>
		<div id="footer">
			<div>
			
			</div>
		</div>
	</div>
</body>
</html>
<?php }} ?>