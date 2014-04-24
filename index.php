<?php

require_once 'lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
		//'debug' => TRUE,
		'cache' => 'compilation_cache',
		'auto_reload' => TRUE
	));

$template = $twig->loadTemplate('default.html');

$docdatajson = '[{"title":"Website with PHP Twig","Author":"Mark"}]';
$docdata = json_decode($docdatajson, true);

$template->display(array(
		'pageTitle' => 'PHP Twig Website',
		'docs' => $docdata
	));

?>