<?php

	$d->reset();
	$sql_banner = "select photo$lang as photo from #_background where type='banner' limit 0,1";
	$d->query($sql_banner);
	$row_banner = $d->fetch_array();
	
	$d->reset();
	$sql_banner_mobi = "select photo from #_background where type='banner_mobi' limit 0,1";
	$d->query($sql_banner_mobi);
	$banner_mobi = $d->fetch_array();
	
	$duoi_banner = end(explode('.',$row_banner['photo']));
			
?>

<a href=""><img src="<?=_upload_hinhanh_l.$row_banner['photo']?>" class="logo" /></a>
<a href=""><img src="<?=_upload_hinhanh_l.$banner_mobi['photo']?>" class="logo_mobi wow <?=$arr_animate['0']?>" /></a>



<div id="lang"> 
	<a href="index.php?com=ngonngu&lang=" title="Việt Nam"><img src="images/vi.png" alt="Việt Nam" /></a>
    <a href="index.php?com=ngonngu&lang=en" title="English"><img src="images/en.png" alt="English" /> </a>  
</div><!--END #lang-->

<div class="mxh">
		<a href="<?=$company['facebook']?>" target="_blank"><img src="images/fb.png" alt="Facebook" /></a>
        <a href="<?=$company['tiwtter']?>" target="_blank"><img src="images/tt.png" alt="tiwtter" /></a>
        <a href="<?=$company['google']?>" target="_blank"><img src="images/gg.png" alt="google" /></a>
        <a href="<?=$company['youtube']?>" target="_blank"><img src="images/yt.png" alt="youtube" /></a>
</div>

<!--<ul class="menu_login">
<?php if((!isset($_SESSION[$login_name]) || $_SESSION[$login_name]==false)){?>
    <li><a href="dang-ky.html"><?=_dangky?></a></li>
    <li><a href="dang-nhap.html"><?=_dangnhap?></a></li>
    <li><a style="border:none;" href="quen-mat-khau.html"><?=_quenmatkhau?></a></li>
<?php } else { ?>
	<li><a>Xin chào <span style="color:#FFFF00;">(
	<?php $info_user=info_user($_SESSION['login']['id']);echo $info_user['username']?>)</span></a></li>
    <li><a href="dang-xuat.html"><?=_dangxuat?></a></li>
    <li><a style="border:none;" href="thay-doi-thong-tin.html"><?=_thaydoithongtin?></a></li>
<?php } ?>
</ul>-->

