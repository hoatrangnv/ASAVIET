<?php
	include ("ajax_config.php");
	$id= $_POST["id"];
	$active=$_POST["active"];

	$d->reset();
	$sql = "select mota$lang as mota from #_product where type='sanpham' and hienthi=1 and id=".$id." order by stt,id desc";		
	$d->query($sql);
	$mt_sanpham = $d->fetch_array();
	
	if($active==0){
		$kq=$mt_sanpham["mota"];
	}else{
		$kq=catchuoi($mt_sanpham["mota"],200); 
	}
	echo $kq;
?> 