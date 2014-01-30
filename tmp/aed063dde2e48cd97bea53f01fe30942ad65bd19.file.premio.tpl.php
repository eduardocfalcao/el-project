<?php /* Smarty version Smarty-3.1.8, created on 2014-01-30 13:46:41
         compiled from "view\home\premio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2217952ea38e657d832-71823307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aed063dde2e48cd97bea53f01fe30942ad65bd19' => 
    array (
      0 => 'view\\home\\premio.tpl',
      1 => 1391085999,
      2 => 'file',
    ),
    '48cbb389a45ae1cfebdc22a5dbe9cb135e0728fe' => 
    array (
      0 => 'view\\index.tpl',
      1 => 1391082332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2217952ea38e657d832-71823307',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52ea38e66a8313_08384436',
  'variables' => 
  array (
    'url' => 0,
    'message' => 0,
    'usuarioLogado' => 0,
    'userInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ea38e66a8313_08384436')) {function content_52ea38e66a8313_08384436($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

			
   <div class="container">
   		<h4>Pr&ecirc;mio</h4>
        
        <div class="box05">
        
        	<h5>O que &eacute; o pr&ecirc;mio:</h5>
            
            <p>O 1º Prêmio Nacional de Projetos de Participação Infantil tem objetivo de fortalecer e disseminar práticas de participação infantil. Sendo realizado nacionalmente, através da premiação de práticas metodologicamente sérias, inovadoras, eficazes, criativas e com impacto relevante, pretendemos contribuir para difundir e estimular a efetivação do direito à participação infantil em múltiplos espaços sociais.
</p>
			<p>O concurso pretende enriquecer o campo de discussões e práticas em torno da ideia da participação infantil no Brasil. Essa ideia muda a concepção tradicional que considera as crianças como seres passivos, sem opinião, sem  propostas ou vontade própria, que devem aguardar algum momento num futuro distante para se tornarem cidadãos e, só então, poderem participar ativamente da sociedade. Incluir a participação de crianças e adolescentes é percebê-los como pessoas completas, competentes, curiosas e criativas, capazes de agir no momento presente de suas vidas. O envolvimento dessas crianças no planejamento e execução de projetos em distintas escalas não só enriquece seu  desenho, como o torna mais aderente à realidade, o que constitui para essas crianças um importante processo de vivência na construção da sua cidadania. </p>
            
            <p>Apesar de a participação infantil estar prevista como direito na Convenção sobre os Direitos da Criança da ONU (da qual o Brasil é signatário), no Estatuto das Crianças e dos Adolescentes - ECA, assim como em outros documentos públicos nacionais, sua implementação está longe da desejada. </p>
            
            <br/><br/>
            
            <h5>Quem prop&otilde;e:</h5>
            
            <p>O 1º Prêmio Nacional de Projetos de Participação Infantil ocorre no âmbito do Projeto Criança Pequena em Foco, apoiado pela Fundação Bernard van Leer, e realizado pelo CECIP – Centro de Criação da Imagem Popular. O prêmio conta ainda com o apoio do Instituto C&A. </p> 

			<p>O Criança Pequena em Foco tem como objetivo incluir a participação das crianças no desenvolvimento das políticas públicas, considerando necessário múltiplas estratégias para atingir tal objetivo: </p> 
            
            <ul>
                <li><span class="color01">&bull; </span> Ações de advocacy¹ junto ao poder público;</li><br/>
    
                <li><span class="color01">&bull; </span> Mobilização social em torno do tema através de em diálogo com organizações, atuação em redes e fóruns da área infância;</li><br/>
                
                <li><span class="color01">&bull; </span> Capacitação de gestores públicos e de atores de outros setores relacionados à infância;</li><br/>
                
                <li><span class="color01">&bull; </span> Comunicação da ideia em diversos meios e mídias; </li><br/>
                
                <li><span class="color01">&bull; </span> Realização de experiências-piloto que possam ser replicadas em escala pelo poder público; </li><br/>
                
                <li><span class="color01">&bull; </span> Desenvolvimento e divulgação de metodologias participativas;</li><br/>
                
                <li><span class="color01">&bull; </span> Pesquisas que aprofundem os conhecimentos em torno da ideia;</li><br/>
                
                <li><span class="color01">&bull; </span> Troca de experiências entre práticas em desenvolvimento; </li><br/>
                
                <li><span class="color01">&bull; </span> Incentivo às práticas já realizadas.</li><br/>
                
            <ul>
            
            <p>Entre as atividades realizadas pelo projeto, no período de 2011 e 2013 estão: a parceria com secretarias da Prefeitura da cidade do Rio de Janeiro para inclusão da participação infantil em suas ações e a sistematização de metodologias para escuta das crianças produzindo o <a href="http://www.cecip.org.br/images/vamos_ouvir_criancas-ebook.pdf" target="_blank">Caderno de Metodologias participativas</a> do projeto Criança Pequena em Foco além da realização de uma experiência-piloto de participação infantil em parceria com a CET-Rio e a realização do 1º Seminário A Criança e Sua Participação na Cidade, em parceria com a Universidade Federal do Rio de Janeiro; produção de um vídeo-campanha sobre o tema; inclusão, em conjunto com outras instituições, da voz das crianças no Plano Municipal pela Primeira Infância (PMPI) do Rio de Janeiro.
</p>

			<h6><strong>1</strong>  Conjunto de ações que visam influenciar a formulação, aprovação e execução de políticas públicas junto ao poderes Legislativo, Executivo e Judiciário e à sociedade, por meio do trabalho em redes e a mobilização da mídia (retirado de: http://www.dialogosocial.com.br/advocacy-s351-1.html#.Ut6_JfRTtFk).</h6>
            
            <br/><br/>
            
            <h5>Quando será realizado:</h5>
            
            <p>A premiação será realizada no <strong>dia 6 de junho (sexta-feira) de 2014</strong> no Rio de Janeiro em local e horário a ser definido.<br/><br/>

            <strong>31/01</strong> - Início das inscrições <br/>
            <strong>31/03</strong> – Término das inscrições <br/>
            <strong>05/04</strong> – Resultado dos projetos classificados para a próxima fase.<br/>
            <strong>02/05</strong> – Resultado dos seis projetos finalistas. <br/>
            <strong>05/05 a 25/05</strong> – Visita aos seis projetos finalistas.<br/>
            <strong>06/06</strong> - Premiação no Rio de Janeiro.
			
            
            <br/><br/>
            
            <h5>Premiação:</h5>
            
            <strong>1º lugar</strong> R$ 10.500,00 (dez mil e quinhentos reais)<br/>
            <strong>2º lugar</strong> R$ 7.000,00 (sete mil reais)<br/>
            <strong>3º lugar</strong> R$ 3.500,00 (três mil e quinhentos reais)<br/>
            
            </p>

            
            
        </div>
        
        <div class="box06">
        
        <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
img/premio-01.png" style="display: block;margin: 15px auto 0 auto; width: 580px;">
        
        <h6 style="margin: 10px 0; text-align:center;">Crianças em oficina do CPF no Complexo do Alemão (RJ) em 2013.</h6>
        
        <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
img/premio-02.png" style="display: block;margin: 85px auto 0 auto; width: 580px;">
        
        <h6 style="margin: 10px 0; text-align:center;">Crianças em passeio fotográfico promovido pelo CPF no Santa Marta em 2012.</h6>
        
        <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
img/premio-03.png" style="display: block;margin: 85px auto 0 auto; width: 580px;">
        
        <h6 style="margin: 10px 0; text-align:center;">Menina construindo o Mapa Afetivo do Morro da Babilônia (RJ) durante oficina realizada em 2012.</h6>
        
        <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
img/premio-04.png" style="display: block;margin: 85px auto 0 auto; width: 580px;">
        
        <h6 style="margin: 10px 0; text-align:center;">Logo do projeto Criança Pequena em Foco.</h6>
        
        </div>
   </div>

            
		</div>
	</div>
    
    <div class="footer">

	</div>
</body>
</html>
<?php }} ?>