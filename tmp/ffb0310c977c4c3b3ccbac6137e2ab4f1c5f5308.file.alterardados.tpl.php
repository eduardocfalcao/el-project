<?php /* Smarty version Smarty-3.1.8, created on 2014-01-20 22:54:57
         compiled from "view\usuario\alterardados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:220752dd9b310483d8-33927982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffb0310c977c4c3b3ccbac6137e2ab4f1c5f5308' => 
    array (
      0 => 'view\\usuario\\alterardados.tpl',
      1 => 1390254189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '220752dd9b310483d8-33927982',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52dd9b310f6702_57495453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd9b310f6702_57495453')) {function content_52dd9b310f6702_57495453($_smarty_tpl) {?>

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


<?php }} ?>