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
            
                    	<div class="signup" style="font:14px Arial, Helvetica, sans-serif; color:white">
                        First name : <input class="sign" type="text" name="firstname"/><br />
            Last name : 
            <input  class="sign" type="text" name="lastname"/><br /><br />
            Your Age: <input  class="sign"  type="text" name="date" size="10"/><br /><br />
            
            User name:<input  class="sign" type="text" name="username"/><br />
            Password : <input  class="sign" type="password" name="pws"/><br /><br />
            
            Select your gender :
            <input    type="radio" name="gender" value="male"/>Male
            <input   type="radio" name="gender" value="Femele"/>Female<br /><br />
            Country : <input  class="sign" type="text" name="country"/>
            City : <input  class="sign" type="text" name="city"/><br /><br />
            Type your address : <input  class="sign"  type="text" name="address" size="50"/><br /><br />
            Mobile : <input class="sign"  type="text" name="mobile"/><br/><br />
            Email : <input  class="sign" type="text" name="email"/><br /><br />
            
            <textarea class="textarea" rows="4" cols="45">
            General Forum Rules:
These rules apply to all Forum categories.

We take the "Be Polite" rule very seriously. We do not tolerate any rudeness. Any member who is intentionally unpleasant or disruptive may be banned without warning.
If you SPAM our members in any manner, your account will be disabled. Do not contact anyone to suggest your product or service who is not explicitly expecting you to contact them from an advertising forum post. If you glean information from anywhere other than the advertising forums and use that information to contact someone and present an offer, it's SPAM and it will affect your WHT account standing.
Your account is yours alone. You are responsible for any activity created with it. You may not share your account login with anyone. If you choose to ignore this important restriction your account, and any accounts associated with it, will be disabled.
All publicly displayed messages are limited to the English language. This includes posts, titles, signatures, and any attachments or other forms of public display.
Signature Spam (a post that was made in hopes of showing a signature, as determined by moderators) is forbidden in all forum categories.
You may not post commission, referral or affiliate links anywhere on the forum.
Cross-Posting is not allowed here. Cross-posting refers to posting new duplicate threads or posts, or the linking to threads or posts already started by the member with the intention of gaining exposure.
You may not compensate anyone for any review or recommendation. Further, you may not suggest a tone (i.e. "Go talk good about us on WHT").
You may not post on behalf of any banned member in any public manner. This includes all forums, private messages, signatures, and e-mail features.
You may not post words or URLs that are censored by adding spaces, dots, or substituting characters; or by any other means in an attempt to defeat any censors put in place by WebHostingTalk. Please contact us if you feel a word or URL is unjustly censored.
You may not link, in any manner, to sites or images containing pornography, sexually explicit, gross violence, or are determined by moderators to be detrimental to the community.
You must make five (5) posts before allowed by the system to include an active hyperlinked URL or other vB code features in your posts. If you choose to make meaningless posts to circumvent this restriction, your account will be disabled.
You must make five (5) posts before utilizing the PM and system e-mail features or viewing member profile information. If you choose to make meaningless posts to circumvent this restriction, your account will be disabled.
You may not bump threads. Bumping can refer to posting useless information, posting one-liners or any other action to deliberately keep a thread hot or to bring it to the top of its forum. Moderators will use their discretion, depending on the nature of the post, as to whether to take action or not.
You may not use discussions to recommend, praise, or belittle other products or services, or any company; without first hand experience of those products or services. This includes companies recommending other companies. Any post not meeting a moderator's criteria will be removed without notice.
Any posts that encourage illegal intent will be removed and the account disabled.
Public posts debating these rules and/or moderators' enforcement of such, will be removed without comment. We encourage feedback however and invite you to use our help desk if you have any questions or concerns.
Some forum categories have a "minimum (relevant, non-advertising, non-fluff) post count" and/or "minimum length of membership" restriction before a member is allowed to start a new thread. Please read the Forum Description and the Announcement within if you get a permissions error while trying to start a thread. If you choose to make meaningless posts to circumvent this restriction, your account will be disabled.
All Promotions (Use of features and forum access) are automatically updated by a cron system that runs hourly. If you have completed a minimum restriction and have waited over an hour without being promoted, please open a help desk ticket.
			</textarea><br />
			<input type="checkbox" name="want" /> I read rules and accept<br /><br />
          <input class="submit" type="button" value="Submit" onclick="javascript:location.href ='signup.php';" />
			<input class="reset" type="button" value="Reset" onClick="javascript:location.href = '#';" /> 
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
<!-- RightPanel--LOGIN-->        
            
        <div class="footer">
            <?php
                include('inc/inside-footer.php');
            ?>
        </div>
    </div>
</body>
</html>
