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
	
	public function beforeFilter()
	{
		$this->Auth->allow();
		$this->Auth->deny(array('controller' => 'Instituicao', 'action' => 'minhaconta'));
		$this->Auth->deny(array('controller' => 'Instituicao', 'action' => 'detalhes'));
		$this->Auth->deny(array('controller' => 'Instituicao', 'action' => 'projeto'));
		$this->Auth->deny(array('controller' => 'Instituicao', 'action' => 'responsavel'));
		$this->Auth->deny(array('controller' => 'Instituicao', 'action' => 'anexos'));
		$this->Auth->deny(array('controller' => 'Instituicao', 'action' => 'documentos'));
		$this->Auth->deny(array('controller' => 'Instituicao', 'action' => 'alterarsenha'));
		
		$usuario = null;
		
		if($this->Auth->loggedIn())
		{
			$usuario = $this->Auth->user();
		}		
		
		$this->set('usuario', $usuario);
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
			return $this->Auth->user('perfil') == 2;
			//jogar execao de nao autorizado
		}
    }
	
	public $helpers = array('Html', 'Form', 'Session');
	
	public $components = array(
							'Session',
						    'Auth' => array(
						    	'Form' => array (
				    				'userModel' => 'Instituicao',
				    			 ),
						        'loginAction' => array(
						            'controller' => 'Instituicao',
						            'action' => 'login',
						        ),
						        'authError' => 'Did you really think you are allowed to see that?',
						        'authenticate' => array(
						         	'Form' => array(
							            'fields' => array('username' => 'login','password' => 'senha' ),
							            'passwordHasher' => array(
						                    'className' => 'SimplePasswordHasher'
						            	)
					            	)
					        	)
						    )
						);
}
