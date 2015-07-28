<?php
//dico

	if(!isset($_REQUEST['debut'])) exit(0);

	$debut = $_REQUEST['debut'];

	error_log(" RECHERCHE ".$debut);

	if(strlen($debut) < 2) exit(0);

	$lines = file("liste.txt");
	$rep = array();

	foreach($lines as $word) {
		$word = trim($word);
		$len = strlen($debut);
		if(substr($word, 0, $len) === $debut) {
			$rep[] = $word;
		}
	}

	header('content-type: application/json; charset=utf-8');
	echo json_encode($rep);
	


?>