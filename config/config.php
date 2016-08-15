<?php

require_once("constants.php");
require_once("errors.php");

//Error reporting and handling
ini_set('display_errors', 'On');
error_reporting(E_STRICT);
set_error_handler("dev_error_handler");

//Data source configuration
define("DATASOURCE_TYPE", DATASOURCE_JSON);
define("LOG_FILE",__DIR__ . "/../logs/todo.log");

?>