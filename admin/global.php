<?PHP
	define("CLASSES", "classes/");
	require_once CLASSES . "config.php";
	require_once CLASSES . "class.sql.php";
	require_once CLASSES . "class.core.php";
	
	$sql = new sql;
	$core = new core;
?>