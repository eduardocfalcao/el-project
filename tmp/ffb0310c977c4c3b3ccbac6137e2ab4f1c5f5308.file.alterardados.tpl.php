<?php /* Smarty version Smarty-3.1.8, created on 2014-01-20 23:04:17
         compiled from "view\usuario\alterardados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:220752dd9b310483d8-33927982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffb0310c977c4c3b3ccbac6137e2ab4f1c5f5308' => 
    array (
      0 => 'view\\usuario\\alterardados.tpl',
      1 => 1390255448,
      2 => 'file',
    ),
    '48cbb389a45ae1cfebdc22a5dbe9cb135e0728fe' => 
    array (
      0 => 'view\\index.tpl',
      1 => 1390254189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '220752dd9b310483d8-33927982',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52dd9b310f6702_57495453',
  'variables' => 
  array (
    'url' => 0,
    'message' => 0,
    'usuarioLogado' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd9b310f6702_57495453')) {function content_52dd9b310f6702_57495453($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
		</div>
		<div id="body">
			

    <form name="formUsuario" id="formUsuario" method="post">

        <input type="hidden" name="postback" value="true" />

        <label for="nome">Nome:</label>

        <input value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getNome();?>
" type="text"   name="nome" id="nome" maxlength="1000">

        <br />

        <label for="email">E-mail:</label>

        <input value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getEmail();?>
" type="email" name="email" id="email" maxlength="150" />

        <br />

        <label for="dataNascimento">Data Nascimento:</label>
        <input value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getDataNascimento()->format('d/m/Y');?>
" name="dataNascimento" id="dataNascimento" />

        <br />

        <label for="sexo">Sexo:</label>

        <input type="radio" name="sexo" value="1" <?php if ($_smarty_tpl->tpl_vars['usuario']->value->getSexo()==1){?>checked<?php }?>> Masculino
        <br />
        <input type="radio" name="sexo" value="2" <?php if ($_smarty_tpl->tpl_vars['usuario']->value->getSexo()==2){?>checked<?php }?>> Feminino
        <br />

        <label for="cidade">Cidade:</label>

        <input value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getCidade();?>
" name="cidade" id="cidade" />
        <br/>

        <label for="uf">UF:</label>

        <input value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getuf();?>
" name="uf" id="uf" maxlength="4" />
        <br />

        <label for="pais">Pa&iacute;s:</label>

        <input value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getPais();?>
" name="pais" id="pais" />
        <br/>

        <button>Atualizar</button>
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