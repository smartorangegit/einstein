<?php session_start();
/*Utm 01.02.2018*/
 if ($_GET)
 {
	 $utm=array(
		'utm_source' ,
		'utm_medium',
		'utm_campaign' ,
		'utm_term', 
		'utm_content' 
		);
	 foreach($_GET as $key=>$t)
	 {	 
		$metka= array_search($key,$utm);
		 if ($metka!==FALSE)
		 {
			 $_SESSION[$utm[$metka]]=$t;
		 }
	 }
 }
/*Utm End*/