<?php

class Projeto extends AppModel {

   	public $useTable = 'Projeto';

	public $belongsTo = array(
		'Instituicao' => array(
		'className' => 'Instituicao',
        'foreignKey' => 'instituicao_id',
        'conditions' => array(),
        'dependent' => true
      	)
   	);

}
?>