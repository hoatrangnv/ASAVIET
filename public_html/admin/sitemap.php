<?php	
	error_reporting(E_ALL & ~E_NOTICE & ~8192);
	@define ( '_template' , './templates/');
	@define ( '_source' , './sources/');
	@define ( '_lib' , './lib/');

	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."library.php";
	include_once _lib."class.database.php";
	$d = new database($config['database']);
		
	function CreateXML($tbl='',$com='',$type='',$cap=''){
		global $d,$domtree,$xmlRoot,$config_url;
		
		if($tbl == '') return false;
		$d->reset();
		$sql = "select id,tenkhongdau from table_$tbl where hienthi=1 and type='$type' order by stt,id desc";
		
		if($cap=='1')
		{
			$d->query($sql);
			$result= $d->result_array();
			foreach($result as $rs)	
			 {
				$url = $domtree->createElement("url");
				$url = $xmlRoot->appendChild($url);
				/* you should enclose the following two lines in a cicle */
				$url->appendChild($domtree->createElement('loc','http://'.$config_url.'/'.$com.'/'.$rs['tenkhongdau'].'-'.$rs['id']));
			}
		}
		if($cap=='2')
		{
			$d->query($sql);
			$result= $d->result_array();
			foreach($result as $rs)	
			 {
				$url = $domtree->createElement("url");
				$url = $xmlRoot->appendChild($url);
				/* you should enclose the following two lines in a cicle */
				$url->appendChild($domtree->createElement('loc','http://'.$config_url.'/'.$com.'/'.$rs['tenkhongdau'].'-'.$rs['id'].'/'));
			}
		}
		if($cap=='3')
		{
			$d->query($sql);
			$result= $d->result_array();
			foreach($result as $rs)	
			 {
				$url = $domtree->createElement("url");
				$url = $xmlRoot->appendChild($url);
				/* you should enclose the following two lines in a cicle */
				$url->appendChild($domtree->createElement('loc','http://'.$config_url.'/'.$com.'/'.$rs['tenkhongdau'].'-'.$rs['id'].'.htm'));
			}
		}
		else
		{
			
			$d->query($sql);
			$result= $d->result_array();
			foreach($result as $rs)	
			 {
				
				$url = $domtree->createElement("url");
				$url = $xmlRoot->appendChild($url);
				/* you should enclose the following two lines in a cicle */
				$url->appendChild($domtree->createElement('loc','http://'.$config_url.'/'.$com.'/'.$rs['tenkhongdau'].'-'.$rs['id'].'.html'));
			}
		}
		return $url;
	}
	
	/* create a dom document with encoding utf8 */
    $domtree = new DOMDocument('1.0', 'UTF-8');
    /* create the root element of the xml tree */
    $xmlRoot = $domtree->createElement("xml");
    /* append it to the document created */
    $xmlRoot = $domtree->appendChild($xmlRoot);
	
	CreateXML('product','san-pham','sanpham');
	CreateXML('news','tin-tuc','tintuc');
	CreateXML('news','tuyen-dung','tuyendung');
	CreateXML('news','khuyen-mai','khuyenmai');
	CreateXML('news','dich-vu','dichvu');
	CreateXML('news','du-an','duan');
	CreateXML('news','cong-trinh','congtrinh');
	CreateXML('about','gioi-thieu','about');
	CreateXML('about','lien-he','lienhe');
		
	CreateXML('product_danhmuc','sanpham','1');
	CreateXML('product_list','sanpham','2');
	CreateXML('product_cat','sanpham','3');
	
	
	CreateXML('news_danhmuc','tin-tuc','tintuc','1');
	CreateXML('news_list','tin-tuc','tintuc','2');
	CreateXML('news_cat','tin-tuc','tintuc','3');
	CreateXML('news_danhmuc','dich-vu','dichvu','1');
	CreateXML('news_list','dich-vu','dichvu','2');
	CreateXML('news_cat','dich-vu','dichvu','3');
	CreateXML('news_danhmuc','khuyen-mai','khuyenmai','1');
	CreateXML('news_list','khuyen-mai','khuyenmai','2');
	CreateXML('news_cat','khuyen-mai','khuyenmai','3');
	CreateXML('news_danhmuc','tuyen-dung','tuyendung','1');
	CreateXML('news_list','tuyen-dung','tuyendung','2');
	CreateXML('news_cat','tuyen-dung','tuyendung','3');
	CreateXML('news_danhmuc','du-an','duan','1');
	CreateXML('news_list','du-an','duan','2');
	CreateXML('news_cat','du-an','duan','3');
	CreateXML('news_danhmuc','cong-trinh','congtrinh','1');
	CreateXML('news_list','cong-trinh','congtrinh','2');
	CreateXML('news_cat','cong-trinh','congtrinh','3');

	
	
	$url = $domtree->createElement("url");
	$url = $xmlRoot->appendChild($url);
	/* you should enclose the following two lines in a cicle */
	$url->appendChild($domtree->createElement('loc','http://'.$config_url.'/gioi-thieu.html'));
	
	$url = $domtree->createElement("url");
	$url = $xmlRoot->appendChild($url);
	/* you should enclose the following two lines in a cicle */
	$url->appendChild($domtree->createElement('loc','http://'.$config_url.'/lien-he.html'));
	
	$url = $domtree->createElement("url");
	$url = $xmlRoot->appendChild($url);
	/* you should enclose the following two lines in a cicle */
	$url->appendChild($domtree->createElement('loc','http://'.$config_url.'/dang-ky.html'));
	
	$url = $domtree->createElement("url");
	$url = $xmlRoot->appendChild($url);
	/* you should enclose the following two lines in a cicle */
	$url->appendChild($domtree->createElement('loc','http://'.$config_url.'/dang-nhap.html'));
	
	$url = $domtree->createElement("url");
	$url = $xmlRoot->appendChild($url);
	/* you should enclose the following two lines in a cicle */
	$url->appendChild($domtree->createElement('loc','http://'.$config_url.'/gio-hang.html'));
	
	$url = $domtree->createElement("url");
	$url = $xmlRoot->appendChild($url);
	/* you should enclose the following two lines in a cicle */
	$url->appendChild($domtree->createElement('loc','http://'.$config_url.'/thanh-toan.html'));
			
    /* get the xml printed */
	if($domtree->save('../sitemap.xml'))
		transfer('Đã tạo thành công sitemap.', 'index.php');
	else
		transfer('Khời tạo dữ liệu thất bại.', 'index.php');

?>
