<!-- slick -->
<script type="text/javascript">
    $(document).ready(function(){
		$('.slick2').slick({
			  slidesToShow: 1,
			  slidesToScroll: 1,
			  arrows: false,
			  fade: false,
			  asNavFor: '.slick'
			 
		});
		$('.slick').slick({
			  slidesToShow: 4,
			  slidesToScroll: 1,
			  asNavFor: '.slick2',
			  dots: false,
			  centerMode: false,
			  focusOnSelect: true
		});
		 return false;


    });
</script>
<!-- slick -->

<script type="text/javascript" src="js/cloudzoom.js"></script>
<link href="css/cloudzoom.css" type="text/css" rel="stylesheet" /> 
<script type = "text/javascript">
    CloudZoom.quickStart();
</script>

<link rel="stylesheet" href="css/swipebox.css">
<script src="js/jquery.swipebox.js"></script>
<script type="text/javascript">
$(document).ready(function() {
        $('.swipebox').swipebox({
            beforeOpen: function() {}, // called before opening
            afterOpen: function() {}, // called after opening
            afterClose: function() {}, // called after closing
            loopAtEnd: false // true will return to the first image after the last image is reached
        });
  });
</script>

<!-- Begin Jquery tabs-->
<link href="css/tab.css" type="text/css" rel="stylesheet" />
<script language="javascript" type="text/javascript">
	$(document).ready(function(){
		$('#content_tabs .tab').hide();
		$('#content_tabs .tab:first').show();
		$('#ultabs li:first').addClass('active');
		
		$('#ultabs li').click(function(){
			var vitri = $(this).data('vitri');
			$('#ultabs li').removeClass('active');
			$(this).addClass('active');
			
			$('#content_tabs .tab').hide();
			$('#content_tabs .tab:eq("'+vitri+'")').show();
			return false;
		});	
	});
</script>
<!--End Jquery tabs-->

<script type="text/javascript">
	$(document).ready(function(e) {
		$('.size').click(function(){
			$('.size').removeClass('active_size');
			$(this).addClass('active_size');
		});
		$('.mausac').click(function(){
			$('.mausac').removeClass('active_mausac');
			$(this).addClass('active_mausac');
		});
		$('a.dathang').click(function(){
			if($('.active_size').length)
			{
				if($('.mausac').length && $('.active_mausac').length==false)
				{
					alert('Vui lòng chọn màu sắc');
					return false;
				}
				if($('.active_mausac').length)
				{
					var mausac = $('.active_mausac').html();
				}
				else
				{
					var mausac = '';
				}
					var act = "dathang";
					var id = "<?=$row_detail['id']?>";
					var size = $('.active_size').html();
					var mausac = $('.active_mausac').html();
					var soluong = $('.soluong').val();
					if(soluong>0)
					{
						$.ajax({
							type:'post',
							url:'ajax/cart.php',
							dataType:'json',
							data:{id:id,size:size,mausac:mausac,soluong:soluong,act:act},
							beforeSend: function() {
								$('.thongbao').html('<p><img src="images/loader_p.gif"></p>');  
							},
							error: function(){
								add_popup('<?=_hethongloi?>');
							},
							success:function(kq){
								add_popup(kq.thongbao);
								console.log(kq);
							}
						});
					}
					else
					{
						alert('Vui lòng nhập lại số lượng');
					}
			}
			else
			{
				alert('Vui lòng chọn size');
			}
			return false;
		});
	});
</script>

