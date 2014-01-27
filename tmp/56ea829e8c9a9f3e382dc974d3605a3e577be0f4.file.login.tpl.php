<?php /* Smarty version Smarty-3.1.8, created on 2014-01-27 01:12:24
         compiled from "view\usuario\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:552052e41df410e0f4-74921326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56ea829e8c9a9f3e382dc974d3605a3e577be0f4' => 
    array (
      0 => 'view\\usuario\\login.tpl',
      1 => 1390779297,
      2 => 'file',
    ),
    '48cbb389a45ae1cfebdc22a5dbe9cb135e0728fe' => 
    array (
      0 => 'view\\index.tpl',
      1 => 1390775335,
      2 => 'file',
    ),
    'f92d8e95121bb43f61dd33e5c7e86ba9fb9bacf4' => 
    array (
      0 => 'view\\usuario\\formlogincadasto.tpl',
      1 => 1390779579,
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
			

<?php /*  Call merged included template "usuario/formlogincadasto.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("usuario/formlogincadasto.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '552052e41df410e0f4-74921326');
content_52e5a4685cd868_44797488($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "usuario/formlogincadasto.tpl" */?>


		</div>
		</div>
	</div>
    
    <div class="footer">

	</div>
</body>
</html>
<?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2014-01-27 01:12:24
         compiled from "view\usuario\formlogincadasto.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52e5a4685cd868_44797488')) {function content_52e5a4685cd868_44797488($_smarty_tpl) {?><div class="box01">

    <h4>Login</h4>

    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
Usuario/Login">
        <input type="hidden" name="postback" value="true" />

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

<div class="box02">

    <h4>Cadastre-se</h4>

    <form name="formUsuario" id="formUsuario" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
Usuario/Cadastro">

        <input type="hidden" name="postback" value="true" />

        <div class="lar-01">
            <label for="nome">&bull; Nome:</label><br />

            <input type="text" name="nome" id="nome" maxlength="1000" />
        </div>

        <div class="lar-02 margem-01">
            <label for="dataNascimento">&bull; Sexo:</label><br />

            <div class="radius margem-03"><input type="radio" name="sexo" value="1" checked text=""> Masculino</div>
            <div class="radius margem-04"><input type="radio" name="sexo" value="2"> Feminino</div>
        </div>

        <div class="lar-02">
            <label for="dataNascimento">&bull; Data Nascimento:</label><br />

            <input name="dataNascimento" id="dataNascimento"/>
        </div>

        <div class="lar-02">
            <label for="cidade">&bull; Cidade:</label><br />

            <input name="cidade" id="cidade" />
        </div>

        <div class="lar-05 margem-02">
            <label for="uf">&bull; UF:</label><br />

            <input name="uf" id="uf" maxlength="4"/>
        </div>

        <div class="lar-03">
            <label for="pais">&bull; Pa&iacute;s:</label><br />

            <input name="pais" id="pais"/>
        </div>

        <div class="lar-02 margem-01">
            <label for="email">&bull; E-mail:</label><br />

            <input type="email" name="email" id="email" maxlength="150" />
        </div>

        <div class="lar-02">
            <label for="login">&bull; Nome de Usu&aacute;rio:</label><br />

            <input name="login" class="lar-02"/>
        </div>

        <div class="lar-02 margem-01">
            <label for="senha">&bull; Senha:</label><br />

            <input type="passoword" name="senha" id="senha"/>
        </div>

        <div class="lar-02">
            <label for="confirmarSenha">&bull; Confirmar Senha:</label><br />

            <input type="passoword" name="confirmarSenha" id="confirmarSenha"/>
        </div>

        <button>Finalizar Cadastro</button>
    </form>

</div><?php }} ?>