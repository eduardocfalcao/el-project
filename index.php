<?PHP
	header("Content-Type: text/html; charset=ISO-8859-1",true);
	
	require_once('dependencias/smarty/Smarty.class.php');
    require_once('dependencias/xajax_2/xajax.inc.php');
	require_once("dependencias/wideimage/WideImage.php");
	require_once 'Doctrine-2.2.1/lib/Doctrine/ORM/Tools/Setup.php';
	require_once('Framework/EntityManagerProvider.php');

	$lib = "Doctrine-2.2.1/lib";
	Doctrine\ORM\Tools\Setup::registerAutoloadDirectory($lib);
	$classLoader = new \Doctrine\Common\ClassLoader('Controller','');
	$classLoader->register();
	$classLoader2 = new \Doctrine\Common\ClassLoader('Framework','');
	$classLoader2->register();
	
	$emProvider = new EntityManagerProvider();
	$emProvider->Init();
	
	$isAdminRoute = isset($_GET["admin"]) && $_GET["admin"] == 1 ?  true : false;
	//$defaultAction = $isAdminRoute ? "IndexAdmin" : "Index";
	
    $action = isset($_GET["action"]) && $_GET["action"] != "" ? strtolower($_GET["action"]) : "Index";
    $param = isset($_GET["param"]) && $_GET["param"] != "" ? (int)$_GET["param"] : NULL;
	$param2 = isset($_GET["param2"]) && $_GET["param"] != "" ?  $_GET["param2"] : NULL;
	
	
	$classDefault =  $isAdminRoute ? "Admin" : "Home";
	$classNamespace = $isAdminRoute ? "\\Controller\\Admin\\" : "\\Controller\\";
	
	$className = isset($_GET["class"]) && $_GET["class"] != "" ? $_GET["class"] : $classDefault;
    $controller = $classNamespace.$className."Controller";
	
	$xajax = new xajax();
	$xajaxResponse = new xajaxResponse();
    $smarty = new Smarty();
	$uploader = new \Framework\ImageUploader();
	
    $page =  new $controller($xajax,$smarty);
	$page->setXajaxResponse($xajaxResponse);
	$page->setEntityManager($emProvider->getEntityManager());
	$page->setView($action);
	$page->setPath($className);
	if($isAdminRoute)
	{
		$page->setUploader($uploader);
	}
	
	$page->beforeCallAction();	
    if($param != NULL)
	{
		if($param2 != NULL)
			$page->$action($param,$param2);
		else
        	$page->$action($param);
	}
    else   
	{
        $page->$action();
	}
	$bool = strpos($action,"json") > 0;
	if($bool == false)
	{
		$page->beforeShowAction();
		$page->show();
	}
		
?>