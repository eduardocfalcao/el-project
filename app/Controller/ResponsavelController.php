<?php
App::uses('AppController', 'Controller');

class ResponsavelController extends AppController {
	
	public $uses = array('Instituicao','Responsavel');
	
	public function editar($id = null)
	{
		if ($this->request->is('post') || $this->request->is('put')) 
		{	
			$this->Responsavel->id = $id;
			$instituicao = $this->Instituicao->findByLogin($this->Auth->user('login'));
			
			$this->request->data['Responsavel']['instituicao_id'] = $instituicao['Instituicao']["id"];
			
			$this->Responsavel->save($this->request->data);
			if($id == null)
				$this->Responsavel->create();
			
			$this->Session->setFlash('O Responsável foi salvo.','default', array('class' => 'sucesso'));
		}
		else
		{
			$instituicao = $this->Instituicao->findByLogin($this->Auth->user('login'));
			if(isset($instituicao["Responsavel"]))
			{
				$responsavel = $this->Responsavel->findById($instituicao["Responsavel"]["id"]);
				$this->request->data = $responsavel;
			}
		}
		
	}
	
	
}


?>