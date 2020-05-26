<script language="javascript" type="text/javascript">
	$(document).ready(function() {
		$("#chonhet").click(function(){
			var status=this.checked;
			$("input[name='chon']").each(function(){this.checked=status;})
		});
		
		$("#xoahet").click(function(){
			var listid="";
			$("input[name='chon']").each(function(){
				if (this.checked) listid = listid+","+this.value;
				})
			listid=listid.substr(1);	 //alert(listid);
			if (listid=="") { alert("Bạn chưa chọn mục nào"); return false;}
			hoi= confirm("Bạn có chắc chắn muốn xóa?");
			if (hoi==true) document.location = "index.php?com=baiviet&act=delete_list&listid=" + listid;
		});
	});
	
	function select_onchange()
	{				
		var a=document.getElementById("id_danhmuc");
		window.location ="index.php?com=baiviet&act=man_list<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>&id_danhmuc="+a.value;	
		return true;
	}
	
	$(document).keydown(function(e) {
        if (e.keyCode == 13) {
			timkiem();
	   }
	});
	
	function timkiem()
	{	
		var a = $('input.key').val();	if(a=='Tên...') a='';		
		window.location ="index.php?com=baiviet&act=man_list&key="+a;	
		return true;
	}
	
</script>
<?php	
	function get_main_danhmuc()
	{
		global $lang_default;
		$sql_huyen="select table_baiviet_danhmuc.id,table_baivietdanhmuc_lang.ten from table_baiviet_danhmuc,table_baivietdanhmuc_lang where table_baiviet_danhmuc.id=table_baivietdanhmuc_lang.id_baiviet_danhmuc and table_baivietdanhmuc_lang.lang='".$lang_default."' order by table_baivietdanhmuc_lang.id asc ";

		$result=mysql_query($sql_huyen);
		$str='
			<select id="id_danhmuc" name="id_danhmuc" onchange="select_onchange();" class="main_select select_danhmuc">
			<option value="0">Chọn danh mục</option>
			';
		while ($row_huyen=@mysql_fetch_array($result)) 
		{
			if($row_huyen["id"]==(int)@$_REQUEST["id_danhmuc"])
				$selected="selected";
			else 
				$selected="";
			$str.='<option value='.$row_huyen["id"].' '.$selected.'>'.$row_huyen["ten"].'</option>';			
		}
		$str.='</select>';
		return $str;
	}
?>

<div class="control_frm" style="margin-top:25px;">
    <div class="bc">
        <ul id="breadcrumbs" class="breadcrumbs">
        	<li><a href="index.php?com=baiviet&act=man_list<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>"><span>Danh mục cấp 2</span></a></li>
        	<?php if($_GET['key']!=''){ ?>
				<li class="current"><a href="#" onclick="return false;">Kết quả tìm kiếm " <?=$_GET['key']?> " </a></li>
			<?php }  else { ?>
            	<li class="current"><a href="#" onclick="return false;">Tất cả</a></li>
            <?php } ?>
        </ul>
        <div class="clear"></div>
    </div>
</div>


<div class="control_frm" style="margin-top:0;">
  	<div style="float:left;">
    	<input type="button" class="blueB" value="Thêm" onclick="location.href='index.php?com=baiviet&act=add_list<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>'" />
        <input type="button" class="blueB" value="Xoá Chọn" id="xoahet" />
        
    </div>  
