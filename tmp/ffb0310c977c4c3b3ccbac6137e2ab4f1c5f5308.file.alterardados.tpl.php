<?php /* Smarty version Smarty-3.1.8, created on 2014-01-31 01:35:56
         compiled from "view\usuario\alterardados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:596652e58a4715d722-89696360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffb0310c977c4c3b3ccbac6137e2ab4f1c5f5308' => 
    array (
      0 => 'view\\usuario\\alterardados.tpl',
      1 => 1391128539,
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
  'nocache_hash' => '596652e58a4715d722-89696360',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52e58a4733ded8_41264540',
  'variables' => 
  array (
    'url' => 0,
    'message' => 0,
    'usuarioLogado' => 0,
    'userInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e58a4733ded8_41264540')) {function content_52e58a4733ded8_41264540($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        

	<h4>ALTERAR DADOS</h4>

    <form name="formUsuario" id="formUsuario" method="post">

        <div class="lar-02 margem-01">
            <label for="nome">&bull; Nome da Instituição:</label><br />

            <input type="text" name="nome" id="nome" maxlength="1000" />
        </div>

        <div class="lar-02">
            <label for="login">&bull; CNPJ:</label><br />

            <input name="login" placeholder="00.000.000/0000-00"/>
        </div>
        
        <div class="lar-02 margem-01">
            <label for="email">&bull; E-mail:</label><br />

            <input type="email" name="email" id="email" maxlength="150"/>
        </div>
        

        <div class="lar-02">
            <label for="login">&bull; Usu&aacute;rio:</label><br />

            <input name="login"/>
        </div>

        <div class="lar-02 margem-01">
            <label for="senha">&bull; Senha:</label><br />

            <input type="passoword" name="senha" id="senha"/>
        </div>

        <div class="lar-02">
            <label for="confirmarSenha">&bull; Confirmar Senha:</label><br />

            <input type="passoword" name="confirmarSenha" id="confirmarSenha"/>
        </div>

        <button class="botao01">Atualizar</button>
    </form>



    </div>


            
		</div>
	</div>
    
    <div class="footer">

	</div>
</body>
</html>
<?php }} ?>