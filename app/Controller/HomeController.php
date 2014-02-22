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
		$PHPJasperXML->arrayParameter=array("id"=>8);
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
				    ->subject('Formulário de Contato')
				    ->from('contato@premioparticipacaoinfantil.org.br')
				    ->send())
		    {
				$this->Session->setFlash(__('A mensagem foi enviada.'),'default',array('class' => 'sucesso'));
			}
			else
			{
				$this->Session->setFlash(__('A mensagem não foi enviada.'),'default',array('class' => 'erro'));
			}
		}
    }
	
}
?>