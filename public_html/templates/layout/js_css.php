<link href="css/popup.css" type="text/css" rel="stylesheet" />
<link href="css/default.css" type="text/css" rel="stylesheet" />
<link href="style.css" type="text/css" rel="stylesheet" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js" ></script>
<script type="text/javascript" src="js/my_script.js"></script>
<script src="js/plugins-scroll.js" type="text/javascript" ></script>

<!--animate hiệu ứng
<link href="css/animate.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript">
 	new WOW().init();
</script>
<!--animate hiệu ứng-->

<link rel="stylesheet" type="text/css" href="css/slick.css"/>
<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
<script type="text/javascript" src="js/slick.min.js"></script>
    
<!--danhmuc-->
<script type='text/javascript' src='js/jquery.cookie.js'></script>
<script type='text/javascript' src='js/jquery.hoverIntent.minified.js'></script>
<script type='text/javascript' src='js/jquery.dcjqaccordion.2.7.min.js'></script>
<script type="text/javascript">
	$(document).ready(function($){
		$('#accordion-1').dcAccordion({
			eventType: 'hover',//Sự kiện click hoặc hover
			autoClose: true,//Tự động đóng lại khi chuyển trang
			saveState: true,
			disableLink: false,
			speed:'slow',
			showCount: false,
			autoExpand: true,
			cookie	: 'dcjq-accordion-1',
			classExpand	 : 'dcjq-current-parent'
		});	
	});
</script>
<!--danhmuc-->

<!--Tooltip hình ảnh-->
<script type="text/javascript" src="js/ImageTooltip.js"></script>
<!--Tooltip hình ảnh-->

<!--Tooltip có nội dung
<script src="Toolstip/ajax.js" type="text/javascript"></script>
<script src="Toolstip/ajax-dynamic-content.js" type="text/javascript"></script>
<script src="Toolstip/home.js" type="text/javascript"></script>
<link href="Toolstip/tootstip.css" rel="stylesheet" type="text/css" />
Tooltip có nội dung-->

<script type="text/javascript" src="js/ImageScroller.js"></script>

<!--Tim kiem-->
<script language="javascript"> 
    function doEnter(evt){
	var key;
	if(evt.keyCode == 13 || evt.which == 13){
		onSearch(evt);
	}
	}
	function onSearch(evt) {			
	
			var keyword = document.getElementById("keyword").value;
			if(keyword=='' || keyword=='<?=_nhaptukhoatimkiem?>...')
			{
				alert('<?=_chuanhaptukhoa?>');
			}
			else{
				location.href = "tim-kiem.html&keyword="+keyword;
				loadPage(document.location);			
			}
		}		
</script>   
<!--Tim kiem-->

<!--Code gữ thanh menu trên cùng
<script type="text/javascript">
	$(document).ready(function(){
		$(window).scroll(function(){
			var cach_top = $(window).scrollTop();
			var heaigt_header = $('#header').height();

			if(cach_top >= heaigt_header){
				$('#menu').css({position: 'fixed', top: '0px', zIndex:99});
			}else{
				$('#menu').css({position: 'relative'});
			}
		});
	});
 </script>
<!--Code gữ thanh menu trên cùng-->





<!--Cấm click chuột phải-->
<script type="text/javascript">
	var message="Đây là bản quyền thuộc về Công ty TNHH Thương Mại - Dịch Vụ ASA";
	function clickIE() {
	if (document.all) {(message);return false;}
	}
	function clickNS(e) {
	if (document.layers||(document.getElementById&&!document.all)) {
		if (e.which==2||e.which==3) {alert(message);return false;}}}
		if (document.layers) {document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;document.onselectstart=clickIE}document.oncontextmenu=new Function("return false")
</script>
<script type="text/javascript">
	function disableselect(e){
		return false 
	}
	function reEnable(){ 
		return true 
	} 
	//if IE4+
	document.onselectstart=new Function ("return false")
	//if NS6
	if (window.sidebar){
		document.onmousedown=disableselect 
		document.onclick=reEnable
	} 
</script>
<!--Cấm click chuột phải-->

<!--Thêm alt cho hình ảnh-->
<script type="text/javascript">
	$(document).ready(function(e) {
        $('img').each(function(index, element) {
			if(!$(this).attr('alt') || $(this).attr('alt')=='')
			{
				$(this).attr('alt','<?=$company['ten']?>');
			}
        });
    });
</script>
<!--Thêm alt cho hình ảnh-->

