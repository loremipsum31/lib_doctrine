<?php
// include class.secure.php to protect this file and the whole CMS!
if (defined('WB_PATH')) {
	include(WB_PATH.'/framework/class.secure.php');
} else {
	$root = "../";
	$level = 1;
	while (($level < 10) && (!file_exists($root.'/framework/class.secure.php'))) {
		$root .= "../";
		$level += 1;
	}
	if (file_exists($root.'/framework/class.secure.php')) {
		include($root.'/framework/class.secure.php');
	} else {
		trigger_error(sprintf("[ <b>%s</b> ] Can't include class.secure.php!", $_SERVER['SCRIPT_NAME']), E_USER_ERROR);
	}
}
// end include class.secure.php

/** @var \Composer\Autoload\ClassLoader $classLoader */
$classLoader = require LEPTON_PATH . "/modules/lib_doctrine/vendor/autoload.php";

require_once 'vendor/doctrine/inflector/lib/Doctrine/Common/Inflector/Inflector.php';
$inflector = new \Doctrine\Common\Util\Inflector();
$isDevMode = true;
$paths = array();
foreach(glob(LEPTON_PATH . '/modules/*') as $file){
	if(is_dir($file . '/Entity')){
		$paths[] = $file . '/Entity';
		$classLoader->addPsr4(ucfirst($inflector->camelize(end(explode('/', $file)))) . '\\', $file, true);
	}
}
$classLoader->register(true);
$classLoader->setUseIncludePath(true);

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\Common\Annotations\AnnotationReader;


$cache = new \Doctrine\Common\Cache\ArrayCache();

$reader = new AnnotationReader();
$driver = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($reader, $paths);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$config->setMetadataCacheImpl( $cache );
$config->setQueryCacheImpl( $cache );
$config->setMetadataDriverImpl( $driver );
$config->setProxyDir(LEPTON_PATH . '/temp');

//$config->setFilterSchemaAssetsExpression('/^lep_mod_news_events[@=]*/');

$dbParams = array(
	'driver'   => 'pdo_mysql',
	'user'     => DB_USERNAME,
	'password' => DB_PASSWORD,
	'dbname'   => DB_NAME,
	'host'     => DB_HOST,
	'charset'  => 'utf8',
	'driverOptions' => array(
		1002 => 'SET NAMES utf8'
	)
);

global $entityManager;
$entityManager = EntityManager::create($dbParams, $config);