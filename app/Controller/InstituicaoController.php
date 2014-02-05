<?php
App::uses('AppController', 'Controller');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
App::uses('Folder', 'Utility');  
App::uses('File', 'Utility');  

class InstituicaoController extends AppController {

	public $uses = array('Instituicao','Projeto','Reponsavel');

	public function Cadastro()
	{
		if ($this->request->is('post')) 
	 	{
	 		if ($this->data['Instituicao']['senha'] == $this->data['Instituicao']['confirmarSenha']) 
	 		{
				if ($this->Instituicao->save($this->request->data))
				{
					$this->Instituicao->create();
					$this->Session->setFlash(__('Instituição criada.'));
				}
				else
				{
					$this->Session->setFlash(__('Não foi possivel criar a instituição.'));
				}
			} 
			else 
			{
			    $this->Session->setFlash(__('As senhas não conferem.'));
			}
		}		
	}
	
	public function Login()
	{
		if ($this->request->is('post')) 
		{
	        if ($this->Auth->login($this->data['Instituicao'])) 
	        {
	            return $this->redirect(array('action' => 'minhaconta'));
	        } 
	        else 
	        {
	            $this->Session->setFlash(__('Usuário ou senha incorretos'));
	        }
		}
	}
	
	public function minhaconta()
	{
		
	}
	
	public function detalhes($id = NULL) 
	{
		if ($this->request->is('put')) 
		{	
			$this->Instituicao->id = $id;
			$this->Instituicao->save($this->request->data);
			$this->Session->setFlash(__('A instituição foi salva.'));
		}
		else
		{
			$instituicao = $this->Instituicao->findByLogin($this->Auth->user('login'));
			$this->request->data = $instituicao;
		}
	}	
	
	public function anexos()
	{
		if ($this->request->is('put') || $this->request->is('post')) 
		{	
			$files = $this->request->data;
			//foreach
			//Ok, com diretório devidamente criado, vamos declarar o arquivo temporário  
			$arquivo_tmp = new File($arquivo['tmp_name'],false);  
			  
			//pegar os dados dele  
			$dados = $arquivo_tmp->read();  
			  
			//e fecha-lo  
			$arquivo_tmp->close();  
			  
			//agora vamosc riar nosso arquivo  
			$arquivo_nome = new File($diretorio.DS.$arquivo['name'],false,0644);  
			  
			//cria-lo  
			$arquivo_nome->create();  
			  
			//escrever os dados armazenados  
			$arquivo_nome->write($dados);  
			  
			//e feixar o arquivo  
			$arquivo_nome->close();  
			//$this->Session->setFlash(__('Os arquivos foram salvos.'));
		}
		else
		{
			$instituicao = $this->Instituicao->findByLogin($this->Auth->user('login'));
			$this->request->data = $instituicao;
		}
	}
	
	public function alterarsenha()
	{
		if ($this->request->is('post')) 
		{
			$passwordHasher = new SimplePasswordHasher();
			//pegar a senha do banco do usuario
			if($this->request->data['Instituicao']['senhaAtual'] != $this->Auth->user('senha'))	
			{
				 $this->Session->setFlash(__('Senha atual incorreta.'));
			}
			else if($this->request->data['Instituicao']['senha'] != $this->request->data['Instituicao']['repetirSenha'])
			{
				 $this->Session->setFlash(__('As senhas não conferem.'));
			}
			else
			{
				$this->Instituicao->save($this->request->data);
				$this->Session->setFlash(__('Senha alterada.'));
			}
		}
	}
	
	public function logout()
	{
		$this->Auth->logout();
		$this->redirect(array('controller' => 'instituicao',
								  'action' => 'login'));
	}
}

?>