<?php
namespace Controller\Admin;

abstract class AdminBaseController extends \Controller\PageController{
	
	public function __construct($xajax, $smarty)
	{
		parent::__construct($xajax, $smarty);
	}
	
	public function beforeCallAction()
	{	
		//if($this->PrecisaEstarLogado() && \Controller\Admin\Services\AdminService::IsAuthenticate() == false)
			//$this->redirect("admin/Portal/Login");
	}
	
	protected $uploader;
	
	public function setUploader($value){ $this->uploader = $value; }
	public function getUploader($value){ return $this->uploader; }
	
	/*
	* Funcao para classes que nao precisam de login sobrescrevelas. 
	* Quando for necessario acessar sem estar autenticado.
	* @return bool
	*/
	protected function PrecisaEstarLogado()
	{
		return true;
	}
	
	protected function carregarCategorias($catid = null)
	{
		$qb = $this->em->createQueryBuilder();
		$qb->select("c")
			->from("\Model\Categoria","c")
			->where("c.deletado = 0");		
		if($catid != null)
		{
			$qb->andWhere("c.id != :id");
			$qb->setParameter("id",$catid);
		}
		
		$caterogias = $qb->getQuery()
						 ->getResult();
			
		$result = array();
		$result[""] = "- Selecione uma categoria - ";
		foreach($caterogias as $categoria)
		{
			$result[$categoria->getId()] = $categoria->caminho();
		} 
		$this->set("categorias", $result);
	}
}

?>