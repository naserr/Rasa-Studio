<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="rasa music studio" />
<meta name="keywords" content="Music,Studio,Music maker" />
<title>Rasa Music Studio</title>
<link type="text/css" rel="stylesheet" href="css.css" />
<link type="text/css" rel="stylesheet" href="font/font.css" />
<script type="text/javascript" language="javascript" src="validator.js"></script>
</head>

<body>
	<div class="container">
    
		<div class="header">
        <br />
		<?php
            include('inc/inside-menu.php');
        ?>
	<div class="clear"></div>

		<div class="contain">
        	<div class="leftpanel"></div>
                    	<div class="contact">
                        <img class="logou" src="images/rasa logo.gif" width="135" height="125" />
		<form class="contact" method="post" action="" >
	<p style="font:16px bhoma;
; color:white">
	<input class="contact" name="namefrom"type="text" class="field" value="نام" />
    </p>
	
	<p style="font:16px bhoma; color:white"><label for="emailfrom"><span class="required" style="color: #fff"></span></label><br />
	<span class="wpcf7-"><input class="contact" name="emailfrom"  type="text" class="field" value="ایمیل" /></span>
    </p>
	
	<p style="font:16px bhoma; color:white"><label for="phone"></label><br />
	<span class="wpc"><input class="contact" name="phone" type="text" class="field" value="تلفن" /></span>
    </p>
	
	<p style="font:16px bhoma; color:white"><label for="subject"> <span class="required" style="color: #fff"></span></label><br />
	<span class=""><input class="contact" name="subject" type="text" class="field" value="موضوع"/></span></p>
	
	<p style="font:16px bhoma; color:white"><label for="comments">متن<span class="required" style="color: #fff"></span></label><br />
    
	<span class=""><textarea class="comments" name="comments" rows="5" cols="60"  ></textarea></span>
    </p>

	<p style="font:16px bhoma; color:white"><label for="attachment">پیوست<br /></label>
    <input class="browse" name="attachment" type="file" style="font:12px Arial, Helvetica, sans-serif; color:#838383"/><br />
    </p>
    <p style="font:16px bhoma; color:white"><input class="send" value="ارسال" type="button" onclick="#" /></p>
		</form>
		</div>

<!-- PHP MAIL

</?php

if( isset($_GET['col']) && isset($_GET['row']) ){

	$col = $_GET['col'];
	$row = $_GET['row'];
	
		echo '<table class="mult" border="1" >';
	for($i=0;$i<$row;$i++){
		echo '<tr>';
		for($j=0;$j<$col;$j++){
			$k = $i*$j;
			echo "";
		}
		echo '';
	}
	echo '';



if( @mail('info@naserr.ir','PHP mail send dynamic',"") ){
	echo "Mail Sent.";
}else{
	echo "Error in sending mail.";
}
?>
-->
<!-- RightPanel--LOGIN-->        
        
		<div class="rightpanel">
				<div class="login">
				<form  action="" style="text-align:center; font-size:16px" >
					نام کاربری :<input class="user"  type="text" name="username"/><br />
					رمز ورود :<input class="user"  type="password" name="pws"/><br /><br />
                    
					<input class="b" type="button" value="ورود" onClick="javascript:location.href = '#';" />
					<input class="a" type="button" value="ثبت نام" onClick="javascript:location.href ='signup.php';" />
                </form>
				</div>
		</div>
			<div class="clear"></div><br /><br />
			<div class="footer">
            <?php
                include('inc/inside-footer.php');
            ?>
        </div>
    </div>
</body>
</html>
