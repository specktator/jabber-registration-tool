<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
<meta name="author" content="Rene S. C. Bartosh (kirjava@jabber.org)" />
<meta name="description" content="The Jabber Registration Tool (JRT) is a PHP: Hypertext Preprocessor (PHP) script that allows registration of Jabber I.D.'s (JID's) on a Jabber server via the web. It is distributed under the GNU General Public License (GPL)." />
<meta name="keywords" content="jabber,ID,JID,account,register,registration,tool,utility,program,application,PHP,web,internet,www" />
<title>Jabber Registeration Tool :: Registering a Jabber I.D. (JID)</title>
<?php include 'bootstrap.php'; ?>
</head>
<body>
<div style="text-align: center;">
<h1>Jabber Registeration Tool :: Registering a Jabber I.D. (JID)</h1>

<?php
session_start();

// load the class.jabber.php
require ("class.jabber.php") ;

// load '$jabber' object
$jabber = new Jabber ;

// connect() variables
$getDns = dns_get_record("_xmpp-client._tcp.".$_POST['server'],DNS_SRV);

// $jabber->server = $getDns[0]['target'] ;
$jabber->server = $_POST['server'] ;
$jabber->hostname = $getDns[0]['target'];
$jabber->port = "5222" ;

// AccountRegistration() variables
$jabber->username = $_POST['username'] ;
$jabber->password = $_POST['password'] ;

// check if passwords match
if ($_POST['password'] == $_POST['password2']) {
echo ("<div class=\"alert alert-success\" role=\"alert\" >Checking password: Password OK</div>") ;
// set up error checking variable
$continue = "yes" ;
}
else {
echo ("<div class=\"alert alert-danger\" role=\"alert\" >Checking password: Error: Passwords don't match, please <a href=\"./\">try again</a>.</div>") ;
}


// SECUREIMAGE

include_once 'securimage/securimage.php';
$securimage = new Securimage();


if ($securimage->check($_POST['captcha_code']) == false) {
  // the code was incorrect
  // you should handle the error so that the form processor doesn't continue

  // or you can use the following code if there is no validation or you do not know how
  echo "<div class=\"alert alert-danger\" role=\"alert\" >The security code entered was incorrect.</div>";
  echo "<div class=\"alert alert-danger\" role=\"alert\" >Please go <a href='javascript:history.go(-1)'>back</a> and try again.</div>";
  exit;
}


// connect to jabber server (if $continue equals "yes", then the passwords must match)
if ($continue == "yes") {
$jabber->Connect() or die ("<div class=\"alert alert-danger\" role=\"alert\" >Error: Can't connect to Jabber server '$jabber->server'.</div>") ;
}

// register account (if passwords match)
if ($continue == "yes") {
$status = $jabber->AccountRegistration($_POST['email'], $_POST['name']) ;
}

// eror message is printed depending on the error code ($status)
switch ($status) {

case 0:
echo ("<div class=\"alert alert-danger\" role=\"alert\" >Unknown error, error code = '0'.</div>") ;
break ;

case 1:
echo ("<div class=\"alert alert-danger\" role=\"alert\" >Error: The username '$jabber->username' is already in use on the Jabber server '$jabber->server', please <a href=\"./\">try again</a>.</div>") ;
break ;

case 2:
echo ("<div class=\"alert alert-success\" role=\"alert\" >JID '$jabber->username@$jabber->server' successfully registered with Jabber server '$jabber->server'. Now 
fire up your Jabber client (<a href=\"http://jabberstudio.org/project/?cat=5\">download one here</a> if you haven't 
already and login!") ;
break ;

case 3:
echo ("<div class=\"alert alert-danger\" role=\"alert\" >Error: Jabber server '$jabber->server' didn't respond.</div>") ;
break ;

case 4:
echo ("<div class=\"alert alert-danger\" role=\"alert\" >Unknown error, error code = '4'.</div>") ;
break ;
}

// sign off (if passwords match :p)
if ($continue == "yes") {
$jabber->Disconnect() ;
}

?>

<hr>
<?php include 'footer.php'; ?>
</div>
</body>
</html>
