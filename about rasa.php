<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="rasa music studio" />
<meta name="keywords" content="Music,Studio,Music maker" />
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
                    	<div class="contact">
                        <h2 class="topic">Rasa Record Studio</h2>
                        <p class="aboutrasa">A recording studio is a facility for sound recording and mixing. Ideally both the recording and monitoring spaces are specially designed by anacoustician to achieve optimum acoustic properties (acoustic isolation or diffusion or absorption of reflected sound that could otherwise interfere with the sound heard by the listener). Recording studios may be used record musicians, voice over artists for advertisements or dialogue replacement in film, television or animation, foley, or to record their accompanying musical soundtracks. The typical recording studio consists of a room called the "studio" or "live room", where instrumentalists and vocalists perform; and the "control room", which houses the professional audioequipment for either analogue or digital recording, routing and manipulating the sound. Often, there will be smaller rooms called "isolation booths" present to accommodate loud instruments such as drums or electric guitar, to keep these sounds from being audible to the microphones that are capturing the sounds from other instruments, or to provide "drier" rooms for recording vocals or quieter acoustic instruments.<br />
                        By:wikipedia

</p>
<img class="logob" src="images/rasa logo.gif" width="145" height="135" />
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
