<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
App::uses('ConnectionManager', 'Model');


class HomeController extends AppController {
	
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