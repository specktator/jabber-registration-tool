<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
<meta name="author" content="Rene S. C. Bartosh (kirjava@jabber.org)" />
<meta name="description" content="The Jabber Registration Tool (JRT) is a PHP: Hypertext Preprocessor (PHP) script that allows registration of Jabber I.D.'s (JID's) on a Jabber server via the web. It is distributed under the GNU General Public License (GPL)." />
<meta name="keywords" content="jabber,ID,JID,account,register,registration,tool,utility,program,application,PHP,web,internet,www" />
<title>Jabber Registeration Tool :: Registering a Jabber I.D. (JID)</title>
</head>
<body>
<div style="text-align: center;">
<h1>Jabber Registeration Tool :: Registering a Jabber I.D. (JID)</h1>

<?php

// load the class.jabber.php
require ("class.jabber.php") ;

// load '$jabber' object
$jabber = new Jabber ;

// connect() variables
$jabber->server = $_POST['server'] ;
$jabber->port = "5222" ;

// AccountRegistration() variables
$jabber->username = $_POST['username'] ;
$jabber->password = $_POST['password'] ;

// check if passwords match
if ($_POST['password'] == $_POST['password2']) {
echo ("<p>Checking password: Password OK</p>") ;
// set up error checking variable
$continue = "yes" ;
}
else {
echo ("<p>Checking password: Error: Passwords don't match, please <a href=\"./\">try again</a>.</p>") ;
}

// connect to jabber server (if $continue equals "yes", then the passwords must match)
if ($continue == "yes") {
$jabber->Connect() or die ("<p>Error: Can't connect to Jabber server '$jabber->server'.</p>") ;
}

// register account (if passwords match)
if ($continue == "yes") {
$status = $jabber->AccountRegistration($_POST['email'], $_POST['name']) ;
}

// eror message is printed depending on the error code ($status)
switch ($status) {

case 0:
echo ("<p>Unknown error, error code = '0'.</p>") ;
break ;

case 1:
echo ("<p>Error: The username '$jabber->username' is already in use on the Jabber server '$jabber->server', please <a href=\"./\">try again</a>.</p>") ;
break ;

case 2:
echo ("<p>JID '$jabber->username@$jabber->server' successfully registered with Jabber server '$jabber->server'. Now 
fire up your Jabber client (<a href=\"http://jabberstudio.org/project/?cat=5\">download one here</a> if you haven't 
already and login!") ;
break ;

case 3:
echo ("<p>Error: Jabber server '$jabber->server' didn't respond.</p>") ;
break ;

case 4:
echo ("<p>Unknown error, error code = '4'.</p>") ;
break ;
}

// sign off (if passwords match :p)
if ($continue == "yes") {
$jabber->Disconnect() ;
}

?>

<hr>
<a href="http://jabberpowered.org/"><img src="jabber-powered.png" alt="JabberPowered" height="18" width="123" border="0" align="right" /></a>
| <a href="http://jrt.jabberstudio.org/">JRT Homepage</a> | Powered by 
<a href="http://php.net/">PHP</a> and <a 
href="http://phpjabber.g-blog.net/">class.jabber.php</a> | Hosted by <a 
href="http://jabberstudio.org/">JabberStudio.org</a> | <a href="legal.php">Legal Info</a> | Made by <a href="http://hblug.debian.co.nz/kirjava/">kirjava</a> | <a href="http://jabber.org/">jabber.org</a> |
</div>
</body>
</html>
