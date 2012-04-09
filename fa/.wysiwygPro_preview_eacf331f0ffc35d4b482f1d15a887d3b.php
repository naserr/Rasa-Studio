<?php
if ($_GET['randomId'] != "rbo9SpfsQKR7Bv9eaur_O902Uev65lxSHpsV2mGc0X_22WxpTlrCRMSI44DDAZ0g") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
