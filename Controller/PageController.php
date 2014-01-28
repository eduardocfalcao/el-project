<?php

namespace Controller;

abstract class PageController
{
    protected $url = "/el-project/";
    protected $img;
    protected $jspath;
    protected $smarty;
    protected $xajax;
    protected $xajax_js;
	protected $fotopath;
	private $view;
	private $path;
	private $msg;
	protected $css;
	protected $javascript;
	protected $scriptSection;
	protected $usuario;
	protected $em;
	private $xajaxReponse;
	protected $isAdmin = false;
	
	public function __construct($xajax, $smarty)
    {
    	$this->xajax = $xajax;
      	$this->smarty = $smarty;
      	$sBaseDir = "";
      	$this->smarty->template_dir = $sBaseDir.'view/';
      	$this->smarty->compile_dir = 'tmp/';
      	$this->smarty->config_dir = $sBaseDir.'conf/';
      	$this->smarty->cache_dir = $sBaseDir.'tmp/';
      	$this->smarty->caching = false;
      	$this->smarty->cache_lifetime = 0;
      	$this->img = $this->url."images/";
	  	$this->fotopath = $this->img."fotos/";
	    $this->jspath = $this->url."js/";
      	//$this->xajax->configure('javascript URI', 'xajax/');
    }
	
	//properties
	public function setXajaxResponse($response){ $this->xajaxReponse = $response; }
	public function getAjaxResponse(){ return $this->xajaxReponse; }
	public function setEntityManager($em){ $this->em = $em; }
	public function setView($value){ $this->view = strtolower($value);}
	public function getView() { return $this->view; }
	public function setPath($value){ $this->path = strtolower($value);}
	public function set($var,$value){ $this->smarty->assign($var,$value);}
	public function setJsFunction($functionName)
	{	
		$this->xajax->registerFunction(array($functionName,$this,$functionName));
	}
	
	public function SetViewMessage($messageText,$mode)
	{
		$this->msg = array('tipo' => '', 'msg' => '');
		$this->msg['msg'] =  $messageText;
		$this->msg['tipo'] = $mode;
	}
	
	public function SetViewAjaxMessage($response, $messageText,$mode)
	{
		$response->addScript("showMessage('$messageText','$mode')");
	}
	
	public function isPostBack()
	{
		return isset($_POST["postback"]) && $_POST["postback"] == "true";
	}
	
	protected function setUrlBack($url)
	{
		if(!isset($_SESSION))
			session_start();
		$_SESSION['urlback'] = $url;
	}
	protected function getUrlBack()
	{
		if(!isset($_SESSION))
			session_start();
		$url = isset($_SESSION['urlback']) && $_SESSION['urlback'] != "" ? $_SESSION['urlback'] : NULL;
		unset($_SESSION['urlback']);
		return $url;
	}
	
	/**
	* Funcao para ser herdada. Pode ser utilizada quando se quer processar algo antes da chamada da action.
	*/
	public function beforeCallAction()
	{
		
	}
	
	/**
	* Funcao para ser herdada. Pode ser utilizada quando se quer processar algo antes da exibicao da action.
	*/
	public function beforeShowAction()
	{
		
	}
	
	public function show()
	{
		$this->set('url',$this->url);
		$this->set('img',$this->img);
		$this->set('fotos',$this->fotopath);
		$this->set('css',$this->css);
		$this->set('js',$this->javascript);
		$this->set('message',$this->msg);

        $this->setCurrentUser();
		
		$this->xajax->debugOff();
		$this->xajax->processRequests();
		$this->xajax_js = $this->xajax->getJavascript($this->url .'dependencias/xajax_2');
		$this->set('xajax',$this->xajax_js);
		$this->smarty->display($this->path."/".$this->view.".tpl");
	}

    private function setCurrentUser()
    {
        if(\Framework\LoginService::IsUserAuthenticate())
        {
            $userInfo = \Framework\LoginService::GetUserSessionInfo();
            $this->set("usuarioLogado",true);
            $this->set("userInfo", $userInfo);
        }
        else
        {
            $this->set("usuarioLogado",false);
        }
    }


    //protected functions
	
	/*
	* Redireciona para outra rota
	* @param string $path Caminho para redirecionar, formato correto : controller/action
	*/
	protected function redirect($path)
	{
		header("Location: $this->url$path");	
	}
	
	protected function extractDateToSqlFormat($data)
	{
		list($d, $m, $y) = explode('/', trim($data));
		$mk= mktime(0, 0, 0, $m, $d, $y);
		$data = strftime('%Y-%m-%d',$mk);
		return $data;
	}

    protected function getLoggedUser()
    {
        $usuario = null;
        if(\Framework\LoginService::IsUserAuthenticate())
        {
            $userInfo = \Framework\LoginService::GetUserSessionInfo();
            $usuario = $this->em->find("\\Model\\Usuario",$userInfo["id"]);
        }
        return $usuario;
    }

	/*
	* 
	*/
	protected function Paginacao($page,$itensPorPagina,$totalItens,$controller,$action,$param1 = NULL)
	{
		$currentPage = $page;
		$anterior = $page - 1;
		$proxima = $page + 1;
		$html = "";
		$pags =  $totalItens / $itensPorPagina;
		
		if($totalItens % $itensPorPagina != 0)
			$pags++;
		
		if($pags > 1)
		{
			if($anterior > 0)
				if($param1 != NULL)
					$html.= "<a href=\"$this->url$controller/$action/$param1/pagina/$anterior\">Anterior</a>";
				else
					$html.= "<a href=\"$this->url$controller/$action/pagina/$anterior\">Anterior</a>";
			for($i = 1; $i <= $pags; $i++)
			{
				if($i != $page)
					if($param1 != NULL)
						$html.= "<a href=\"$this->url$controller/$action/$param1/pagina/$i\">$i</a>";
					else
						$html.= "<a href=\"$this->url$controller/$action/pagina/$i\">$i</a>";
				else
					$html.= "$i";
			}
			
			if($proxima <= $pags)
			{
				if($param1 != NULL)
					$html.= "<a href=\"$this->url$controller/$action/$param1/pagina/$proxima\">Pr&oacute;ximo</a>";	
				else
					$html.= "<a href=\"$this->url$controller/$action/pagina/$proxima\">Pr&oacute;ximo</a>";	
			}		
		}
		return $html;
	}

	
	//funcoes auxiliares de callbacks
	protected function ShowMessage(xajaxResponse $objResponse,$IdDiv)
	{
		$objResponse->addAssign($IdDiv,'innerHTML',utf8_encode($this->msg['msg']));
		$objResponse->addAssign($IdDiv,'className',utf8_encode($this->msg['tipo']));
	}	
}
?>