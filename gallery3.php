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
			<div class="leftpanel"><p></p></div>
			<div class="gallery">
				<img class="center" src="images/f3.jpg" width="598" height="380" />
				<div class="naviga">
					<a href="gallery2.php"><img class="navigaa" src="images/perivios.gif" width="50" height="50" /></a>
					<a href="gallery4.php"><img class="navigab" src="images/next.gif" width="50" height="50" /></a>

				</div>
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
			<div class="clear"></div>

		</div>
        <div class="footer">
            <?php
                include('inc/inside-footer.php');
            ?>
        </div>
	</div>
</body>
</html>
