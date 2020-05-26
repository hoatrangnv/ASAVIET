<?php
	$d->reset();
	$sql_news="select * from #_news order by id desc limit 0,10";
	$d->query($sql_news);
	$result_news=$d->result_array();
	
	$d->reset();
	$sql_product="select * from #_product order by id desc limit 0,10";
	$d->query($sql_product);
	$result_product=$d->result_array();
	
?>
<div class="widget">
    <div class="title"><h6>Chào mừng bạn đến với Administrator - HỆ THỐNG QUẢN TRỊ NỘI DUNG WEBSITE - Powered by <a href="http://www.nina.vn" target="_blank"><span style="color:#f00;">Thiết kế website NINA</span></a></h6><div class="clear"></div></div>
    <p>Nếu bạn có thắc mắc trong quá trình sử dụng, xin vui lòng gởi mail về địa chỉ <strong><a href="mailto:nina@nina.vn">nina@nina.vn</a></strong></p>
</div>

<div class="widgets">
    <div class="oneTwo">            
        <div class="widget">
            <div class="title"><img src="./images/article-icon.png" alt="" class="titleIcon" /><h6>Bài viết mới</h6></div>
            <table cellpadding="0" cellspacing="0" width="100%" class="sTable taskWidget">
                <thead>
                    <tr>
                    	<td>ID</td>
                        <td>Tiêu đề</td>
                        <td width="150">Ngày đăng</td>
                        <td width="60">Thao tác</td>
                    </tr>
                </thead>
                <tbody>
                <?php for($i=0,$count=count($result_news);$i<$count;$i++) { ?>
                                    <tr>
                    	<td><?=$result_news[$i]['id']?></td>
                        <td style="text-align:left;"><a href="index.php?com=news&act=edit&id=<?=$result_news[$i]['id']?>&id_danhmuc=<?=$result_news[$i]['id_danhmuc']?>&id_list=<?=$result_news[$i]['id_list']?>&id_cat=<?=$result_news[$i]['id_cat']?>&type=<?=$result_news[$i]['type']?>" title="<?=$result_news[$i]['ten']?>"><?=$result_news[$i]['ten']?></a></td>
                        <td><span class="green f11"><?=date('H:i:s d-m-Y',$result_news[$i]['ngaytao'])?></span></td>
                        <td class="actBtns">
                            <a href="index.php?com=news&act=edit&id=<?=$result_news[$i]['id']?>&id_danhmuc=<?=$result_news[$i]['id_danhmuc']?>&id_list=<?=$result_news[$i]['id_list']?>&id_cat=<?=$result_news[$i]['id_cat']?>&type=<?=$result_news[$i]['type']?>" title="Sửa bài viết" class="smallButton tipS" original-title="Sửa bài viết"><img src="./images/icons/dark/pencil.png" width="14" alt=""></a>
            				            			 <a href="" onclick="CheckDelete('index.php?com=news&act=delete&id=<?=$items[$i]['id']?>&id_danhmuc=<?=$result_news[$i]['id_danhmuc']?>&id_list=<?=$result_news[$i]['id_list']?>&id_cat=<?=$result_news[$i]['id_cat']?>&type=<?=$result_news[$i]['type']?>'); return false;" title="" class="smallButton tipS" original-title="Xóa bài viết"><img src="./images/icons/dark/close.png" alt=""></a>
                        </td>
                    </tr>
                    <?php } ?>
                                     
                                                      </tbody>
            </table> 
        </div>
        <div class="clear"></div>
    </div>

    <!-- 2 columns widgets -->
    <div class="oneTwo">            
        <div class="widget">
            <div class="title"><img src="./images/product-icon.png" alt="" class="titleIcon" /><h6>Sản phẩm mới</h6></div>
            <table cellpadding="0" cellspacing="0" width="100%" class="sTable taskWidget">
                <thead>
                    <tr>
                    	<td>ID</td>
                        <td>Tên sản phẩm</td>
                        <td>Ngày đăng</td>
                        <td width="60">Thao tác</td>
                    </tr>
                </thead>
                <tbody>
                 <?php for($i=0,$count=count($result_product);$i<$count;$i++) { ?>
                                    <tr>
                    	<td><?=$result_product[$i]['id']?></td>
                        <td style="text-align:left;"><a href="index.php?com=product&act=edit&id_danhmuc=<?=$result_product[$i]['id_danhmuc']?>&id_list=<?=$result_product[$i]['id_list']?>&id_cat=<?=$result_product[$i]['id_cat']?>&id_item=<?=$result_product[$i]['id_item']?>&id=<?=$result_product[$i]['id']?>&type=<?=$result_product[$i]['type']?>" title=""><?=$result_product[$i]['ten']?></a></td>
                        <td><span class="green f11"><?=date('H:i:s d-m-Y',$result_product[$i]['ngaytao'])?></span></td>
                        <td class="actBtns">
                             <a href="index.php?com=product&act=edit&id_danhmuc=<?=$result_product[$i]['id_danhmuc']?>&id_list=<?=$result_product[$i]['id_list']?>&id_cat=<?=$result_product[$i]['id_cat']?>&id_item=<?=$result_product[$i]['id_item']?>&id=<?=$result_product[$i]['id']?>&type=<?=$result_product[$i]['type']?>" title="" class="smallButton tipS" original-title="Sửa sản phẩm"><img src="./images/icons/dark/pencil.png" alt=""></a>
            <a href="" onclick="CheckDelete('index.php?com=product&act=delete&id_danhmuc=<?=$result_product[$i]['id_danhmuc']?>&id_list=<?=$result_product[$i]['id_list']?>&id_cat=<?=$result_product[$i]['id_cat']?>&id_item=<?=$result_product[$i]['id_item']?>&id=<?=$result_product[$i]['id']?>&type=<?=$result_product[$i]['type']?>'); return false;" title="" class="smallButton tipS" original-title="Xóa sản phẩm"><img src="./images/icons/dark/close.png" alt=""></a>  
                        </td>
                    </tr>
                    <?php } ?>
                                                      </tbody>
            </table> 
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>