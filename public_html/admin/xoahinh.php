<?php
	session_start();
	@define ( '_template' , './templates/');
	@define ( '_source' , './sources/');
	@define ( '_lib' , './lib/');
		
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."library.php";
	include_once _lib."pclzip.php";
	include_once _lib."class.database.php";	
	
	$com = (isset($_REQUEST['com'])) ? addslashes($_REQUEST['com']) : "";
	$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
	$login_name = 'NINACO';
	
	if($_REQUEST['author']){
		header('Content-Type: text/html; charset=utf-8');
		echo '<pre>';
		print_r($config['author']);
		echo '</pre>';
		die();
	}
	
	$d = new database($config['database']);
	$archive = new PclZip($file);
	
	$id_xoaanh=$_POST['id'];
	$link_xoaanh=explode('/', $id_xoaanh);
	//alert($link_xoaanh[3]);
	delete_file($id_xoaanh);

	$sql="UPDATE table_product_danhmuc SET photo2='' WHERE photo2='".$link_xoaanh[3]."' ";
	$d->query($sql);
?>