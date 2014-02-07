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
			$this->request->data['Projeto']['periodoInicio'] = $this->extractDateToSqlFormat($this->request->data['Projeto']['periodoInicio']);
			$this->request->data['Projeto']['periodoFim'] = $this->extractDateToSqlFormat($this->request->data['Projeto']['periodoFim']);
			
			$this->Projeto->save($this->request->data);
			if($id == null)
				$this->Projeto->create();
			
			$this->Session->setFlash('O projeto foi salvo.','default', array(), 'sucesso');
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
	
	protected function extractDateToSqlFormat($data)
	{
		list($d, $m, $y) = explode('/', trim($data));
		$mk= mktime(0, 0, 0, $m, $d, $y);
		$data = strftime('%Y-%m-%d',$mk);
		return $data;
	}	
		
}

?>