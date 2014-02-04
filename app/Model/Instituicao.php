<?php

App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class Instituicao extends AppModel
{
	public $useTable = "Instituicao";
	
	
	public function beforeSave($options = array())
	{
		if(isset($this->data['Instituicao']['senha']))
		{
			$passwordHasher = new SimplePasswordHasher();
			$this->data['Instituicao']['senha'] = $passwordHasher->hash($this->data['Instituicao']['senha']); 
		} 
		return TRUE;
	}


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
}

?>