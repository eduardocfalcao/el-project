<?php
App::uses('AppController', 'Controller');

class ResponsavelController extends AppController {
	
	public $uses = array('Instituicao','Responsavel');
	
	public function editar($id = null)
	{
		$this->isLogged();
		$this->verificarSePodeEditar();
		if ($this->request->is('post') || $this->request->is('put')) 
		{	
			$this->Responsavel->id = $id;
			$instituicao = $this->Instituicao->findByLogin($this->Auth->user('login'));
			
			$this->request->data['Responsavel']['instituicao_id'] = $instituicao['Instituicao']["id"];
			
			$this->Responsavel->save($this->request->data);
			if($id == null)
				$this->Responsavel->create();
			
			$this->Session->setFlash('O Respons�vel foi salvo.','default', array('class' => 'sucesso'));
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
	
	private function verificarSePodeEditar()
	{
		$instituicao = $this->Instituicao->findByLogin($this->Auth->user('login'));
		$this->set("finalizado",$instituicao["Instituicao"]["concluido"]);
		if($instituicao["Instituicao"]["concluido"])
		{
			$this->Session->setFlash(__('A inscri��o j� est� conclu�da e n�o � poss�vel acessar a p�gina.'),'default', array('class' => 'aviso'));
			$this->redirect(array('controller' => 'Instituicao',
								  'action' => 'minhaconta'));	
		}
	}
	
	
}


?>