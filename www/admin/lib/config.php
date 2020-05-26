<?php if(!defined('_lib')) die("Error");

	error_reporting(E_ALL & ~E_NOTICE & ~8192);
	$config_url=$_SERVER["SERVER_NAME"].'';	
	
	$config['database']['servername'] = 'localhost';
	$config['database']['username'] = 'asaf47fa_db';
	$config['database']['password'] = 'T}CCQ{-4Q@*Z';
	$config['database']['database'] = 'asaf47fa_db';
	$config['database']['refix'] = 'table_';
	$_SESSION['ckfinder_baseUrl']=$config_url;
	$ip_host = '112.78.2.91';
	$mail_host = 'info@asaviet.com';
	$pass_mail = 'iOow2.u}*.*,';

	$config['lang']=array(''=>'Tiếng Việt','en'=>'Tiếng Anh');#Danh sách ngôn ngữ hỗ trợ
	
	$config['author']['name'] = 'Võ Thị Thúy Hằng';
	$config['author']['email'] = 'vothithuyhang.nina@gmail.com';
	$config['author']['timefinish'] = '06/09/2013';
	
	date_default_timezone_set('Asia/Ho_Chi_Minh');

?>