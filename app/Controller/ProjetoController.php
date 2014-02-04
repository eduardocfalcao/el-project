<?php


class ProjetoController extends AppController
{
	
	public $uses = array('Instituicao','Projeto');
	
	public function editar($id = NULL)
	{
		if ($this->request->is('post') || $this->request->is('put')) 
		{	
			$this->Projeto->id = $id;
			$instituicao = $this->Instituicao->findByLogin($this->Auth->user('login'));
			
			$this->request->data['Projeto']['instituicao_id'] = $instituicao['Instituicao']["id"];
			
			$this->Projeto->save($this->request->data);
			if($id == null)
				$this->Projeto->create();
			
			$this->Session->setFlash('O projeto foi salvo.');
		}
		else
		{
			$instituicao = $this->Instituicao->findByLogin($this->Auth->user('login'));
			if(isset($instituicao["Projeto"]))
			{
				$projeto = $this->Projeto->findById($instituicao["Projeto"]["id"]);
				$this->request->data = $projeto;
			}
		}
	}
		
}

?>