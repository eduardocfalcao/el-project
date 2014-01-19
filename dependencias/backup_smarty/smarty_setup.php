<?php
require('Smarty.class.php');

class Smarty_seav extends Smarty {
	function Smarty_seav()
	{
	$this->Smarty();
	$this->template_dir = 'C:\\Program Files (x86)\\EasyPHP5.3.0\\www\\seavsustentavel\\templates\\';
	$this->compile_dir  = 'C:\\Program Files (x86)\\EasyPHP5.3.0\\www\\seavsustentavel\\templates_c\\';
	$this->config_dir   = 'C:\\Program Files (x86)\\EasyPHP5.3.0\\www\\seavsustentavel\\configs\\';
	$this->cache_dir    = 'C:\\Program Files (x86)\\EasyPHP5.3.0\\www\\seavsustentavel\\cache\\';
	$this->caching = true;
	$this->assign('app_name', 'seav');
	}
}
?>