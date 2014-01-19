<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="pt-BR" xml:lang="br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8851-1" />
    <title>Site bla bla bla </title>

    <!-- <link rel="stylesheet" href="{$url}css/style.css" type="text/css" media="screen" /> -->

	<script src="/js/jquery.js" type="text/javascript"></script>

	{block name=head}{/block}
</head>
<body>
	{if $message neq ""}
		<div id="mensagem" class="resultado {$message.tipo}">{$message.msg}<span id="closeMsg">[X]</span></div>
	{else}
		<div id="mensagem" class="resultado"><span id="closeMsg">[X]</span></div>
	{/if}
	<div id="container">
		<div id="header">
			<div id="logo"></div>
			<div id="menu">
				<ul>
					<li>
						<a href="{$url}">Home</a>
                        <a href ="{$url}/Conta/Login">Login</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="body">
			{block name=body}{/block}
		</div>
		<div id="footer">
			<div>
			
			</div>
		</div>
	</div>
</body>
</html>
