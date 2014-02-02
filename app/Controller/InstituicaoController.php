<?php
App::uses('AppController', 'Controller');

class InstituicaoController extends AppController {


	public function Cadastro()
	{
		if ($this->request->is('post')) 
	 	{
	 		if ($this->data['Instituicao']['senha'] == $this->data['Instituicao']['confirmarSenha']) 
	 		{
				if ($this->Instituicao->save($this->request->data))
				{
					$this->Instituicao->create();
					$this->Session->setFlash(__('Instituição criada.'));
				}
				else
				{
					$this->Session->setFlash(__('Não foi possivel criar a instituição.'));
				}
			} 
			else 
			{
			    $this->Session->setFlash(__('As senhas não conferem.'));
			}
		}		
	}
	
	public function Login()
	{
		if ($this->request->is('post')) 
		{
	        if ($this->Auth->login($this->data['Instituicao'])) 
	        {
	            return $this->redirect(array('action' => 'minhaconta'));
	        } 
	        else 
	        {
	            $this->Session->setFlash(__('Usuário ou senha incorretos'));
	        }
		}
	}
	
	public function minhaconta()
	{
		
	}
	
	public function logout()
	{
		$this->Auth->logout();
		$this->redirect(array('controller' => 'instituicao',
								  'action' => 'login'));
	}
}

?>