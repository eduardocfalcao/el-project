<?php

class ApplicationContext
{	
	public function __construct()
	{
		
	}
	
	private $emProvider;
	
	public function Init()
	{
		$classLoader = new \Doctrine\Common\ClassLoader('Controller','');
		$classLoader->register();
		$classLoader = new \Doctrine\Common\ClassLoader('Framework','');
		$classLoader->register();
		
		$this->emProvider = new \Framework\EntityManagerProvider();
		$this->emProvider->init();
	}
	
	public function getEntityManager()
	{
		$this->emProvider->getEntityManager();
	}
		
}

?>