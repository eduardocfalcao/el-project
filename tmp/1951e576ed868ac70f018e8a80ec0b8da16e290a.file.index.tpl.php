<?php /* Smarty version Smarty-3.1.8, created on 2014-01-19 21:53:11
         compiled from "view\home\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:813052dc3b372ced16-52369095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1951e576ed868ac70f018e8a80ec0b8da16e290a' => 
    array (
      0 => 'view\\home\\index.tpl',
      1 => 1390164274,
      2 => 'file',
    ),
    '48cbb389a45ae1cfebdc22a5dbe9cb135e0728fe' => 
    array (
      0 => 'view\\index.tpl',
      1 => 1390164537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '813052dc3b372ced16-52369095',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52dc3b37339836_74942941',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dc3b37339836_74942941')) {function content_52dc3b37339836_74942941($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="pt-BR" xml:lang="br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8851-1" />
    <title>Site bla bla bla </title>

    <!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
css/style.css" type="text/css" media="screen" /> -->

	<script src="/js/jquery.js" type="text/javascript"></script>

	
</head>
<body>
	<?php if ($_smarty_tpl->tpl_vars['message']->value!=''){?>
		<div id="mensagem" class="resultado <?php echo $_smarty_tpl->tpl_vars['message']->value['tipo'];?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value['msg'];?>
<span id="closeMsg">[X]</span></div>
	<?php }else{ ?>
		<div id="mensagem" class="resultado"><span id="closeMsg">[X]</span></div>
	<?php }?>
	<div id="container">
		<div id="header">
			<div id="logo"></div>
			<div id="menu">
				<ul>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">Home</a>
                        <a href ="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/Conta/Login">Login</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="body">
			
    Body do index da home

		</div>
		<div id="footer">
			<div>
			
			</div>
		</div>
	</div>
</body>
</html>
<?php }} ?>