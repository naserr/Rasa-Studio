<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="rasa music studio" />
<meta name="keywords" content="Music,Studio,Music maker" />
<title>استودیو رسا رکورد</title>
<link type="text/css" rel="stylesheet" href="css.css" />
<link type="text/css" rel="stylesheet" href="font/font.css" />
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
			<div class="leftpanel">
				<div class="login-work">
				<form  action="" style="text-align:center; font-size:16px" >
					نام کاربری :<input class="user"  type="text" name="username"/><br />
					رمز ورود :<input class="user"  type="password" name="pws"/><br /><br />
                    
					<input class="b" type="button" value="ورود" onClick="javascript:location.href = '#';" />
					<input class="a" type="button" value="ثبت نام" onClick="javascript:location.href ='signup.php';" />
                </form>
				</div>
            </div>
            <div class="music">
			<img class="top" src="images/Headset2.gif" width="100" height="100" />
            <ul class="muz">
				<li><a href="music/valen.mp3"><img class="hd" title="Play Or Download" src="images/playit.gif" width="50" height="50" /></a>
                </li>
				<li><a href="#"><img class="hd" src="images/puse.gif" width="50" height="50" /></a>
                </li>

				<li><a href="#"><img class="hd" src="images/stop.gif" width="50" height="50" /></a></li>
				<li><a href="work4.php"><img class="hd" title="previous Work" src="images/perivios.gif" width="50" height="50" /></a>
                </li>

				<li><a href="work1.php"><img class="hd" title="Next Work" src="images/next.gif" width="50" height="50" /></a>
                </li>
				<li><a href="#"><img class="hd" src="images/sound.gif" width="50" height="50" /></a></li>
                </ul>
				<div class="player">
					<audio controls="controls">
  <source src="music/valen.mp3" type="audio/mpeg" />
  <source src="music/valen.ogg" type="audio/ogg" />
<embed height="0px" width="0px" src="valen.mp3" /> <p class="player">
برای نمایش پلیر لطفا مرورگر خود را به IE9 بروز رسانی کنید! </p>
					</audio>
				</div>
            </div>
			<div class="rightpanel">
            
            <p class="z">نام اثر :<br />Valen Day By Piano<br />نام آلبوم : اولین آلبوم<br />تاریخ اثر : 10/20/2011</p>
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
