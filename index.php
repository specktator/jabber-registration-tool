<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
  <meta name="author" content="Rene S. C. Bartosh (kirjava@jabber.org)" />
  <meta name="description" content="The Jabber Registration Tool (JRT) is a PHP: Hypertext Preprocessor (PHP) script that allows registration of Jabber I.D.'s (JID's) on a Jabber server via the web. It is distributed under the GNU General Public License (GPL)." />
  <meta name="keywords" content="jabber,ID,JID,account,register,registration,tool,utility,program,application,PHP,web,internet,www" />
  <title>Jabber Registration Tool</title>
</head>

<body>

<center><h2>Jabber Registration Tool</h2></center>

<p>This tool will help you to create a new Jabber account. 
Your JID (Jabber IDentifier) will be in the form of <b>Username</b>@<b>Jabber_server</b>. 
Please read carefully the instructions, complete the fields and you will have your Jabber account in less than two minutes.</p>

<hr>
<blockquote>

<!-- JID's take the form of 'username@server.com'. For example, my JID is 'kirjava@jabber.org'.
The maximum length for a JID is 255 characters. -->

<form method="post" action="register.php">

<b><font color="red">1.</font> Username:</b>
<input type="text" size="20" name="username" maxlength="255">
<br />
<ul>
  <li>This will be the <em>username</em> (<em>nick</em>) you will use to login on your account.
  <li>As the JID is case-insensitive, <em>yourname</em> is the same as <em>YourName</em>.
  <li>A JID can <span style="text-decoration: underline;">not</span> contain any of these charaters: @ : ' " &lt; &gt; &amp;
</ul>

<b><font color="red">2.</font> Jabber server:</b>
<input type="text" size="20" name="server" value="jabber.org">
<br />
<ul>
  <li>You can create your account on any public Jabber server you want.
  <li>You will be able to chat with people, join chatrooms and use the services from any other public server you want.
  <li>The default Jabber server, <em>jabber.org</em>, does <span style="text-decoration: underline;">not</span>
        support transports to AIM, MSN, ICQ or Yahoo!.
  <li>As <em>jabber.org</em> is also really congested, perhaps you prefer to create your account on another server.
  <li>For a full list of other public Jabber servers, please look at 
        <a href="http://www.jabber.org/user/publicservers.php">http://www.jabber.org/user/publicservers.php</a>.
</ul>

<b><font color="red">3.</font> Password:</b>
<input type="password" size="20" name="password" maxlength="255"> 
<br />
<ul>
  <li>This password protects your account. Don't tell your password to anybody. 
      If a so called administrator says he needs your password to correct any problem you have, he is lying. 
      Nobody else but you needs your password.
  <li>You can always change your password using your prefered Jabber client.
  <li>Most Jabber clients can memorize your password, so you don't need to introduce it everytime.
  <li>Please memorize your password, ot write it somewhere, as there is no possibility to recover it.
</ul>

<b>Verify Password:</b>
<input type="password" size="20" name="password2" maxlength="255">
<br />
<br />

<b><font color="red">4.</font> Name</b> (optional)<b>:</b>
<input type="text" size="20" name="name" maxlength="255">
<br />
<br />

<b><font color="red">5.</font> E-Mail</b> (optional)<b>:</b>
<input type="text" size="20" name="email" maxlength="255"> 
<br />
<br />

<b><font color="red">6.</font> Create account</b>
<br />
<p>If you have filled the required fields and take note on your <b>username</b>, <b>server</b> and <b>password</b>, click on the button to proceed to create your new Jabber account.</p>
<input type="submit" value="Create account">
<!-- <input type="reset" value="Reset Form"> -->

</form>
</blockquote>

<hr>
<a href="http://jabberpowered.org/"><img src="jabber-powered.png" alt="JabberPowered" height="18" width="123" border="0" align="right" /></a>
| <a href="http://jrt.jabberstudio.org/">JRT Homepage</a> | Powered by <a href="http://php.net/">PHP</a> and <a href="http://jabber.g-blog.net/">class.jabber.php</a> | Hosted by <a href="http://jabberstudio.org/">JabberStudio.org</a> | <a href="legal.php">Legal Info</a> | Made by <a href="http://hblug.debian.co.nz/kirjava/">kirjava</a> | <a href="http://jabber.org/">jabber.org</a> |
</div>
</body>
</html>
