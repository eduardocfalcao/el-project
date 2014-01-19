<?php
/*require_once 'Doctrine-2.2.1/lib/Doctrine/ORM/Tools/Setup.php';
require_once 'Doctrine-2.2.1/lib/Doctrine/ORM/Tools/SchemaTool.php';
require_once 'Doctrine-2.2.1/lib/Doctrine/Common/ClassLoader.php';*/

use Doctrine\ORM\EntityManager,
	Doctrine\ORM\Tools\Setup,
    Doctrine\ORM\Configuration,
	Doctrine\ORM\Tools;

class EntityManagerProvider
{
	private $em;
	private $globalConn;
	private $applicationMode;
	
	public function __construct()
	{
		$this->em = null;
		$this->readXmlConfig();
		$this->applicationMode = "development";
	}
	
	private function readXmlConfig()
	{
		$xml = simplexml_load_file("connectionString.xml");
		foreach ($xml->connection as $connection)
		{
			if($connection->name == "global"){
				$this->globalConn = $connection;
			}
		}
	}
		
	public function init()
	{
		$lib = "Doctrine-2.2.1/lib";
		Doctrine\ORM\Tools\Setup::registerAutoloadDirectory($lib);
		$classLoader = new \Doctrine\Common\ClassLoader('Model','');
		$classLoader->register();
		if ($this->applicationMode == "development") {
		$cache = new \Doctrine\Common\Cache\ArrayCache;
		} else {
		    $cache = new \Doctrine\Common\Cache\ApcCache;
		}

		$config = new Configuration;
		$config->setMetadataCacheImpl($cache);
		$driverImpl = $config->newDefaultAnnotationDriver('Model');
		$config->setMetadataDriverImpl($driverImpl);
		$config->setQueryCacheImpl($cache);
		$config->setProxyDir('Model/proxies');
		$config->setProxyNamespace('Model\Proxies');
		//$config = Setup::createAnnotationMetadataConfiguration(array('models'), true);
		
		if ($this->applicationMode == "development") {
		    $config->setAutoGenerateProxyClasses(true);
		} else {
		    $config->setAutoGenerateProxyClasses(false);
		}
		
		$connectionOptions = array(
		    'dbname' => $this->globalConn->database,
		    'user' => $this->globalConn->user,
		    'password' => $this->globalConn->password,
		    'host' => $this->globalConn->host,
		    'driver' => 'pdo_mysql',
		);
		
		$this->em = EntityManager::create($connectionOptions, $config);
		
		$st = new \Doctrine\ORM\Tools\SchemaTool($this->em);
		$classes = $this->em->getMetadataFactory()->getAllMetadata();
		$st->updateSchema($classes);
	}
	
	public function getEntityManager()
	{
		return $this->em;
	}


}

?>