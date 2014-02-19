<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	public $helpers = array('Html', 'Form', 'Session');
	public $uses = array('Instituicao');
	
	public $components = array(
							'Session',
						    'Auth' => array(
						        'loginAction' => array(
						            'controller' => 'Instituicao',
						            'action' => 'login',
						        ),
						        'authError' => 'Did you really think you are allowed to see that?',
						        'authenticate' => array(
						         	'Form' => array(
						         		'userModel' => 'Instituicao',
							            'fields' => array('username' => 'login','password' => 'senha' ),
							            'passwordHasher' => array(
						                    'className' => 'SimplePasswordHasher'
						            	)
					            	)
					        	)
						    )
						);
	
	 public function beforeFilter() {
        parent::beforeFilter();
		$this->Auth->allow();
		$this->Auth->deny(array('controller' => 'Instituicao', 'action' => 'minhaconta'));
		$this->Auth->deny(array('controller' => 'Instituicao', 'action' => 'detalhes'));
		$this->Auth->deny(array('controller' => 'Instituicao', 'action' => 'projeto'));
		$this->Auth->deny(array('controller' => 'Instituicao', 'action' => 'responsavel'));
		$this->Auth->deny(array('controller' => 'Instituicao', 'action' => 'anexos'));
		$this->Auth->deny(array('controller' => 'Instituicao', 'action' => 'documentos'));
		$this->Auth->deny(array('controller' => 'Instituicao', 'action' => 'alterarsenha'));
		
		$usuario = null;
		$perfil = null;
		if($this->Auth->loggedIn())
		{
			$usuario = $this->Auth->user();
			$instituicao = $this->Instituicao->findByLogin($this->Auth->user('login'));
			$perfil = $instituicao["Instituicao"]['perfil'];
		}		
		
		$this->set('usuario', $usuario);
		$this->set('perfilUsuario', $perfil);
	}
	
	 public function isLogged() {
 		
		if($this->Auth->loggedIn() == false)
		{
			$this->redirect(array('controller' => 'Instituicao',
								  'action' => 'login'));
		}
    }
    
    public function isAdminLogged() 
    {
    	if($this->Auth->loggedIn())
    	{
    		$instituicao = $this->Instituicao->findByLogin($this->Auth->user('login'));
			if(isset($instituicao["Instituicao"]['perfil']) == false || $instituicao["Instituicao"]['perfil'] != 2)
			{
				$this->redirect(array('controller' => 'Instituicao',
								  'action' => 'minhaconta'));
			}
		}
		else
		{
			$this->redirect(array('controller' => 'Instituicao',
								  'action' => 'login'));
		}
    }
	
	
}
