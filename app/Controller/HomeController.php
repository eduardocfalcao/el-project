<?php

App::uses('AppController', 'Controller');

class HomeController extends AppController {
	
	public function Premio()
	{
		
	}
	
    public function Parceiros()
    {
    }

    public function Edital()
    {
    }

    public function Consideracoes ()
    {
    }

    public function Inscricao()
    {
    }

    public function Contato()
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