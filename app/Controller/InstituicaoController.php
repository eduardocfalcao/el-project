<?php

include_once(APP.'class'.DS.'tcpdf'.DS.'tcpdf.php');
include_once(APP."class".DS."PHPJasperXML.inc.php");

App::uses('AppController', 'Controller');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');
App::uses('CakeEmail', 'Network/Email');

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
					$this->request->data = null;
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
	
	private function gerarSenha()
	{
		$caracteres = array("1","2","3","4","5","6","7","8","9","0",
							"a","b","c","d","e","f","g","h","i","j",
							"l","m","n","o","p","q","r","s","t",
							"u","v","x","z","w","y","k","A","B","C",
							"D","E","F","G","H","I","J","L","M","N",
							"O","P","Q","R","S","T","U","V","X","Z",
							"W","Y","K"
							);
							
		$lenght = 12;
		$password = "";
		for($i =0;$i < $lenght;$i++)
			$password .= $caracteres[rand(0,61)];

		return $password;
	}
	
	public function recuperarsenha()
	{
		if ($this->request->is('post')) 
		{
			if (empty($this->request->data['RecuperarSenha']['email']) == false) 
			{
				$passwordHasher = new SimplePasswordHasher();
				$inst = $this->Instituicao->findByEmail($this->request->data['RecuperarSenha']['email']);
				if($inst != null)
				{
					$novaSenha = $this->gerarSenha();
					$email = new CakeEmail();
					$email->config('contato');
					
					if($email->viewVars(array("senha" => $novaSenha))
							->template('recuperarsenha')
						    ->emailFormat('html')
						    ->to($inst["Instituicao"]["email"])
						    ->subject('Recuperação de senha')
						    ->from('contato@premioparticipacaoinfantil.org.br')
						    ->send())
				    {
				    	$this->request->data['Instituicao']['id'] = $inst['Instituicao']['id'];
						$this->request->data['Instituicao']['senha'] = $passwordHasher->hash($novaSenha); 
						$this->Instituicao->save($this->request->data);
						$this->Session->setFlash(__('Sua senha foi alterada. Ela foi enviada ao seu e-mail. Altere a mesma assim que você entrar no sistema'),'default', array('class' => 'sucesso'));
					}
					else
					{
						$this->Session->setFlash(__('Não foi possível enviar a senha por e-mail e por isso ela não foi alterada'),'default',array('class' => 'erro'));
					}
				
				}
				else
				{
					$this->Session->setFlash(__('E-mail não encontrado.'), 'default',array('class' => 'erro'));
				}
			}
			else
			{
				$this->Session->setFlash(__('Informe um enredeço de e-mail válido.'), 'default',array('class' => 'erro'));
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
		            $this->request->data['Instituicao']['senha'] = "";
		        }
			}
			else
			{
				$this->Session->setFlash(__('Usuário ou senha incorretos'),'default',array('class' => 'erro'));
				$this->request->data['Instituicao']['senha'] = "";
			}
				
	        
		}
	}
	
	public function instituicoes()
	{
		$this->isAdminLogged();
		
		$options = array(
			'fields' => array('Instituicao.id', 'Instituicao.nome','Instituicao.email','Instituicao.telefone','Instituicao.concluido'),
			'order' => array('Instituicao.nome' => 'ASC'),
			'limit' => 10
		);

		$this->paginate = $options;

		// Roda a consulta, já trazendo os resultados paginados
		$instituicoes = $this->paginate('Instituicao');
		
		// Envia os dados pra view
		$this->set('instituicoes', $instituicoes);
	}
	
	public function visualizar($id)
	{
		$this->autoLayout = false;
		$inst = $this->Instituicao->findById($id);
		$this->set("instituicao",$inst );
	}
	
	private $msg = "";
	
	public function minhaconta()
	{
		$this->isLogged();
		
		$instituicao = $this->Instituicao->findByLogin($this->Auth->user('login'));
		
		$finalizado = $instituicao["Instituicao"]['concluido'];
		
		$podeFinalizar = $this->validaInscricao($instituicao) && $finalizado == false;
		
		$this->set("finalizado",$finalizado);
		$this->set("validacao",$this->msg);
		$this->set('podeFinalizar', $podeFinalizar);
	}
	
	public function detalhes($id = NULL) 
	{
		$this->isLogged();
		$this->verificarSePodeEditar();
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
		$this->verificarSePodeEditar();
		$instituicao = $this->Instituicao->findByLogin($this->Auth->user('login'));
		$this->set("instituicao",$instituicao);
		
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
		$this->verificarSePodeEditar();
		$instituicao = $this->Instituicao->findByLogin($this->Auth->user('login'));
		
		$this->set("instituicao",$instituicao);
		
		if ($this->request->is('put') || $this->request->is('post')) 
		{	
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
			$this->request->data = $instituicao;
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
				$inst = $this->Instituicao->findByLogin($this->Auth->user('login'));
				$this->request->data['Instituicao']['id'] = $inst['Instituicao']['id'];
				$this->request->data['Instituicao']['senha'] = $passwordHasher->hash($this->request->data['Instituicao']['senha']); 
				$this->Instituicao->save($this->request->data);
				$this->Session->setFlash(__('A senha foi alterada.'),'default', array('class' => 'sucesso'));
			}
			$this->request->data = null;
		}
	}
	
	public function logout()
	{
		$this->isLogged();
		$this->Auth->logout();
		$this->redirect(array('controller' => 'instituicao',
								  'action' => 'login'));
	}
	
	public function concluir()
	{
		$instituicao = $this->Instituicao->findByLogin($this->Auth->user('login'));
		$msg = "";
		if($this->concluirInscricao($instituicao))
		{
			$this->Instituicao->read(null, $instituicao["Instituicao"]["id"]);
			$this->Instituicao->set( array("concluido" => true));
			
			$this->Instituicao->save();
			$this->Session->setFlash(__('A inscrição foi finalizada.'). $msg,'default', array('class' => 'sucesso'));
			$this->redirect(array('controller' => 'instituicao',
								  'action' => 'minhaconta'));
		}
		else
		{
			$this->Session->setFlash(__('Não foi possível concluir. Motivo:'). $msg,'default', array('class' => 'sucesso'));
			$this->redirect(array('controller' => 'instituicao',
								  'action' => 'minhaconta'));
		}
		
	}
	
	public function editar()
	{
		$instituicao = $this->Instituicao->findByLogin($this->Auth->user('login'));
		$msg = "";
		if($this->editarInscricao($instituicao))
		{
			$this->Instituicao->read(null, $instituicao["Instituicao"]["id"]);
			$this->Instituicao->set( array("concluido" => false));
			$this->Instituicao->save();
			
			$this->Session->setFlash(__('A inscrição está em edição.'),'default', array('class' => 'sucesso'));
			$this->redirect(array('controller' => 'Instituicao',
								  'action' => 'minhaconta'));
		}
		else
		{
			$this->Session->setFlash(__('A inscrição já está no modo de edição'),'default', array('class' => 'aviso'));
			$this->redirect(array('controller' => 'Instituicao',
								  'action' => 'minhaconta'));
		}
	}
	
	public function relatorio()
	{
		$this->isLogged();
		$instituicao = $this->Instituicao->findByLogin($this->Auth->user('login'));
		
		$this->gerarRelatorio($instituicao["Instituicao"]["id"]);
	}
	
	public function relatorioAdmin($id)
	{
		$this->isAdminLogged();
		$this->gerarRelatorio($id);
	}
	
	private function gerarRelatorio($instituicaoId, $method = "D")
	{
		$PHPJasperXML = new PHPJasperXML();
		//$PHPJasperXML->debugsql=true;
		
		$instituicao = $this->Instituicao->findById($instituicaoId);
		
		$params = array();
		$params["id"] = $instituicaoId;
		foreach($instituicao["Instituicao"] as $key => $value)
		{
			$params["instituicao_". $key] = $value;
		}
		
		foreach($instituicao["Projeto"] as $key => $value)
		{
			$params["projeto_". $key] = $value;
		}
		
		foreach($instituicao["Responsavel"] as $key => $value)
		{
			$params["responsavel_". $key] = $value;
		}
		
		$PHPJasperXML->arrayParameter=$params;
		
		$PHPJasperXML->load_xml_file(APP."relatorio".DS."instituicao.jrxml");
		
		$dataSource = ConnectionManager::getDataSource('default');
		
		$PHPJasperXML->transferDBtoArray($dataSource->config['host'], 
										 $dataSource->config['login'],
										 $dataSource->config['password'],
										 $dataSource->config['database']);
		$fileName = "instituicao_". $instituicaoId. ".pdf";
		
		if($method == "F")
		{
			$fileName = APP. "zips".DS."pdfs".DS.$fileName;	
		}								 
		$PHPJasperXML->outpage($method, $fileName);
		return $fileName;
	}
	
	public function downloadInscricao($instituicaoId)
	{
		$fileName = $this->gerarZip($instituicaoId);
		
		echo "<br />".$zipFileName;
		$this->download($fileName, 'zips'.DS);
	}
	
	private function gerarZip($instituicaoId)
	{
		$zip = new ZipArchive();
		
		$instituicao = $this->Instituicao->findById($instituicaoId);
		$zipFileName = 'instituicao_'. $instituicaoId .'.zip';
		$zipFilePath = APP."zips".DS. $zipFileName;
		$dir = new Folder();
		$pdfFilePath = $this->gerarRelatorio($instituicaoId, "F");
 		
		if( $zip->open($zipFilePath, ZipArchive::OVERWRITE)  === true){
		    echo "entrou no open";
		    $zip->addFile($pdfFilePath, "instituicao_". $instituicaoId. ".pdf");
		    
		     $anexos = array("documentoEstatuto", "documentoAssembleia", "documentoComprovanteEndereco",
								 "documentoResponsavelRg", "documentoResponsavelCpf","documentoDeclaracao",
								 "documentoCnpj", "documentoContratoSocial","anexo1", "anexo2", "anexo3", "anexo4");
		    
		    foreach($anexos as $value){
		    	if($this->anexoExiste($instituicao["Instituicao"][$value])){
		    		$zip->addFile(WWW_ROOT."uploads".DS."anexos".DS.$instituicao["Instituicao"][$value], $instituicao["Instituicao"][$value]);
		    	}
			}
		    $zip->close();
		}
		
		return $zipFileName;
	}
	
	private function anexoExiste($anexo)
	{
		$f = new File(WWW_ROOT."uploads".DS."anexos".DS.$anexo);
		return $f->exists();
	}
	
	public function validaInscricao($instituicao)
	{
		if(empty($instituicao["Instituicao"]['telefone']))
		{
			$this->msg = "O formulário da instituicão ainda não foi preenchido.";
			return false;
		}
		else if(empty($instituicao['Responsavel']))
		{
			$this->msg = "O formulário dao responsável legal ainda não foi preenchido.";
			return false;
		}
		else if(empty($instituicao['Projeto']))
		{
			$this->msg = "O formulário do projeto ainda não foi preenchido.";
			return false;
		}
		else if(empty($instituicao['Projeto']) == false)
		{
			foreach($this->validacaoProjeto as $key => $value)
			{
				if(empty($instituicao["Projeto"][$key]))	
				{
					$this->msg = "No formulário de projeto, está faltando o preencher o seguinte campo obrigatório: ".$value.".";	
					return false;
				}
			}
		}
		else
		{
			foreach($this->documentos as $key => $value)
			{
				if(empty($instituicao["Instituicao"][$key]))	
				{
					$this->msg = "No formulário de documentos, está faltando o seguinte documento: ".$value.".";	
					return false;
				}
			}
		}
		return true;
	}
	
	private $validacaoProjeto = array(
		"nome"       					=> "Nome",
		"responsavel"     				=> "Responsável",
		"equipe" 						=> "Equipe",
		"periodoInicio" 				=> "Período de realização do projeto - Início",
		"periodoFim" 					=> "Período de realização do projeto - Fim",
		"objetivos" 					=> "Objetivos",
		"justificativa" 				=> "Justificava",
		"metodologia" 					=> "Metodologia",
		"atividades" 					=> "Atividades",
		"resultados" 					=> "Resultados",
		"planoUtilizacaoRecurso" 		=> "Plano de reutilização do recurso, caso vença o prêmio",
		"uf" 							=> "Estado",
		"municipio" 					=> "Município",
		"criancasEnvolvidas" 			=> "Crianças envolvidas"
	);
	
	private $documentos = array(
		"documentoComprovanteEndereco" 	=> "Cópia do comprovante de endereço da instituição",
		"documentoResponsavelRg" 		=> "Cópia do RG do responsável legal",
		"documentoResponsavelCpf" 		=> "Cópia do CPF do responsável legal",
		"documentoDeclaracao" 			=> "Declaração de envio dos documentos.",
		"documentoCnpj" 				=> "Cópia do CNPJ"
	);
	
	private function concluirInscricao($instituicao)
	{
		if($instituicao["Instituicao"]['concluido'] == true)
		{
			$this->msg = "A inscrição já foi concluída";
			return false;
		}
		else if($this->validaInscricao($instituicao))
		{
			$instituicao["Instituicao"]['concluido'] = true;
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function editarInscricao($instituicao)
   	{
		if($instituicao["Instituicao"]['concluido'] == false)
		{
			return false;
		}
		else
		{
			$instituicao["Instituicao"]['concluido'] = false;
			return true;
		}
	}	
	
	public function download($file, $path = null)
	{ 
	    $this->viewClass = 'Media';
	    if($path == null)
	    	$path = WWW_ROOT.'uploads'.DS.'anexos'.DS;
	    $extensoes =  explode(".", $file);
		$ext = strtolower(end($extensoes));
	    // in this example $path should hold the filename but a trailing slash
	    $params = array(
	        'id' => $file,
	        'name' => $file,
	        'download' => true,
	        'extension' => $ext,
	        'path' => $path
	    );
	    
	    print_r($params);
	    $this->set($params);
	}
	
	private function verificarSePodeEditar()
	{
		$instituicao = $this->Instituicao->findByLogin($this->Auth->user('login'));
		$this->set("finalizado",$instituicao["Instituicao"]["concluido"]);
		if($instituicao["Instituicao"]["concluido"])
		{
			$this->Session->setFlash(__('A inscrição já está concluída e não é possível acessar a página.'),'default', array('class' => 'aviso'));
			$this->redirect(array('controller' => 'Instituicao',
								  'action' => 'minhaconta'));	
		}
	}
}

?>