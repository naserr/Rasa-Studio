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
			<div class="leftpanel">
				<div class="login">
				<form  action="" style="text-align:center; font-size:14px">
					User name:<input class="user"  type="text" name="username"/><br />
					Password : <input class="user"  type="password" name="pws"/><br /><br />
                    
					<input class="b" type="button" value="" onClick="javascript:location.href = '#';" />
					<input class="a" type="button" value="" onClick="javascript:location.href ='signup.php';" />
                </form>
				</div>
            </div>
            <div class="music">
            <div style="clear:both;	margin:50px 0px 20px 180px;padding:1px;width:150px;height:150px;">
			<img id="head" src="images/Headset2.gif" usemap="#head" width="100" height="100" />
            </div>
            
            <!-- Control Music Menu
            <ul class="muz">
				<li><a href="music/leave.mp3"><img class="hd" title="Play Or Download" src="images/playit.gif" width="50" height="50" /></a>
                </li>
				<li><a href="#"><img class="hd" src="images/puse.gif" width="50" height="50" /></a>
                </li>

				<li><a href="#"><img class="hd" src="images/stop.gif" width="50" height="50" /></a></li>
				<li><a href="work1.php"><img class="hd" title="previous Work" src="images/perivios.gif" width="50" height="50" /></a>
                </li>

				<li><a href="work2.php"><img class="hd" title="Next Work" src="images/next.gif" width="50" height="50" /></a>
                </li>
				<li><a href="#"><img class="hd" src="images/sound.gif" width="50" height="50" /></a></li>
                </ul>
                -->
                <div class="player">
					<audio controls="controls">
  <source src="music/bleed.mp3" type="audio/mpeg" />
  <source src="music/bleed.ogg" type="audio/ogg" />
<embed height="0px" width="0px" src="bleed.mp3" />
 To Show The Player Please Update Your Browser To IE9 Or Chrome !
					</audio>
				</div>
            </div>
			<div class="rightpanel">
            
            <h4>Music Name :<br />Bleed_It_Out<br /> the rest By Piano<br />Album : First<br />Date : 10/20/2011</h4>
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
