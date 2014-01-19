<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
	<title>Administra&ccedil;&atilde;o</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link href="{$url}css/template.css" rel="stylesheet" type="text/css" />
	<link href="{$url}css/jquery-calendar.css" rel="stylesheet" type="text/css" />
	<link href="{$url}css/rounded.css" rel="stylesheet" type="text/css" media="screen"  />
	<link href="{$url}css/uploadify.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="{$url}css/smoothness/smoothness.custom.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="{$url}css/ui.jqgrid.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="{$url}css/validationEngine.jquery.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="{$url}css/dd.css" rel="stylesheet" type="text/css" />
	<link href="{$url}css/common.css" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript" src="{$url}js/tiny_mce/tiny_mce.js"></script>
	<script type="text/javascript" src="{$url}js/jquery.js"></script>
	<script type="text/javascript" src="{$url}js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="{$url}js/menu.js"></script>
	<script type="text/javascript" src="{$url}js/custom.formatters.js"></script>
	<script type="text/javascript" src="{$url}js/jquery-scrolltofixed-min.js"></script>
	<script type="text/javascript" src="{$url}js/jquery.dd.js"></script>
	<script type="text/javascript" src="{$url}js/highcharts.js"></script>
	
	<script src="{$url}js/i18n/grid.locale-pt-br.js" type="text/javascript"></script>
	<script src="{$url}js/jquery.jqGrid.min.js" type="text/javascript"></script>
	<script src="{$url}js/jquery.validationEngine-pt_BR.js" type="text/javascript"></script>
	<script src="{$url}js/jquery.validationEngine.js" type="text/javascript"></script>
	<script src="{$url}js/jquery.blockUI.js" type="text/javascript"></script>
	<script type="text/javascript">
		var url = '{$url}' + 'admin/'; 
		var imgpath = '{$img}';
		function showMessage(message, mode)
		{
			var m = message + '<span id="closeMsg">[X]</span>';
			$("#mensagem").html(m).removeClass().addClass("resultado "+mode);
			$("#mensagem").show();
		}
		
		function blockUi(){
			$.blockUI({ message: '<img src="'+imgpath+'ico_ajax_32.gif" />' });
		}
		
		function unblockUi(){
			$.unblockUI();
		}
		$('document').ready(function(){
			$('.buttonLink, input:submit, button').button();
			//$('#mensagem').scrollToFixed({ marginTop: 10 });
			$('#closeMsg').live('click',function(){
				$('#mensagem').hide();
			});
			
			$("form").validationEngine('attach');
			
		});
	</script>
	{block name=head}{/block}
	{$xajax}
</head>
<body id="minwidth-body">
	{if $message neq ""}
		<div id="mensagem" class="resultado {$message.tipo}">{$message.msg}<span id="closeMsg">[X]</span></div>
	{else}
		<div id="mensagem" class="resultado"><span id="closeMsg">[X]</span></div>
	{/if}
	<div id="border-top" class="h_green">
		<div>
			<div>
				<span class="title"></span>
			</div>
		</div>
	</div>
	<div id="header-box">
		<!--<div id="module-status">
			<span class="preview">
				<a href="{$url}" target="_blank">Ir Para o site</a>
			</span>
			<span class="logout"><a href="{$url}admin/Portal/Logout">Deslogar</a></span>
		</div>-->
		<div id="menu">
    		<ul class="menu">
				<li><a class="parent"><span>Site</span></a>
					<ul>
						<li><a class="icon-16-cpanel" href="{$url}admin"><span>Home</span></a></li>
						
						<li><a class="parent"><span>Adiministrador</span></a>
							<ul>
								<li>
									<a class="icon-16-user" href="{$url}admin/Portal/PropriedadesAdmin">
										<span>Configura&ccedil;&otilde;es de conta</span>
									</a>
								</li>
								<li>
									<a class="icon-16-user" href="{$url}admin/Portal/AlterarSenhaAdmin">
										<span>Alterar senha </span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a class="parent"><span>Gerenciador de Produtos</span></a>
					<ul>
						<li>
							<a class="icon-16-article" href="{$url}admin/GerenciadorProduto/Lista">
								<span>Listar Produtos</span>
							</a>
						</li>
						<li>
							<a class="icon-16-article" href="{$url}admin/GerenciadorProduto/Propriedades">
								<span>Inserir Produto</span>
							</a>
						</li>
					</ul>
				</li>
				<li><a class="parent"><span>Gerenciador de Categorais</span></a>
					<ul>
						<li>
							<a class="icon-16-category" href="{$url}admin/GerenciadorCategoria/Lista">
								<span>Listar Categorias</span>
							</a>
						</li>
						<li>
							<a class="icon-16-category" href="{$url}admin/GerenciadorCategoria/Propriedades">
								<span>Inserir Categoria</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="parent"><span>Rela&oacute;rios</span></a>
					<ul>
						<li>
							<a class="icon-16-category" href="{$url}admin/Relatorios/RelatorioWizard">
								<span>Relat&oacute;rio visualiza&ccedil;&atilde;o de produtos</span>
							</a>
						</li>
					</ul>
				</li>
				<li><a class="parent"><span>Marketing</span></a>
					<ul>
						<li>
							<a class="parent" href="{$url}admin/Marketing/ListarBanners">
								<span>Banner</span>
							</a>
							<ul>
								<li>
									<a class="icon-16-user" href="{$url}admin/Marketing/ListarBanners">
										<span>Listar Banners</span>
									</a>
								</li>
								<li>
									<a class="icon-16-user" href="{$url}admin/Marketing/OrdenarBanners">
										<span>Ordenar Banners </span>
									</a>
								</li>
								<li>
									<a class="icon-16-user" href="{$url}admin/Marketing/PropriedadesBanner">
										<span>Novo Banner </span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="icon-16-media" href="{$url}admin/Marketing/Popup">
								<span>Pop-Up</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="{$url}" target="_blank"><span>Ir Para o site</span></a>
				</li>
				<li>
					<a href="{$url}admin/Portal/Logout"><span>Deslogar</span></a>
				</li>
			</ul>
		</div>
		<div class="clr"></div>
	</div>
	<div id="content-box">
		<div class="ui-tabs ui-widget ui-widget-content ui-corner-all min-height-380">
			<div class="ui-tabs-panel ui-widget-content ui-corner-bottom padding-30">
				{block name=bodyHeader}{/block}
				{block name=body}{/block}
			</div>
		</div>
	</div>
	<div id="border-bottom"><div><div></div></div></div>
	<div id="footer">

		<p class="copyright">
		</p>
	</div>
</body>
</html>
