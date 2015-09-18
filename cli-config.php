<?php
if(!defined('LEPTON_PATH')){
    require_once "../../config.php";
}
global $entityManager;
require_once 'library.php';

use Doctrine\ORM\Tools\Console\ConsoleRunner;

return ConsoleRunner::createHelperSet($entityManager);