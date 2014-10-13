<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
  <meta name="author" content="Rene S. C. Bartosh (kirjava@jabber.org)" />
  <meta name="description" content="The Jabber Registration Tool (JRT) is a PHP: Hypertext Preprocessor (PHP) script that allows registration of Jabber I.D.'s (JID's) on a Jabber server via the web. It is distributed under the GNU General Public License (GPL)." />
  <meta name="keywords" content="jabber,ID,JID,account,register,registration,tool,utility,program,application,PHP,web,internet,www" />
  <title>Jabber Registration Tool</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/jrt.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Jabber Registration Tool</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  <div class="container">

    <div class="starter-template">
      <p class="lead">This tool will help you to create a new Jabber account. 
      Your JID (Jabber IDentifier) will be in the form of <b>Username</b>@<b>Jabber_server</b>. 
      Please read carefully the instructions, complete the fields and you will have your Jabber account in less than two minutes.</p>

      <form role="form" method="post" action="register.php">
        <div class="form-group">
          <label for="username"><font color="red">1.</font> Username:</label>
          <input type="text" class="form-control" name="username" id="username" maxlength="255" placeholder="Enter username">
          <ul>
            <li>This will be the <em>username</em> (<em>nick</em>) you will use to login on your account.
            <li>As the JID is case-insensitive, <em>yourname</em> is the same as <em>YourName</em>.
            <li>A JID can <span style="text-decoration: underline;">not</span> contain any of these charaters: @ : ' " &lt; &gt; &amp;
          </ul>
      </div>
      <div class="form-group">
        <label for="server"><font color="red">2.</font> Jabber server:</label>
        <input type="text" class="form-control" size="20" id="server" name="server" value="totallynoob.com">
        <ul>
          <li>You can create your account on any public Jabber server you want.
          <li>You will be able to chat with people, join chatrooms and use the services from any other public server you want.
          <li>The default Jabber server, <em>jabber.org</em>, does <span style="text-decoration: underline;">not</span>
                support transports to AIM, MSN, ICQ or Yahoo!.
          <li>As <em>jabber.org</em> is also really congested, perhaps you prefer to create your account on another server.
          <li>For a full list of other public Jabber servers, please look at 
                <a href="http://www.jabber.org/user/publicservers.php">http://www.jabber.org/user/publicservers.php</a>.
        </ul>
      </div>
      <div class="form-group">
        <label for="password"><font color="red">3.</font> Password:</label>
        <input type="password" class="form-control" size="20" id="password" name="password" maxlength="255" placeholder="Enter password"> 
        <ul>
          <li>This password protects your account. Don't tell your password to anybody. 
              If a so called administrator says he needs your password to correct any problem you have, he is lying. 
              Nobody else but you needs your password.
          <li>You can always change your password using your prefered Jabber client.
          <li>Most Jabber clients can memorize your password, so you don't need to introduce it everytime.
          <li>Please memorize your password, ot write it somewhere, as there is no possibility to recover it.
        </ul>
      </div>
      <div class="form-group">
        <label for="password2">Verify Password:</label>
        <input type="password" class="form-control" id="password2" placeholder="Verify password" size="20" name="password2" maxlength="255">
      </div>
      <div class="form-group">
        <label for="name"><font color="red">4.</font> Name</b> (optional):</label>
        <input type="text" class="form-control" id="name" placeholder="alias name" size="20" name="name" maxlength="255">
      </div>
      <div class="form-group">
        <label for="email"><font color="red">5.</font> E-Mail</b> (optional):</label>
        <input type="text" class="form-control" id="email" placeholder="enter your email" size="20" name="email" maxlength="255">
      </div>
      <div class="form-group">
        <label for="email"><font color="red">6.</font> Create account</label>
        <p>If you have filled the required fields and take note on your <b>username</b>, <b>server</b> and <b>password</b>, click on the button to proceed to create your new Jabber account.</p>
        <input type="submit" class="btn btn-success" value="Create account">
        <!-- <input type="reset" value="Reset Form"> -->
      </div>

      </form>
    </div>
  </div>
<hr>
<a href="http://jabberpowered.org/"><img src="jabber-powered.png" alt="JabberPowered" height="18" width="123" border="0" align="right" /></a>
| <a href="http://jrt.jabberstudio.org/">JRT Homepage</a> | Powered by <a href="http://php.net/">PHP</a> and <a href="http://jabber.g-blog.net/">class.jabber.php</a> | Hosted by <a href="http://jabberstudio.org/">JabberStudio.org</a> | <a href="legal.php">Legal Info</a> | Made by <a href="http://hblug.debian.co.nz/kirjava/">kirjava</a> | <a href="http://jabber.org/">jabber.org</a> |
</body>
</html>
