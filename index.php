<?php
		/**
	*
	*	Index : Generates the page index
	*
	*@package lib 
	*@subpackage constructs
	*@author Marti Gómez
	*
	*
	*
	**/

	require('lib/page.php');
	require('lib/header.php');
	require('lib/menu.php');
	require('lib/content.php');
	require('lib/foot.php');
	
	define('LAYOUT', 
		'<!DOCTYPE html>
		<html>
		<head>
			<style type="text/css">');
	$css=file_get_contents('css/estilo.css');

	$links=array(
				'Inicio'=>'/',
				'Home'=>'/',
				'Contactos'=>'/'
			);
	define('logo', 'img/Dell_Logo.png');

	$pagina1=new page($css, logo, 'Pagina de prueba', $links, 'Titulo de seccion', 'Articulo', 'Martí Gómez');
	//print_r($p1);
	$pagina1->show();
?>
