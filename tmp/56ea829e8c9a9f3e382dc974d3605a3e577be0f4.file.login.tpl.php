<?php /* Smarty version Smarty-3.1.8, created on 2014-01-20 22:46:25
         compiled from "view\usuario\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2771752dd9931b5e6f2-86919906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56ea829e8c9a9f3e382dc974d3605a3e577be0f4' => 
    array (
      0 => 'view\\usuario\\login.tpl',
      1 => 1390254189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2771752dd9931b5e6f2-86919906',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52dd9931b94402_04767802',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd9931b94402_04767802')) {function content_52dd9931b94402_04767802($_smarty_tpl) {?>

    <form method="post">
        <input type="hidden" name="postback" value="true" />
        <label for="login">Usu&aacute;rio:</label>
        <input type="text" name="login" id="login" />

        <br />

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" />

        <button>Login</button>
    </form>
<?php }} ?>