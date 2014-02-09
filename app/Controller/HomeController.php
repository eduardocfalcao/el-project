<?php

App::uses('AppController', 'Controller');

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
			$email = new CakeEmail();
			$email->viewVars($this->request->data['Contato']);
			$email->template('contato')
			    ->emailFormat('html')
			    ->to('eduardo.cfalcao@gmail.com')
			    ->from('contato@premioparticipacaoinfantil.org.br')
			    ->send();
			    
			    
		}
    }
	
}
?>