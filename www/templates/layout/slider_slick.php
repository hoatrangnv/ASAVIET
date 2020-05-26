<?php
	$d->reset();
	$sql_slider = "select ten$lang as ten,link,photo from #_slider where hienthi=1 and type='slider' order by stt,id desc";
	$d->query($sql_slider);
	$slider=$d->result_array();
?>
<div id="slider_slick">
	<?php  for($i=0,$count_slider=count($slider);$i<$count_slider;$i++){ ?>
        <?php if($slider[$i]['link']!='')echo '<a href="'.$slider[$i]['link'].'" target="_blank">' ?>
			<img src="timthumb.php?src=<?=_upload_hinhanh_l.$slider[$i]['photo'] ?>&h=240&w=1356&zc=1&q=100" title="<?=$slider[$i]['ten']?>" />
		<?php if($slider[$i]['link']!='')echo '</a>' ?>
    <?php } ?>
</div>

<script type="text/javascript">
    $(document).ready(function(){
      $('#slider_slick').slick({
		  	//vertical:true,Chay dọc
			//fade: true,//Hiệu ứng fade của slider
			//slidesPerRow: 2,
			//cssEase: 'linear',//Chạy đều
		  	//lazyLoad: 'progressive',
        	infinite: true,//Lặp lại
			accessibility:true,
		  	slidesToShow: 1,    //Số item hiển thị
		  	slidesToScroll: 1, //Số item cuộn khi chạy
		  	autoplay:true,  //Tự động chạy
			autoplaySpeed:'<?=$company['time']?>',  //Tốc độ chạy
			speed:1000,//Tốc độ chuyển slider
			arrows:true, //Hiển thị mũi tên
			centerMode:false,  //item nằm giữa
			dots:false,  //Hiển thị dấu chấm
			draggable:true,  //Kích hoạt tính năng kéo chuột
			mobileFirst:true,
			pauseOnHover:true,
			//variableWidth: true//Không fix kích thước
      });
    });
</script>

