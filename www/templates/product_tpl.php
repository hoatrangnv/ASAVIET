<script type="text/javascript">
	$(document).ready(function(e) {
        $('.ten_tieude').click(function(){
			
			var id= $(this).data('id');
			var active=$(this).data("active");
			if(active==0){
				$(".ten_tieude").data("active",1);
				$(".ten_tieude img").addClass('act-nut');
			}else{
				$(".ten_tieude").data("active",0);
				$(".ten_tieude img").removeClass('act-nut');
			}	
			console.log(id);
			console.log(active);
			$.ajax({
				url:'ajax/sanpham.php',
				data:{id:id,active:active},
				type:'post',
				success: function(data){						
					$('.vv'+id).find('.hang').html(data);
					var h=$('.vv'+id).find('.hang').height();
					$('.vv'+id).find('.chung2').height(h);
				}					
			});		
			
		});		
    });
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('.ten_tieude').click(function(){
			
		});		
	});
 </script>  

<?php if($title_bar['photo2'] != '') { ?>
	<div class="hinh_cap1">
		<img src="<?=_upload_sanpham_l.$title_bar['photo2']?>"/>
	</div>
<?php } ?>


<div class="main_page">
<div class="wap_item">
<?php for($i=0,$count_product=count($product);$i<$count_product;$i++){	
//Hình ảnh khác của sản phẩm
		$d->reset();
		$sql = "select id,ten$lang as ten,thumb,photo from #_hinhanh where id_hinhanh='".$product[$i]['id']."' and type='".$type."' and hienthi=1 order by stt,id desc";
		$d->query($sql);
		$hinhthemsp = $d->result_array();
?>
    <div class="item2">
            <div class="sp_img2">
				<a href="san-pham/<?=$product[$i]['tenkhongdau']?>-<?=$product[$i]['id']?>.html"><img src="<?php if($product[$i]['thumb']!=NULL) echo _upload_sanpham_l.$product[$i]['thumb']; else echo 'images/noimage.png';?>" alt="<?=$product[$i]['ten']?>" /></a>
			</div>
			<div class="thongtin_ct vv<?=$product[$i]['id']?>">
				<div class="ten_sp">
					<div>
					<div data-id= "<?=$product[$i]['id']?>" data-active=0 class="ten_tieude"><?=_tensanpham?>
						<span class="img_mten"><img src="images/1.png"/></span>
					</div>
					</div>
					<div class="chung2">
						<div class="mota_bv">
							<h3 class="sp_name"><a><?=$product[$i]['ten']?></a></h3>
						</div>
					</div>
				</div>
				<div class="mota_sp">
					<div>
						<div data-id= "<?=$product[$i]['id']?>"  data-active=0 class="ten_tieude"><?=_motawear?>
						<span class="img_mten"><img src="images/1.png"/></span>
						</div>
					</div>
					<div class="chung2">
						<?php if($product[$i]['photo5'] !=''){ ?>
							<img src="<?=_upload_sanpham_l.$product[$i]['photo5']?>">
						<?php }else{?>
						<div class="mota_bv hang"><?=catchuoi($product[$i]['motawear'],200)?></div>
						<?php }?>
					</div>
				</div>
				<div class="mota_sp">
					<div>
						<div data-id= "<?=$product[$i]['id']?>"  data-active=0 class="ten_tieude"><?=_motacorr?>
						<span class="img_mten"><img src="images/1.png"/></span>
						</div>
					</div>
					<div class="chung2">
						<?php if($product[$i]['photo6'] !=''){ ?>
							<img src="<?=_upload_sanpham_l.$product[$i]['photo6']?>">
						<?php }else{?>
						<div class="mota_bv hang"><?=catchuoi($product[$i]['motacorr'],200)?></div>
						<?php }?>
					</div>
				</div>
				<div class="mota_sp">
					<div>
						<div data-id= "<?=$product[$i]['id']?>"  data-active=0 class="ten_tieude"><?=_motaprin?>
						<span class="img_mten"><img src="images/1.png"/></span>
						</div>
					</div>
					<div class="chung2">
						<?php if($product[$i]['photo7'] !=''){ ?>
							<img src="<?=_upload_sanpham_l.$product[$i]['photo7']?>">
						<?php }else{?>
						<div class="mota_bv hang"><?=catchuoi($product[$i]['motaprin'],200)?></div>
						<?php }?>
						
					</div>
				</div>

<!-- 				<div class="hinh_lq">
				<div>
					<div data-id= "<?=$product[$i]['id']?>"  data-active=0 class="ten_tieude"><?=_hinhanhlienquan?>
					<span class="img_mten"><img src="images/1.png"/></span>
					</div>
					
				</div>
				<div class="chung2">
					<div class="mota_bv">
					<div class="item_hinhthemchay">
						<?php for($j=0,$count_hinhthem=count($hinhthemsp);$j<$count_hinhthem;$j++){?>
						<div class="hihi">
							<div class="item_hinhthem">
								<img  src="<?php if($hinhthemsp[$j]['thumb']!=NULL) echo _upload_hinhthem_l.$hinhthemsp[$j]['thumb']; else echo 'images/noimage.gif';?>" >
							</div>
						</div>
						<?php } ?>
					</div>
					</div>
				</div>
				</div> -->
				<div class="clear"></div>
			</div>
           <div class="clear"></div>
    </div><!---END .item-->
<?php } ?>
<div class="clear"></div>
<div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
</div><!---END .wap_item-->
</div>

<script type="text/javascript">
    $(document).ready(function(){
      $('.item_hinhthemchay').slick({
        	infinite: true,
			accessibility:true,
		  	slidesToShow:3,    //Số item hiển thị
		  	slidesToScroll: 1, //Số item cuộn khi chạy
		  	autoplay:true,  //Tự động chạy
			autoplaySpeed:3000,  //Tốc độ chạy
			arrows:false, //Hiển thị mũi tên
			centerMode:false,  //item nằm giữa
			dots:false,  //Hiển thị dấu chấm
			draggable:true,  //Kích hoạt tính năng kéo chuột
			mobileFirst:true,
			responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 1,
			infinite: true,
			dots: false
		  }
		},
		{
		  breakpoint: 700,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 1,
			dots: false
		  }
		},
		{
		  breakpoint: 460,
		  settings: {
			slidesToShow: 1,
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