<?php

require_once 'lib/Twig/Autoloader.php';
Twig_Autoloader::register();

try{
	$loader = new Twig_Loader_Filesystem('templates');
	$twig = new Twig_Environment($loader, array(
			//'debug' => TRUE,
			'cache' => 'compilation_cache',
			'auto_reload' => TRUE
		));

	$template_file = "default.html";

	if (!empty($_GET["p"])){
		$template_file = $_GET["p"].".html";
	}
	
	$template = $twig->loadTemplate($template_file);

	$docdatajson = '[{"title":"Website with PHP Twig","Author":"Mark"}]';
	$docdata = json_decode($docdatajson, true);

	$template->display(array(
			'pageTitle' => 'PHP Twig Bootstrap Website',
			'docs' => $docdata
		));
}catch (Exception $e) {
	die ('ERROR: ' . $e->getMessage());
}

?>