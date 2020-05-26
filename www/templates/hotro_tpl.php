<?php
	$d->reset();
	$sql_hotro = "select ten$lang as ten,dienthoai,email,yahoo,skype,qq from #_yahoo where hienthi=1 order by stt,id desc";
	$d->query($sql_hotro);
	$hotro = $d->result_array();
?>
<div class="main_page">
	<div class="tieude_giua"><div><?=_hotrotructuyen?></div><span></span></div>
	<div class="box_container">
		<div id="hotro">
			<div class="phone"><?=$company['dienthoai']?></div>
			<?php for($i = 0, $count_hotro = count($hotro); $i < $count_hotro; $i++){ ?>
				<ul>
					
					<li><?php if($hotro[$i]['ten']!=''){ ?><b><?=$hotro[$i]['ten']?><?php }?></b>
						<?php if($hotro[$i]['yahoo']!=''){ ?><a href="ymsgr:sendIM?<?=$hotro[$i]['yahoo']?>"><img src="images/yahoo.png" alt="<?=$hotro[$i]['ten']?>" /></a><?php }?>
					</li>
					
					<?php if($hotro[$i]['skype']!=''){ ?>
						<li>Call: <?=$hotro[$i]['dienthoai']?><a href="skype:<?=$hotro[$i]['skype']?>?call"><img src="images/skype.png" alt="<?=$hotro[$i]['ten']?>" /></a></li>
					<?php }?>
					<?php if($hotro[$i]['qq']!=''){ ?>
						<li><a href="tencent://message/?uin=<?=$hotro[$i]['qq']?> &Site=QQ&Menu=yes" target="blank"><img border="0" alt="<?=$hotro[$i]['qq']?>" src="http://wpa.qq.com/pa?p=1:<?=$hotro[$i]['qq']?>:5"></img></a></li>
					<?php }?>
					<?php if($hotro[$i]['email']!=''){ ?>
						<li>Email: <?=$hotro[$i]['email']?></li>
					<?php }?>
				</ul>
			<?php } ?>
		</div><!---END #danhmuc-->
	</div><!---END .box_container-->
</div>