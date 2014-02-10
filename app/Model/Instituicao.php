<?php

App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class Instituicao extends AppModel {
	
	public $useTable = "Instituicao";

	public $hasOne = array(
		'Responsavel' => array(
			'className' => 'Responsavel',
			'foreignKey' => 'instituicao_id',
	        'conditions' => array(),
      	),
      	'Projeto' => array(
			'className' => 'Projeto',
			'foreignKey' => 'instituicao_id',
	        'conditions' => array(),
      	)
   	);
   	
   	
   	public function editarInscricao()
   	{
		if($this->data[$this->alias]['concluido'] == false)
		{
			return false;
		}
		else
		{
			$this->data[$this->alias]['concluido'] = false;
			return true;
		}
	}	
}

?>