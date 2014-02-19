<?php


include_once(APP.'class'.DS.'tcpdf'.DS.'tcpdf.php');
include_once(APP."class".DS."PHPJasperXML.inc.php");

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
App::uses('ConnectionManager', 'Model');


class HomeController extends AppController {
	
	public function relatorio()
	{
		$PHPJasperXML = new PHPJasperXML();
		//$PHPJasperXML->debugsql=true;
		$PHPJasperXML->arrayParameter=array("id"=>10);
		$PHPJasperXML->load_xml_file(APP."relatorio".DS."instituicao.jrxml");
		
		$dataSource = ConnectionManager::getDataSource('default');
		
		$PHPJasperXML->transferDBtoArray($dataSource->config['host'], 
										 $dataSource->config['login'],
										 $dataSource->config['password'],
										 $dataSource->config['database']);
		$PHPJasperXML->outpage("I");
	}
	
	public function premio()
	{
		
	}
	
    public function parceiros()
    {
    }

    public function edital()
    {
    }

    public function consideracoes ()
    {
    }

    public function inscricao()
    {
    }

    public function contato()
    {
    	
    	if ($this->request->is('post'))
    	{
    		$para = "premioparticipacaoinfantil@gmail.com";
			$email = new CakeEmail();
			$email->config('contato');
			if($email->viewVars($this->request->data['Contato'])
					->template('contato')
				    ->emailFormat('html')
				    ->to('premioparticipacaoinfantil@gmail.com')
				    ->from('contato@premioparticipacaoinfantil.org.br')
				    ->send())
		    {
				$this->Session->setFlash(__('A mensagem foi enviada.'),'default',array('class' => 'sucesso'));
			}
			else
			{
				$this->Session->setFlash(__('A mensagem não foi enviada.'),'default',array('class' => 'erro'));
			}
			
			/*
			$titulo = "Mensagem de contato - Pr&ecirc;mio Participa&ccedil;&atilde;o Infantil : ".utf8_decode($this->request->data['Contato']['assunto']);
			$bodyMsg  = "<h2> Mensagem do formul&aacute;rio de contato do site Pr&ecirc;mio Participa&ccedil;&atilde;o Infantil </h2>";
			$bodyMsg .= "<p> Nome : ".utf8_decode($this->request->data['Contato']['nome'])."</p>";
			$bodyMsg .= "<p> Nome da Institui&ccedil;&atilde;o : ".utf8_decode($this->request->data['Contato']['nomeInstituicao'])."</p>";
			$bodyMsg .= "<p> E-mail : ".utf8_decode($this->request->data['Contato']['email'])."</p>";
			$bodyMsg .= "<p> Assunto : ".utf8_decode($this->request->data['Contato']['assunto'])."</p>";
			$bodyMsg .= "<p> Mensagem : ".utf8_decode($this->request->data['Contato']['mensagem'])."</p>";
			
			$info     = "Content-type: text/html; charset=iso-8859-1\r\n";
			$info  	 .= "Content-Type: text/html; charset=us-ascii\n";
			$info    .= "Content-Transfer-Encoding: 8bit\n";
			$info 	 .= "X-Sender:<contato@site1389989486.provisorio.ws>\n"; //<Endereço do remetente>
			$info    .= "From: AMRETIFICA Site <contato@site1389989486.provisorio.ws>\r\n";
			$info    .= "Return-Path: <contato@site1389989486.provisorio.ws>\r\n";
			$info 	 .= "X-Priority: * 3 
	                    X-Priority: * 3 
	                    X-MSMail-Priority: * Normal 
	                    X-Mailer: * Microsoft Outlook Express 6.00.2800.1106 
	                    X-MimeOLE: * Produced By Microsoft MimeOLE V6.00.2800.1106 
	                    X-Virus-Scanned: * by AMaViS perl-11";
			
			$mensagem = "
				<html xmlns='http://www.w3.org/1999/xhtml'>
					<head>
						<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
					</head>
					<body>
						<p>
							$bodyMsg
						</p>
					</body>
				</html>
			";
			$bool = mail($para, $titulo, $mensagem, $info, "fcontato@site1389989486.provisorio.ws");
			
			if($bool)
				$this->Session->setFlash(__('A mensagem foi enviada.'),'default',array('class' => 'sucesso'));
			else 
				$this->Session->setFlash(__('A mensagem não foi enviada.'),'default',array('class' => 'erro'));
		*/
		}
    }
	
}
?>