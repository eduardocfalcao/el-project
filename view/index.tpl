<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="pt-BR" xml:lang="br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8851-1" />
    <title>Site bla bla bla </title>

    <link rel="stylesheet" href="{$url}css/style.css" type="text/css" media="screen" />
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

	<script src="{$url}js/jquery-1.10.2.min.js" type="text/javascript"></script>

	{block name=head}{/block}
</head>
<body>    
	<div class="container">
        {if $message neq ""}
            <div id="mensagem" class="resultado {$message.tipo}">{$message.msg}<span id="closeMsg">Sair</span></div>
        {else}
            <div id="mensagem" class="resultado"><span id="closeMsg">Sair</span></div>
        {/if}
        <div id="header">
            <div class="arealogin">
                <div class="login">
                    <ul>
                        {if $usuarioLogado eq false}
                            <li><a href ="{$url}Usuario/Cadastro">Cadastre-se</a> <strong>|</strong> </li>

                            <li><a href ="{$url}Usuario/Login">Login</a>
                        {else}
                            <li>Bem vindo <strong>{$userInfo.nome}</strong> <strong>|</strong></li>
                            <li><a href ="{$url}Usuario/MinhaConta">Minha Conta</a> <strong>|</strong></li>
                            <li><a href ="{$url}Usuario/Logout">Sair</a></li>
                        {/if}
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
			{block name=body}{/block}
		</div>
		</div>
	</div>
    
    <div class="footer">

	</div>
</body>
</html>
