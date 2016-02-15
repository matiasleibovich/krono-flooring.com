<?php
	
	if (!isset($_SESSION['language'])) { $_SESSION['language'] = 'ES'; }
	if ((isset($_REQUEST['language'])) and (strlen($_REQUEST['language']) == 2)) { $_SESSION['language'] = $_REQUEST['language']; }
	include_once('dictionary.php');

?>