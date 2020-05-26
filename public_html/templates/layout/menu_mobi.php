<?php
	
	$d->reset();
	$sql_product_danhmuc="select ten$lang as ten,tenkhongdau,id from #_product_danhmuc where hienthi=1 order by stt,id desc";
	$d->query($sql_product_danhmuc);
	$product_danhmuc=$d->result_array();
	
?>
<!--Tim kiem-->
<script language="javascript"> 
    function doEnter2(evt){
	var key;
	if(evt.keyCode == 13 || evt.which == 13){
		onSearch(evt);
	}
	}
	function onSearch2(evt) {			
	
			var keyword2 = document.getElementById("keyword2").value;
			if(keyword2=='' || keyword2=='Nhập từ khóa tìm kiếm...')
			{
				alert('Bạn chưa nhập từ khóa tìm kiếm!');
			}
			else{
				location.href = "tim-kiem.html&keyword="+keyword2;
				loadPage(document.location);			
			}
		}		
</script>   
<!--Tim kiem-->

<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
<script type="text/javascript" src="js/jquery.mmenu.min.all.js"></script>
<script type="text/javascript">
	$(function() {
		$('.hien_menu').click(function(){
			$('nav#menu_mobi').css({height: "auto"});
		});
		$('nav#menu_mobi').mmenu({
			extensions	: [ 'effect-slide-menu', 'pageshadow' ],
			searchfield	: true,
			counters	: true,
			navbar 		: {
				title		: 'Menu'
			},
			navbars		: [
				{
					position	: 'top',
					content		: [ 'searchfield' ]
				}, {
					position	: 'top',
					content		: [
						'prev',
						'title',
						'close'
					]
				}, {
					position	: 'bottom',
					content		: [
						'<a>Online : <?php $count=count_online();echo $tong_xem=$count['dangxem'];?></a>',
						'<a>Tổng : <?php $count=count_online();echo $tong_xem=$count['daxem'];?></a>'
					]
				}
			]
		});
	});
</script>

<div class="header"><a href="#menu_mobi" class="hien_menu">MENU</a></div>
    
<nav id="menu_mobi" style="height:0; overflow:hidden;">
    <ul>	
    	<!--<div id="search_mobi">
            <input type="text" name="keyword2" id="keyword2" onKeyPress="doEnter2(event,'keyword');" value="<?=_nhaptukhoatimkiem?>..." onclick="if(this.value=='<?=_nhaptukhoatimkiem?>...'){this.value=''}" onblur="if(this.value==''){this.value='<?=_nhaptukhoatimkiem?>...'}">
            <img src="images/i_search_mobi.png" alt="<?=_timkiem?>" style="cursor:pointer;" onclick="onSearch2(event,'keyword');" />
    	</div>END #search-->

           <li><a class="<?php if((!isset($_REQUEST['com'])) or ($_REQUEST['com']==NULL) or $_REQUEST['com']=='index') echo 'active'; ?>" href="index.html"><?=_trangchu?></a></li>
    <li class="line"></li>
    <li><a class="<?php if($_REQUEST['com'] == 'gioi-thieu') echo 'active'; ?>" href="gioi-thieu.html"><?=_gioithieu?></a></li>
    <li class="line"></li>
    <li><a class="<?php if($_REQUEST['com'] == 'san-pham') echo 'active'; ?>" href="san-pham.html"><?=_sanpham?></a>
    	<ul>
			<?php for($i = 0, $count_product_danhmuc = count($product_danhmuc); $i < $count_product_danhmuc; $i++){ ?>
            <li><a href="san-pham/<?=$product_danhmuc[$i]['tenkhongdau']?>-<?=$product_danhmuc[$i]['id']?>"><?=$product_danhmuc[$i]['ten']?></a>
                <ul>
                        <?php	
                            $d->reset();
                            $sql_product_list="select ten$lang as ten,tenkhongdau,id from #_product_list where hienthi=1 and id_danhmuc='".$product_danhmuc[$i]['id']."' order by stt,id desc";
                            $d->query($sql_product_list);
                            $product_list=$d->result_array();															
                        ?>
                         <?php for($j = 0, $count_product_list = count($product_list); $j < $count_product_list; $j++){ ?>
                                <li><a href="san-pham/<?=$product_list[$j]['tenkhongdau']?>-<?=$product_list[$j]['id']?>/"><?=$product_list[$j]['ten']?></a>
                                    
                                </li>
                         <?php } ?>
                 </ul>
                </li>
                <?php } ?>
            </ul>	
    </li>
    <li class="line"></li>
    <li><a class="<?php if($_REQUEST['com'] == 'tin-tuc') echo 'active'; ?>" href="tin-tuc.html"><?=_tintuc?></a></li>
    <li><a class="<?php if($_REQUEST['com'] == 'ho-tro') echo 'active'; ?>" href="ho-tro.html"><?=_hotrotructuyen?></a></li>
    <li class="line"></li>
    <li><a class="<?php if($_REQUEST['com'] == 'lien-he') echo 'active'; ?>" href="lien-he.html"><?=_lienhe?></a></li>
    </ul>
</nav>