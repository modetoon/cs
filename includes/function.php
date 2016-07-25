<?php  
function connect_db( ) {
	$link = mysqli_connect( "localhost", "root", "", "dbKTPBOOK" ) ;
	if ( $link === false ) {   
		die( "เกิดข้อผิดพลาดในการเชื่อมต่อฐานข้อมูล" ) ;			
	} else {
		mysqli_query( $link, "SET CHARSET UTF-8" ) ;	
		return $link ;
	} 
}  

function process_message( $msg, $url ) { 
	$info = pathinfo( $url );
	echo '<table align="center" bgcolor="#990000" width="50%">' ;
	echo '<tr><td bgcolor="#FF9999" align="center" height="30" style="font-weight:bold; font-size:16px">ผลลัพธ์</td></tr>' ;
	echo '<tr><td bgcolor="#FCFCFC" align="center">' ;
	echo '<br/><font color="red" size="+1">'.$msg.'</font><br/>' ;
	echo '<img src="'.ROOT_DIR.'images/process.gif"/><br/>' ;
	echo '<font color="blue" size="+1">รอสักครู่ กำลังเชื่อมโยงไปยังเพจ "'.$info['filename'].'.php"</font>' ;
	echo '<br/><br/></td></tr></table>' ;  
	echo '<meta http-equiv="refresh" content="5; URL='.$url.'">' ;  
	show_footer( ) ;
	exit ; 
}   

function check_authen( $right ) {
	if ( $right == "admin" && !isset($_SESSION["Admin"]) ) {
	 	$msg = "ส่วนนี้ใช้งานได้เฉพาะผู้ดูแลระบบ <br/>หากคุณเป็นผู้ดูแลระบบ กรุณาเข้าระบบก่อน";
		process_message ($msg, ROOT_DIR."index.php") ; 
		show_footer() ; 		exit ;

	} elseif ( $right == "member" && !isset($_SESSION["ssMember"]) ) {
	 	$msg = "ส่วนนี้ใช้งานได้เฉพาะสมาชิกของเว็บไซต์ <br/>" ; 
		$msg .= "<ul style=\"text-align:left; font-size:20px\"><li>หากคุณเป็นสมาชิก กรุณาเข้าระบบก่อน</li>" ; 
		$msg .= "<li>หากคุณไม่ได้เป็นสมาชิก กรุณาสมัครสมาชิกก่อน</li></ul>" ;
		process_message ($msg, ROOT_DIR."index.php") ; 
		show_footer() ; 		exit ;

	// user ในที่นี้หมายถึง admin และ member 	
	} elseif ( $right == "user" && ( !isset($_SESSION["Admin"]) && !isset($_SESSION["ssMember"]) ) ) { 
		$msg = "ส่วนนี้ใช้งานได้เฉพาะผู้ดูแลระบบ และสมาชิกของเว็บไซต์ <br/>หากคุณเป็นผู้ดูแลระบบ หรือสมาชิก กรุณาเข้าระบบก่อน" ;
		process_message( $msg, ROOT_DIR."index.php" ) ; 			
		show_footer() ; 		exit ;
	}
}	?>