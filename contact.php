<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="rasa music studio"/>
<meta name="keywords" content="Music,Studio,Music maker"/>
<title>Rasa Music Studio</title>
<link type="text/css" rel="stylesheet" href="css.css" />
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
	<p style="font:16px Arial, Helvetica, sans-serif; color:white"><label for="namefrom">Name <span class="required" style="color: #fff">*</span></label><br />
	<input class="contact" name="namefrom"type="text" class="field" value="" />
    </p>
	
	<p style="font:16px Arial, Helvetica, sans-serif; color:white"><label for="emailfrom">Email<span class="required" style="color: #fff">*</span></label><br />
	<span class="wpcf7-"><input class="contact" name="emailfrom"  type="text" class="field" value="" /></span>
    </p>
	
	<p style="font:16px Arial, Helvetica, sans-serif; color:white"><label for="phone">Phone</label><br />
	<span class="wpc"><input class="contact" name="phone" type="text" class="field" value="" /></span>
    </p>
	
	<p style="font:16px Arial, Helvetica, sans-serif; color:white"><label for="subject">Subject <span class="required" style="color: #fff">*</span></label><br />
	<span class=""><input class="contact" name="subject" type="text" class="field" value=""/></span></p>
	
	<p style="font:16px Arial, Helvetica, sans-serif; color:white"><label for="comments">Comments<span class="required" style="color: #fff">*</span></label><br />
    
	<span class=""><textarea class="comments" name="comments" rows="5" cols="60" class="field"  ></textarea></span>
    </p>

	<p style="font:16px Arial, Helvetica, sans-serif; color:white"><label for="attachment">Attachment<br /></label>
    <input class="browse" name="attachment" type="file" style="font:12px Arial, Helvetica, sans-serif; color:#838383"/><br />
    </p>
    <p><input class="send" value="" type="button" onclick="#" /></p>
		</form>
		</div>
        
        
<!-- RightPanel--LOGIN-->        
        
		<div class="rightpanel">
				<div class="login">
				<form  action="" style="text-align:center; font-size:14px">
					User name:<input class="user"  type="text" name="username"/><br />
					Password : <input class="user"  type="password" name="pws"/><br /><br />
                    
					<input class="b" type="button" value="" onClick="javascript:location.href = '#';" />
					<input class="a" type="button" value="" onClick="javascript:location.href ='signup.php';" />
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
