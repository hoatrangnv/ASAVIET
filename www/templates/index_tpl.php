<?php 	if(!defined('_source')) die("Error");	
	$d->reset();
	$sql_spmoi="select * from #_product_danhmuc where noibat=1 and hienthi=1 order by stt,id desc";
	$d->query($sql_spmoi);
	$product_list=$d->result_array();

?>

<div class="main_page">
<div class="chay_spbh">
<? for($j=0;$j<count($product_list);$j++){ 

	$d->reset();
	$sql_spmoi="select * from #_product where id_danhmuc='".$product_list[$j]['id']."' and hienthi=1 and noibat=1 order by stt,id desc";
	$d->query($sql_spmoi);
	$product=$d->result_array();
?>
<div class="hihi">
<div class="box_dmsp">
	<div class="wap_item">
	<div class="chayhinh1">
	<?php for($i=0,$count_product=count($product);$i<$count_product;$i++){	?>
		<div class="item" >
				<div class="hinhsp">
					<a href="san-pham/<?=$product[$i]['tenkhongdau']?>-<?=$product[$i]['id']?>.html" title="<?=$product[$i]['ten'.$lang]?>" onmouseover="AJAXShowToolTip('ajax_tooltip.php?id=<?=$product[$i]['id']?>'); return false;" onmouseout="AJAXHideTooltip();">
					<img src="timthumb.php?src=<?php if($product[$i]['photo']!=NULL) echo _upload_sanpham_l.$product[$i]['photo']; else echo 'images/noimage.png';?>&h=210&w=235&zc=1&q=100" alt="<?=$product[$i]['ten'.$lang]?>" /></a>
				</div>
				<div class="tensp">
					<a href="san-pham/<?=$product[$i]['tenkhongdau']?>-<?=$product[$i]['id']?>.html" title="<?=$product[$i]['ten'.$lang]?>"><h3><?=$product[$i]['ten'.$lang]?></h3></a>
				</div>
		</div><!---END .item-->	
	<?php } ?>
	</div>
	</div><!---END .wap_item-->
</div>
</div>
<?php }?>
</div>

<div class="chay_spbh">
<? for($k=0;$k<count($product_list);$k++){ ?>
<div class="hihi">
<div class="box_dmsp">	
	<div class="hinh_c1">
		<div class="box_hinh">
			<a href="san-pham/<?=$product_list[$k]['tenkhongdau']?>-<?=$product_list[$k]['id']?>" title="<?=$product_list[$k]['ten'.$lang]?>" onmouseover="AJAXShowToolTip('ajax_tooltip.php?id=<?=$product_list[$k]['id']?>'); return false;" onmouseout="AJAXHideTooltip();">
			<img src="timthumb.php?src=<?php if($product_list[$k]['photo']!=NULL) echo _upload_sanpham_l.$product_list[$k]['photo']; else echo 'images/noimage.png';?>&h=160&w=230&zc=2&q=100" alt="<?=$product_list[$k]['ten'.$lang]?>" /></a>
		</div>
	</div>
	<div class="clear"></div>
</div>
</div>
<?php }?>

</div>

</div>
<script type="text/javascript">
    $(document).ready(function(){
      $('.chay_spbh').slick({
        	infinite: true,
			accessibility:true,
		  	slidesToShow:5,    //Số item hiển thị
		  	slidesToScroll: 1, //Số item cuộn khi chạy
		  	autoplay:true,  //Tự động chạy
			autoplaySpeed:36000,  //Tốc độ chạy
			arrows:true, //Hiển thị mũi tên
			centerMode:false,  //item nằm giữa
			dots:false,  //Hiển thị dấu chấm
			draggable:true,  //Kích hoạt tính năng kéo chuột
			pauseOnHover:false,
			//mobileFirst:true,
			responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 4,
			slidesToScroll: 1,
			infinite: true,
			dots: false
		  }
		},
		{
		  breakpoint: 700,
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 1,
			dots: false
		  }
		},
		{
		  breakpoint: 460,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 1,
			dots: false
		  }
		},
		{
		  breakpoint: 320,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: false
		  }
		}
		
		
	  ]
      });
    });
  </script>