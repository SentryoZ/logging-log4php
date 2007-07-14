<?php
define('LOG4PHP_DIR', dirname(__FILE__).'/../log4php');
define('LOG4PHP_CONFIGURATION', 'mdc.properties');

require_once LOG4PHP_DIR.'/LoggerManager.php';

LoggerMDC::put('username', 'knut');

$logger = LoggerManager::getRootLogger();
$logger->debug("Testing MDC");
?>