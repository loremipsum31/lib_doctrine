<?php
// include class.secure.php to protect this file and the whole CMS!
if (defined('WB_PATH')) {
	include(WB_PATH.'/framework/class.secure.php');
} else {
	$oneback = "../";
	$root = $oneback;
	$level = 1;
	while (($level < 10) && (!file_exists($root.'/framework/class.secure.php'))) {
		$root .= $oneback;
		$level += 1;
	}
	if (file_exists($root.'/framework/class.secure.php')) {
		include($root.'/framework/class.secure.php');
	} else {
		trigger_error(sprintf("[ <b>%s</b> ] Can't include class.secure.php!", $_SERVER['SCRIPT_NAME']), E_USER_ERROR);
	}
}
// end include class.secure.php

/** @var $entityManager \Doctrine\ORM\EntityManager */
global $entityManager;
if (!isset($entityManager)) {
	require_once(LEPTON_PATH."/modules/lib_doctrine/library.php");
}

$tool = new \Doctrine\ORM\Tools\SchemaTool($entityManager);

$classes = array(
	$entityManager->getClassMetadata('\Group'),
	$entityManager->getClassMetadata('\Page'),
	$entityManager->getClassMetadata('\Section'),
	$entityManager->getClassMetadata('\User'),
);
$tool->updateSchema($classes, true);