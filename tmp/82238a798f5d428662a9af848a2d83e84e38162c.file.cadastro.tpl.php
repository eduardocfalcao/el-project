<?php /* Smarty version Smarty-3.1.8, created on 2014-01-20 22:46:17
         compiled from "view\usuario\cadastro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1350052dd99297d3e93-42573033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82238a798f5d428662a9af848a2d83e84e38162c' => 
    array (
      0 => 'view\\usuario\\cadastro.tpl',
      1 => 1390254189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1350052dd99297d3e93-42573033',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52dd992980d967_42295423',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dd992980d967_42295423')) {function content_52dd992980d967_42295423($_smarty_tpl) {?>

<form name="formUsuario" id="formUsuario" method="post">

    <input type="hidden" name="postback" value="true" />

    <label for="nome">Nome:</label>

    <input type="text" name="nome" id="nome" maxlength="1000"   />

    <br />

    <label for="email">E-mail:</label>

    <input type="email" name="email" id="email" maxlength="150"/>

    <br />

    <label for="dataNascimento">Data Nascimento:</label>

    <input name="dataNascimento" id="dataNascimento" />

    <br />

    <label for="dataNascimento">sexo:</label>

    <input type="radio" name="sexo" value="1" checked text=""> Masculino
    <br />
    <input type="radio" name="sexo" value="2"> Feminino
    <br />

    <label for="cidade">Cidade:</label>

    <input name="cidade" id="cidade" />
    <br/>

    <label for="uf">UF:</label>

    <input name="uf" id="uf" maxlength="4" />
    <br />

    <label for="pais">Pa&iacute;s:</label>

    <input name="pais" id="pais" />
    <br/>

    <label for="login">Nome de Usu&aacute;rio:</label>

    <input name="login" />

    <br />

    <label for="senha">Senha:</label>

    <input type="passoword" name="senha" id="senha" />

    <br />

    <label for="confirmarSenha">Confirmar Senha:</label>

    <input type="passoword" name="confirmarSenha" id="confirmarSenha" />

    <button>Cadastrar</button>
</form>



<?php }} ?>