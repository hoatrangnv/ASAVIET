<div class="logo"> <a href="#" target="_blank" onclick="return false;"> <img src="images/logo.png"  alt="" /> </a></div>
<div class="sidebarSep mt0"></div>
<!-- Left navigation -->
<ul id="menu" class="nav">
  <li class="dash" id="menu1"><a class=" active" title="" href="index.php"><span>Trang chủ</span></a></li>

  <li class="product_li <?php if($_GET['com']=='product' || $_GET['com']=='order' || $_GET['com']=='excel') echo ' activemenu' ?>" id="menu2"><a href="" title="" class="exp"><span>Sản phẩm</span><strong></strong></a>
    <ul class="sub">
     <li <?php if($_GET['act']=='man_danhmuc') echo ' class="this"' ?>><a href="index.php?com=product&act=man_danhmuc&type=sanpham">Quản lý danh mục 1</a></li>
	 
     <!--<li <?php if($_GET['act']=='man_list') echo ' class="this"' ?>><a href="index.php?com=product&act=man_list&type=sanpham">Quản lý danh mục 2</a></li> -->
    
     <li <?php if($_GET['com']=='product' && $_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=product&act=man&type=sanpham">Quản lý sản phẩm</a></li>
    
     
    </ul>
  </li>

	<li class="news_li <?php if($_GET['com']=='news' or $_GET['com']=='vnexpress') echo ' activemenu' ?>" id="menu_tt8"><a href="" title="" class="exp"><span>Tin tức</span><strong></strong></a>
        <ul class="sub">
          <!--<li <?php if($_GET['act']=='man_danhmuc' && $_GET['type']=='tintuc') echo ' class="this"' ?>><a href="index.php?com=news&act=man_danhmuc&type=tintuc">Danh mục cấp 1</a></li>
           <li <?php if($_GET['act']=='man_list' && $_GET['type']=='tintuc') echo ' class="this"' ?>><a href="index.php?com=news&act=man_list&type=tintuc">Danh mục cấp 2</a></li>
            <li <?php if($_GET['act']=='man_cat' && $_GET['type']=='tintuc') echo ' class="this"' ?>><a href="index.php?com=news&act=man_cat&type=tintuc">Danh mục cấp 3</a></li>-->
           <li <?php if($_GET['act']=='man' && $_GET['type']=='tintuc') echo ' class="this"' ?>><a href="index.php?com=news&act=man&type=tintuc">Quản lý tin tức</a></li>
         
        </ul>
      </li>
	  
	  <li class="news_li <?php if($_GET['com']=='news' or $_GET['com']=='vnexpress') echo ' activemenu' ?>" id="menu_ttj"><a href="" title="" class="exp"><span>Giới thiệu</span><strong></strong></a>
        <ul class="sub">        
           <li <?php if($_GET['act']=='man' && $_GET['type']=='gioithieu') echo ' class="this"' ?>><a href="index.php?com=news&act=man&type=gioithieu">Quản lý Giới thiệu</a></li>
         
        </ul>
      </li>
      
      
     <!-- <li class="newsletter_li <?php if($_GET['com']=='newsletter') echo ' activemenu' ?>" id="menu_nt"><a href="" title="" class="exp"><span>Đăng ký nhận tin</span><strong></strong></a>
      	<ul class="sub">
        	 <li <?php if($_GET['act']=='man') echo ' class="this"' ?>><a href="index.php?com=newsletter&act=man">Quản lý Đăng ký nhận tin</a></li>
        </ul>
      </li>-->
   
      <li class="gallery_li <?php if($_GET['com']=='background' || $_GET['com']=='anhnen' || $_GET['com']=='slider' || $_GET['com']=='letruot') echo ' activemenu' ?>" id="menu_qc"><a href="" title="" class="exp"><span>Banner - Quảng cáo</span><strong></strong></a>
     <ul class="sub">
      <li <?php if($_GET['type']=='banner') echo ' class="this"' ?>><a href="index.php?com=background&act=capnhat&type=banner">Cập nhật banner</a></li>
	  
	   <li <?php if($_GET['type']=='banner_mobi') echo ' class="this"' ?>><a href="index.php?com=background&act=capnhat&type=banner_mobi">Cập nhật banner mobile</a></li>
	  
      <li <?php if($_GET['type']=='slider') echo ' class="this"' ?>><a href="index.php?com=slider&act=man_photo&type=slider">Cập nhật slider</a></li>
      <!--<li <?php if($_GET['type']=='doitac') echo ' class="this"' ?>><a href="index.php?com=slider&act=man_photo&type=doitac">Quản lý đối tác</a></li>
      <li <?php if($_GET['type']=='quangcao') echo ' class="this"' ?>><a href="index.php?com=slider&act=man_photo&type=quangcao">Quản lý quảng cáo</a></li>
      <li <?php if($_GET['act']=='man_photo' && $_GET['type']=='letruot') echo ' class="this"' ?>><a href="index.php?com=slider&act=man_photo&type=letruot">Quản lý quảng cáo 2 bên</a></li>
      <li <?php if($_GET['type']=='pupop') echo ' class="this"' ?>><a href="index.php?com=background&act=capnhat&type=pupop">Cập nhật pupop quảng cáo</a></li>
       <li <?php if($_GET['com']=='anhnen' || $_GET['type']=='background') echo ' class="this"' ?>><a href="index.php?com=anhnen&act=capnhat&type=background">Cập nhật background</a></li>-->
      </ul>
      </li>

     

     <li class="about_li <?php if($_GET['com']=='about' || $_GET['com']=='video') echo ' activemenu' ?>" id="menu_t"><a href="" title="" class="exp"><span>Trang tĩnh</span><strong></strong></a>
    <ul class="sub">
    <!--  <li <?php if($_GET['type']=='about') echo ' class="this"' ?>><a href="index.php?com=about&act=capnhat&type=about">Giới thiệu</a></li>-->
       <li <?php if($_GET['type']=='lienhe') echo ' class="this"' ?>><a href="index.php?com=about&act=capnhat&type=lienhe">Cập nhật liên hệ</a></li>
       <li <?php if($_GET['type']=='footer') echo ' class="this"' ?>><a href="index.php?com=about&act=capnhat&type=footer">Cập nhật footer</a></li>
    </ul>
  </li>
  
     <li class="setting_li <?php if($_GET['com']=='lkweb' || $_GET['com']=='yahoo' || $_GET['com']=='company' || $_GET['com']=='meta' || $_GET['com']=='user' || $_GET['com']=='video') echo ' activemenu' ?>" id="menu_cp"><a href="" title="" class="exp"><span>Nội dung khác</span><strong></strong></a>
    <ul class="sub">
    	<!--<li <?php if($_GET['com']=='video') echo ' class="this"' ?>><a href="index.php?com=video&act=man">Video</a></li>
      <li <?php if($_GET['com']=='lkweb') echo ' class="this"' ?>><a href="index.php?com=lkweb&act=man">Quản lý liên kết Website</a></li>-->
       <li <?php if($_GET['com']=='yahoo') echo ' class="this"' ?>><a href="index.php?com=yahoo&act=man">Quản lý hỗ trợ trực tuyến</a></li>
      <li <?php if($_GET['com']=='company') echo ' class="this"' ?>><a href="index.php?com=company&act=capnhat">Cập nhật thông tin công ty</a></li>
     <li <?php if($_GET['com']=='meta') echo ' class="this"' ?>><a href="index.php?com=meta&act=capnhat">Cập nhật thông tin SEO website</a></li>
     <li <?php if($_GET['act']=='admin_edit') echo ' class="this"' ?>><a href="index.php?com=user&act=admin_edit">Quản lý Tài Khoản</a></li>
    </ul>
  </li>
</ul>