</div>
<div class="widget">
  <div class="title"><span class="titleIcon">
    <input type="checkbox" id="chonhet" name="titleCheck" />
    </span>
    <h6>Chọn tất cả</h6>
    <div class="timkiem">
	    <input type="text" value="" name="key" class="key" placeholder="Nhập từ khóa tìm kiếm ">
	    <button type="button" class="blueB" onclick="timkiem();"  value="">Tìm kiếm</button>
    </div>
  </div>
  
  <table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck mTable" id="checkAll">
      <thead>
      <tr>
        <td></td>
        <td class="tb_data_small"><a href="#" class="tipS" style="margin: 5px;">Thứ tự</a></td>       
         <td width="200"><?=get_main_danhmuc()?></td>
        <td class="sortCol"><div>Tên danh mục<span></span></div></td>
        <td class="tb_data_small">Nổi bật</td>
        <td class="tb_data_small">Ẩn/Hiện</td>
        <td width="200">Thao tác</td>
      </tr>
    </thead>
   <tbody>
   <form name="frm" method="post" action="index.php?com=baiviet&act=savestt_danhmuc<?php if($_REQUEST['curPage']!='') echo'&curPage='.$_REQUEST['curPage'];?><?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>" enctype="multipart/form-data" class="nhaplieu">
   <?php for($i=0, $count=count($items); $i<$count; $i++){?>
   <tr>
   		<td>
            <input type="checkbox" name="chon" id="chon" value="<?=$items[$i]['id']?>" class="chon" />
        </td>
   		<td align="center">
            <input data-val0="<?=$items[$i]['id']?>" data-val2="table_<?=$_GET['com']?>_list" type="text" value="<?=$items[$i]['stt']?>" data-val3="stt" name="stt<?=$i?>" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" class="tipS smallText stt" onblur="stt(this)" id="upstt" original-title="Nhập số thứ tự sản phẩm" rel="<?=$items[$i]['id']?>" />
        </td> 
         <td align="center">
       	 	<?php
				$sql_danhmuc="select ten from table_baivietdanhmuc_lang,table_baiviet_danhmuc where table_baiviet_danhmuc.id='".$items[$i]['id_danhmuc']."'and table_baiviet_danhmuc.id=table_baivietdanhmuc_lang.id_baiviet_danhmuc and table_baivietdanhmuc_lang.lang='".$lang_default."' order by table_baivietdanhmuc_lang.id asc ";
				
				$result=mysql_query($sql_danhmuc);
				$item_danhmuc =mysql_fetch_array($result);
				echo @$item_danhmuc['ten']
            ?>       
        
        </td>
   		<td class="title_name_data">
            <a href="index.php?com=baiviet&act=edit_list<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>&id_danhmuc=<?=$items[$i]['id_danhmuc']?>&id=<?=$items[$i]['id']?><?php if($_REQUEST['curPage']!='') echo'&curPage='.$_REQUEST['curPage'];?>" class="tipS SC_bold">
				<?php
                    $d->reset();
                    $sql="select ten from #_baivietlist_lang where id_list= '".$items[$i]['id']."' order by id asc";
                    $d->query($sql);
                    $result = $d->fetch_array();
                    echo $result['ten']
                  ?>
            </a>
        </td>
       
         <td align="center">
        <a data-val2="table_<?=$_GET['com']?>_list" rel="<?=$items[$i]['noibat']?>" data-val3="noibat" class="diamondToggle <?=($items[$i]['noibat']==1)?"diamondToggleOff":""?>" data-val0="<?=$items[$i]['id']?>" ></a> 
        </td>
        <td align="center">
        <a data-val2="table_<?=$_GET['com']?>_list" rel="<?=$items[$i]['hienthi']?>" data-val3="hienthi" class="diamondToggle <?=($items[$i]['hienthi']==1)?"diamondToggleOff":""?>" data-val0="<?=$items[$i]['id']?>" ></a> 
        </td>
        <td class="actBtns">
            <a href="index.php?com=baiviet&act=edit_list<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?>&id_danhmuc=<?=$items[$i]['id_danhmuc']?>&id=<?=$items[$i]['id']?><?php if($_REQUEST['curPage']!='') echo'&curPage='.$_REQUEST['curPage'];?>" title="" class="smallButton tipS" original-title="Sửa sản phẩm"><img src="./images/icons/dark/pencil.png" alt=""></a>

            <a href="index.php?com=baiviet&act=delete_list&id=<?=$items[$i]['id']?><?php if($_REQUEST['curPage']!='') echo'&curPage='.$_REQUEST['curPage'];?>" onClick="if(!confirm('Xác nhận xóa: <?=$items[$i]['ten']?>')) return false;" title="" class="smallButton tipS" original-title="Xóa sản phẩm"><img src="./images/icons/dark/close.png" alt=""></a>
        </td>
   </tr>
   	
   <?php } ?>
   
   </form>
   </tbody>
  </table>
</div>
<div class="paging"><?=$paging['paging']?></div>