<div class="main_page">
<div class="tieude_giua"><div><?=$row_detail['ten']?></div><span></span></div>
<div class="box_container">
	<div class="wap_pro">
        <div class="zoom_slick">    
         	<div class="slick2">                
                <a class="fancybox-buttons images_main swipebox" data-fancybox-group="button" href="<?php if($row_detail['photo'] != NULL)echo _upload_sanpham_l.$row_detail['photo'];else echo 'images/noimage.gif';?>"><img class='cloudzoom' src="<?php if($row_detail['photo'] != NULL)echo _upload_sanpham_l.$row_detail['photo'];else echo 'images/noimage.gif';?>" data-cloudzoom ="zoomSizeMode:'image',autoInside: 550 ,zoomImage: '<?php if($row_detail['photo'] != NULL)echo _upload_sanpham_l.$row_detail['photo'];else echo 'images/noimage.gif';?>' " ></a>
                
                <?php for($j=0,$count_hinhthem=count($hinhthem);$j<$count_hinhthem;$j++){?>
                	<a class="fancybox-buttons images_main swipebox" data-fancybox-group="button" href="<?php if($hinhthem[$j]['photo']!=NULL) echo _upload_hinhthem_l.$hinhthem[$j]['photo']; else echo 'images/noimage.gif';?>"><img class='cloudzoom' src="<?php if($hinhthem[$j]['photo']!=NULL) echo _upload_hinhthem_l.$hinhthem[$j]['photo']; else echo 'images/noimage.gif';?>" data-cloudzoom ="zoomSizeMode:'image',autoInside: 550 ,zoomImage: '<?php if($hinhthem[$j]['photo']!=NULL) echo _upload_hinhthem_l.$hinhthem[$j]['photo']; else echo 'images/noimage.gif';?>' " ></a>	
                <?php } ?>
            </div><!--.slick-->
            
         
         	<?php $count=count($hinhthem); if($count>0) {?>
            <div class="slick">                
                <img class='cloudzoom-gallery' src="timthumb.php?src=<?php if($row_detail['photo'] != NULL)echo _upload_sanpham_l.$row_detail['photo'];else echo 'images/noimage.gif';?>&h=100&w=100&zc=1&q=100" data-cloudzoom ="useZoom:'.cloudzoom', image:'<?php if($row_detail['photo'] != NULL)echo _upload_sanpham_l.$row_detail['photo'];else echo 'images/noimage.gif';?>' ,zoomImage: '<?php if($row_detail['photo'] != NULL)echo _upload_sanpham_l.$row_detail['photo'];else echo 'images/noimage.gif';?>'" >
                
                <?php for($j=0,$count_hinhthem=count($hinhthem);$j<$count_hinhthem;$j++){?>
                	<img class='cloudzoom-gallery' src="<?php if($hinhthem[$j]['thumb']!=NULL) echo _upload_hinhthem_l.$hinhthem[$j]['thumb']; else echo 'images/noimage.gif';?>" data-cloudzoom ="useZoom:'.cloudzoom', image:'<?php if($hinhthem[$j]['photo']!=NULL) echo _upload_hinhthem_l.$hinhthem[$j]['photo']; else echo 'images/noimage.gif';?>' ,zoomImage: '<?php if($hinhthem[$j]['photo']!=NULL) echo _upload_hinhthem_l.$hinhthem[$j]['photo']; else echo 'images/noimage.gif';?>'" >
                <?php } ?>
            </div><!--.slick-->
            <?php } ?>
        </div><!--.zoom_slick--> 
        
        <ul class="product_info">
                <li class="ten"><?=$row_detail['ten']?></li>
                 <?php if($row_detail['masp'] != '') { ?><li><b>Mã sản phẩm:</b> <?=$row_detail['masp']?></span></li><?php } ?>
                 <?php if($row_detail['giacu'] != 0) { ?><li class="giacu">Giá cũ: <?=number_format($row_detail['giacu'],0, ',', '.').' <sup>đ</sup>';?></li><?php } ?>
                 <li class="gia">Giá: <?php if($row_detail['gia'] != 0)echo number_format($row_detail['gia'],0, ',', '.').' <sup>đ</sup>';else echo 'Liên hệ'; ?></li>
                   
                            
                 <li><b>Lượt xem:</b> <span><?=$row_detail['luotxem']?> lượt</span></li>
                 <?php if($row_detail['mota'] != '') { ?><li><?=$row_detail['mota']?></li><?php } ?>
                 
                 <li><div class="addthis_native_toolbox"></div></li>          
        </ul>
        <div class="clear"></div>  
  </div><!--.wap_pro-->
        
        <div id="tabs">   
            <ul id="ultabs">				 
                <li data-vitri="0">Chi tiết sản phẩm</li>
                <li data-vitri="1">Bình luận</li>      
            </ul>
            <div style="clear:both"></div>
                            
            <div id="content_tabs">               
                <div class="tab">
                    <?=$row_detail['noidung']?> 
					<?php if($row_detail['download'] != '') { ?>
					   <div id="download"><p class="taive">Tải về</p><a href="<?=_upload_sanpham_l.$row_detail['download']?>"><img src="images/dload.png" /></a></div>
					
					   <iframe src="http://docs.google.com/gview?url=http://<?=$config_url."/"._upload_sanpham_l.$row_detail['download']?>&amp;
							embedded=true" style="width: 100%; height: 600px;" frameborder="0">			
					   </iframe>  
					   <?php }?>
                </div> 
                
                <div class="tab">
                    <div class="fb-comments" data-href="<?=getCurrentPageURL()?>" data-numposts="5" data-width="100%"></div>
                </div>  
            </div><!---END #content_tabs-->
        </div><!---END #tabs-->	
<div class="clear"></div>
</div><!--.box_containerlienhe-->


<div class="tieude_giua"><div>Sản phẩm cùng loại</div><span></span></div>
<div class="wap_item">
<div class="chay_spcl">
<?php for($i=0,$count_product=count($product);$i<$count_product;$i++){	?>
<div class="hihi">
    <div class="item_cl">
            <p class="sp_img"><a href="san-pham/<?=$product[$i]['tenkhongdau']?>-<?=$product[$i]['id']?>.html" title="<?=$product[$i]['ten']?>">
            <img src="timthumb.php?src=<?php if($product[$i]['photo']!=NULL) echo _upload_sanpham_l.$product[$i]['photo']; else echo 'images/noimage.png';?>&h=220&w=265&zc=1&q=100" alt="<?=$product[$i]['ten']?>" /></a></p>
            <h3 class="sp_name"><a href="san-pham/<?=$product[$i]['tenkhongdau']?>-<?=$product[$i]['id']?>.html" title="<?=$product[$i]['ten']?>"><?=$product[$i]['ten']?></a></h3>
            <p class="sp_gia"><?=_gia?>: <span><?php if($product[$i]['gia'] != 0)echo number_format($product[$i]['gia'],0, ',', '.').' <sup>đ</sup>';else echo _lienhe; ?></span></p>
    </div><!---END .item-->
</div>
<?php } ?>
</div>
</div><!---END .wap_item-->
</div>
<script type="text/javascript">
    $(document).ready(function(){
      $('.chay_spcl').slick({
        	infinite: true,
			accessibility:true,
		  	slidesToShow:4,    //Số item hiển thị
		  	slidesToScroll: 1, //Số item cuộn khi chạy
		  	autoplay:true,  //Tự động chạy
			autoplaySpeed:3000,  //Tốc độ chạy
			arrows:false, //Hiển thị mũi tên
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