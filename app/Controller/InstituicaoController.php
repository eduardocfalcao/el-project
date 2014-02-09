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
	 		if ($this->request->data['Instituicao']['senha'] == $this->request->data['Instituicao']['confirmarSenha']) 
	 		{
	 			$passwordHasher = new SimplePasswordHasher();
				$this->request->data['Instituicao']['senha'] = $passwordHasher->hash($this->request->data['Instituicao']['senha']); 
				if ($this->Instituicao->save($this->request->data))
				{
					$this->Instituicao->create();
					$this->Session->setFlash(__('A instituição foi criada. Use o seu login e sua senha para se logar'),'default', array('class' => 'sucesso'));
				}
				else
				{
					$this->Session->setFlash(__('Não foi possivel criar a instituição.'),'default',array('class' => 'erro'));
				}
			} 
			else 
			{
			    $this->Session->setFlash(__('As senhas não conferem.'),'default',array('class' => 'erro'));
			}
		}		
	}
	
	public function Login()
	{
		if ($this->request->is('post')) 
		{
			$passwordHasher = new SimplePasswordHasher();
			$instituicao = $this->Instituicao->find('first', array(
        							'conditions' => array('Instituicao.login' => $this->request->data["Instituicao"]["login"])
    								));
    								
			if($instituicao != null && $instituicao['Instituicao']['senha'] == $passwordHasher->hash($this->request->data["Instituicao"]["senha"]))
			{
				 if ($this->Auth->login($this->data['Instituicao'])) 
		        {
		            return $this->redirect(array('action' => 'minhaconta'));
		        } 
		        else 
		        {
		            $this->Session->setFlash(__('Usuário ou senha incorretos'),'default',array('class' => 'erro'));
		        }
			}
			else
				$this->Session->setFlash(__('Usuário ou senha incorretos'),'default',array('class' => 'erro'));
	        
		}
	}
	
	public function minhaconta()
	{
		$this->isLogged();
	}
	
	public function detalhes($id = NULL) 
	{
		$this->isLogged();
		if ($this->request->is('put')) 
		{	
			$this->Instituicao->read(null, $id);
			
			$this->Instituicao->set($this->request->data["Instituicao"]);
			
			$this->Instituicao->save();
			$this->Session->setFlash(__('A instituição foi salva.'),'default', array('class' => 'sucesso'));
		}
		else
		{
			$instituicao = $this->Instituicao->findByLogin($this->Auth->user('login'));
			$this->request->data = $instituicao;
		}
	}	
	
	public function anexos()
	{
		$this->isLogged();
		$instituicao = $this->Instituicao->findByLogin($this->Auth->user('login'));
		
		if ($this->request->is('put') || $this->request->is('post')) 
		{	
			
			foreach($this->request->data["Anexo"] as $key => $file)
			{
				if(($file['error']) && $file["size"] == 0)
					continue;
				$file_name = $this->upload($file, $key, $instituicao["Instituicao"]["id"]);
				
				$instituicao["Instituicao"][$key] = $file_name;
				
				$this->Instituicao->save($instituicao);
				$this->Session->setFlash(__('Os arquivos foram enviados.'),'default',array('class' => 'sucesso'));
			}			
		}
		else
		{
			$instituicao = $this->Instituicao->findByLogin($this->Auth->user('login'));
			$this->request->data = $instituicao;
		}
	}
	
	public function documentos()
	{
		$this->isLogged();
		if ($this->request->is('put') || $this->request->is('post')) 
		{	
			$instituicao = $this->Instituicao->findByLogin($this->Auth->user('login'));
			foreach($this->request->data["Documentos"] as $key => $file)
			{
				if(($file['error']) || $file["size"] == 0 || $this->isValidFile($file) == false)
				{
					continue;
				}
					
				$file_name = $this->upload($file, $key, $instituicao["Instituicao"]["id"]);
				
				$instituicao["Instituicao"][$key] = $file_name;
			}		
			
			$this->Instituicao->save($instituicao);
			$this->Session->setFlash(__('Os arquivos foram enviados.'),'default', array('class' => 'sucesso'));	
		}
		else
		{
			$instituicao = $this->Instituicao->findByLogin($this->Auth->user('login'));
			$this->request->data = $instituicao;
		}
	}
	
	private function isValidFile()
	{
		return true; //verificar se e exe
	}
	
	private function upload($arquivo, $key, $idInstituicao)
	{
		$dir = new Folder();
		$dir->chmod(WWW_ROOT."uploads", 0755, true);
		
		$dir->chmod(APP."tmp", 0755, true);
		
		$arquivo_tmp = new File($arquivo['tmp_name'], false);  
		$extensoes =  explode(".", $arquivo['name']);
		$ext = strtolower(end($extensoes));
		
		$nome = $idInstituicao."_".$key.".".$ext;
		
		$arquivo_tmp = new File($arquivo['tmp_name'],false);  
		$dados = $arquivo_tmp->read();  
		$arquivo_tmp->close();  
		 
		$arquivo_nome = new File(WWW_ROOT."uploads".DS."anexos".DS.$nome,false,0644);  
		  
		$arquivo_nome->create();  
		$arquivo_nome->write($dados);  
		$arquivo_nome->close();  
		return $nome;	
	}
	
	public function alterarsenha()
	{
		$this->isLogged();
		if ($this->request->is('post')) 
		{
			$passwordHasher = new SimplePasswordHasher();
			//pegar a senha do banco do usuario
			if($this->request->data['Instituicao']['senhaAtual'] != $this->Auth->user('senha'))	
			{
				 $this->Session->setFlash(__('Senha atual incorreta.'),'default', array(), 'erro');
			}
			else if($this->request->data['Instituicao']['senha'] != $this->request->data['Instituicao']['repetirSenha'])
			{
				 $this->Session->setFlash(__('As senhas não conferem.'),'default', array('class' => 'erro'));
			}
			else
			{
				$passwordHasher = new SimplePasswordHasher();
				$this->request->data['Instituicao']['senha'] = $passwordHasher->hash($this->request->data['Instituicao']['senha']); 
				$this->Instituicao->save($this->request->data);
				$this->Session->setFlash(__('A senha foi alterada.'),'default', array('class' => 'sucesso'));
			}
		}
	}
	
	public function logout()
	{
		$this->isLogged();
		$this->Auth->logout();
		$this->redirect(array('controller' => 'instituicao',
								  'action' => 'login'));
	}
}

?>