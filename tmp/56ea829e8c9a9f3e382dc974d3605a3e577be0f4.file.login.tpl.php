<?php /* Smarty version Smarty-3.1.8, created on 2014-01-26 23:00:25
         compiled from "view\usuario\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:552052e41df410e0f4-74921326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56ea829e8c9a9f3e382dc974d3605a3e577be0f4' => 
    array (
      0 => 'view\\usuario\\login.tpl',
      1 => 1390767768,
      2 => 'file',
    ),
    '48cbb389a45ae1cfebdc22a5dbe9cb135e0728fe' => 
    array (
      0 => 'view\\index.tpl',
      1 => 1390773575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '552052e41df410e0f4-74921326',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52e41df4455980_95779636',
  'variables' => 
  array (
    'url' => 0,
    'message' => 0,
    'usuarioLogado' => 0,
    'userInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e41df4455980_95779636')) {function content_52e41df4455980_95779636($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    
	<div class="container">
		<div id="body">
        <div class="container">
			

<div class="box01">

<h4>Login</h4>

    <form method="post">
        <input type="hidden" name="postback" value="true" /><br />
        <label for="login">&bull; Nome de Usu&aacute;rio:</label><br />
        <input type="text" name="login" id="login" />
       
        <br /><br />

        <label for="senha">&bull; Senha:</label><br />
        <input type="password" name="senha" id="senha" />
        
        <br /><br />

		<a href="">Esqueci minha senha</a>

        <button>Acesse sua conta</button>
    </form>
</div>   

<div class="line"></div> 


		</div>
		</div>
	</div>
    
    <div class="footer">

	</div>
</body>
</html>
<?php }} ?>