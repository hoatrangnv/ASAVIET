<?php	

	$d->reset();
	$sql_contact = "select noidung$lang as noidung from #_about where type='footer' limit 0,1";
	$d->query($sql_contact);
	$company_contact = $d->fetch_array();
		
?>
<div id="main_footer">
	<p class="ten_cty"><?=$company['ten']?></p>
	<?=$company_contact['noidung'];?>
</div>

<div id="lienket">
<div class="td_ft"><?=_lienketvoichungtoi?></div>
        <a href="<?=$company['facebook']?>" target="_blank"><img src="images/facebook.png" alt="Facebook" /></a>
        <a href="<?=$company['tiwtter']?>" target="_blank"><img src="images/twitter.png" alt="tiwtter" /></a>
        <a href="<?=$company['google']?>" target="_blank"><img src="images/google.png" alt="google" /></a>
        <a href="<?=$company['youtube']?>" target="_blank"><img src="images/youtube.png" alt="youtube" /></a>
</div>

<div id="thongke">
	<p class="ten_bdo"><?=_bandodiadiem?></p>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
		   <script type="text/javascript">
		   var map;
		   var infowindow;
		   var marker= new Array();
		   var old_id= 0;
		   var infoWindowArray= new Array();
		   var infowindow_array= new Array();function initialize(){
			   var defaultLatLng = new google.maps.LatLng(<?=$company['toado']?>);
			   var myOptions= {
				   zoom: 16,
				   center: defaultLatLng,
				   scrollwheel : false,
				   mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				map = new google.maps.Map(document.getElementById("map_canvas1"), myOptions);map.setCenter(defaultLatLng);
			    
			   var arrLatLng = new google.maps.LatLng(<?=$company['toado']?>);
			   infoWindowArray[7896] = '<div class="map_description"><div class="map_title"><?=$company['ten']?></div><div><?=_diachi?> : <?=$company['diachi']?><?='<br />'?><?=_dienthoai?>: <?=$company['dienthoai']?></div></div>';
			   loadMarker(arrLatLng, infoWindowArray[7896], 7896);
			   
			   moveToMaker(7896);}function loadMarker(myLocation, myInfoWindow, id){marker[id] = new google.maps.Marker({position: myLocation, map: map, visible:true});
			   var popup = myInfoWindow;infowindow_array[id] = new google.maps.InfoWindow({ content: popup});google.maps.event.addListener(marker[id], 'mouseover', function() {if (id == old_id) return;if (old_id > 0) infowindow_array[old_id].close();infowindow_array[id].open(map, marker[id]);old_id = id;});google.maps.event.addListener(infowindow_array[id], 'closeclick', function() {old_id = 0;});}function moveToMaker(id){var location = marker[id].position;map.setCenter(location);if (old_id > 0) infowindow_array[old_id].close();infowindow_array[id].open(map, marker[id]);old_id = id;}</script> 
           <div id="map_canvas1" style="height:150px;"></div> 
</div><!---END #thongke-->