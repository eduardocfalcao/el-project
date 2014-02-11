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
			
			$this->Session->setFlash('O Responsбvel foi salvo.','default', array('class' => 'sucesso'));
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
			$this->Session->setFlash(__('A inscriзгo jб estб concluнda e nгo й possнvel acessar a pбgina.'),'default', array('class' => 'aviso'));
			$this->redirect(array('controller' => 'Instituicao',
								  'action' => 'minhaconta'));	
		}
	}
	
	
}


?>