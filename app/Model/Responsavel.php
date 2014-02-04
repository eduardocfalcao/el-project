<?php

class Responsavel extends AppModel {

   	public $useTable = 'Responsavel';

	public $hasOne = array(
		'Instituicao' => array(
		'className' => 'Instituicao',
        'foreignKey' => 'responsavel_id',
        'conditions' => array(),
        'dependent' => true
      	)
   	);

}
?>
