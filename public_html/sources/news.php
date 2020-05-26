<?php  if(!defined('_source')) die("Error");

	@$id_danhmuc =   trim(strip_tags(addslashes($_GET['id_danhmuc'])));
	@$id_list =   trim(strip_tags(addslashes($_GET['id_list'])));
	@$id_cat =   trim(strip_tags(addslashes($_GET['id_cat'])));
	@$id =   trim(strip_tags(addslashes($_GET['id'])));	
	
	#Chi tiết tin tức
	if($id!='')
	{
		#Chi tiết tin tức
		$sql = "select ten$lang as ten,mota$lang as mota,noidung$lang as noidung,id_danhmuc,id_list,id_cat,id,title,keywords,description,photo from #_news where id='".$id."' limit 0,1";
		$d->query($sql);
		$tintuc_detail = $d->fetch_array();
		
		#Thông tin seo web
		$title_cat = $tintuc_detail['ten'];		
		$title = $tintuc_detail['title'];
		$keywords = $tintuc_detail['keywords'];
		$description = $tintuc_detail['description'];
		
		#Thông tin share facebook
		$images_facebook = "http://".$config_url._upload_tintuc_l.$tintuc_detail['photo'];
		$title_facebook = $tintuc_detail['ten'];
		$description_facebook = trim(strip_tags($tintuc_detail['mota']));
		
		#Các tin cũ hơn		
		$where = " type='".$type."' and hienthi=1 and id<'".$id."' order by stt,id desc";		
	}
	#Danh mục cấp 3
	elseif($id_cat!='')
	{		
		$sql = "select id,ten$lang as ten,title,keywords,description from #_news_cat where hienthi=1 and id='".$id_cat."' limit 0,1";
		$d->query($sql);
		$title_new = $d->fetch_array();
		
		#Thông tin seo web
		$title_cat = $title_new['ten'];		
		$title = $title_new['title'];
		$keywords = $title_new['keywords'];
		$description = $title_new['description'];
		
		#Điều kiện lấy danh mục
		$where = " type='".$type."' and id_cat='".$id_cat."' and hienthi=1 order by stt,id desc";	
		
	}
	#Danh mục cấp 2
	elseif($id_list!='')
	{		
		$sql = "select id,ten$lang as ten,title,keywords,description from #_news_list where hienthi=1 and id='".$id_list."' limit 0,1";
		$d->query($sql);
		$title_new = $d->fetch_array();
		
		#Thông tin seo web
		$title_cat = $title_new['ten'];		
		$title = $title_new['title'];
		$keywords = $title_new['keywords'];
		$description = $title_new['description'];
		
		#Điều kiện lấy danh mục
		$where = " type='".$type."' and id_list='".$id_list."' and hienthi=1 order by stt,id desc";	
		
	}
	#Danh mục cấp 1
	elseif($id_danhmuc!='')
	{		
		$sql = "select id,ten$lang as ten,title,keywords,description from #_news_danhmuc where hienthi=1 and id='".$id_danhmuc."' limit 0,1";
		$d->query($sql);
		$title_new = $d->fetch_array();
		
		#Thông tin seo web
		$title_cat = $title_new['ten'];		
		$title = $title_new['title'];
		$keywords = $title_new['keywords'];
		$description = $title_new['description'];
		
		#Điều kiện lấy danh mục
		$where = " type='".$type."' and id_danhmuc='".$id_danhmuc."' and hienthi=1 order by stt,id desc";	
		
	}
	#Tất cả Tin tức có type là $type
	else{	
		$where = " type='".$type."' and hienthi=1 order by stt,id desc";	
	}
	
	#Lấy tin tức và phân trang
	$d->reset();
	$sql = "SELECT count(id) AS numrows FROM #_news where $where";
	$d->query($sql);	
	$dem = $d->fetch_array();
	
	$totalRows = $dem['numrows'];
	$page = $_GET['p'];
	$pageSize = 8;//Số item cho 1 trang
	$offset = 5;//Số trang hiển thị				
	if ($page == "")$page = 1;
	else $page = $_GET['p'];
	$page--;
	$bg = $pageSize*$page;		
	
	$d->reset();
	$sql = "select id,ten$lang as ten,tenkhongdau,mota$lang as mota,thumb,ngaytao from #_news where $where limit $bg,$pageSize";		
	$d->query($sql);
	$tintuc = $d->result_array();	
	$url_link = getCurrentPageURL();
?>