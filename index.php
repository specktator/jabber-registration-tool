<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
  <meta name="author" content="Rene S. C. Bartosh (kirjava@jabber.org)" />
  <meta name="description" content="The Jabber Registration Tool (JRT) is a PHP: Hypertext Preprocessor (PHP) script that allows registration of Jabber I.D.'s (JID's) on a Jabber server via the web. It is distributed under the GNU General Public License (GPL)." />
  <meta name="keywords" content="jabber,ID,JID,account,register,registration,tool,utility,program,application,PHP,web,internet,www" />
  <title>totallynoob.com - Jabber Registration Tool</title>
  <?php include 'bootstrap.php' ?>
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
          <?php include 'navlinks.php'; ?>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  <div class="container">

    <div class="starter-template">
      <p class="lead">This tool will help you to create a new Jabber account. 
      Your JID (Jabber IDentifier) will be in the form of <b>Username</b>@<b>Jabber_server</b>. 
      Please read carefully the instructions, complete the fields and you will have your Jabber account in less than two minutes.</p>

      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
          <form role="form" method="post" action="register.php">
            <div class="form-group">
              <label for="username"><font color="red">1.</font> Username:</label>
              <input class="form-control" name="username" id="username" maxlength="255" placeholder="Enter username" type="text">
              <ul>
                <li>This will be the <em>username</em> (<em>nick</em>) you will use to login on your account.
                </li><li>As the JID is case-insensitive, <em>yourname</em> is the same as <em>YourName</em>.
                </li><li>A JID can <span style="text-decoration: underline;">not</span> contain any of these charaters: @ : ' " &lt; &gt; &amp;
              </li></ul>
            </div>
            <div class="form-group">
              <label for="server"><font color="red">2.</font> Jabber server:</label>
              <input class="form-control" size="20" id="server" name="server" value="totallynoob.com" type="text">
              <ul>
                <li>You can create your account on any public Jabber server you want.
                </li><li>You will be able to chat with people, join chatrooms and use the services from any other public server you want.
              </li></ul>
            </div>
            <div class="form-group">
              <label for="password"><font color="red">3.</font> Password:</label>
              <input class="form-control" size="20" id="password" name="password" maxlength="255" placeholder="Enter password" type="password"> 
              <ul>
                <li>This password protects your account. Don't tell your password to anybody. 
                    If a so called administrator says he needs your password to correct any problem you have, he is lying. 
                    Nobody else but you needs your password.
                </li><li>You can always change your password using your prefered Jabber client.
                </li><li>Most Jabber clients can memorize your password, so you don't need to introduce it everytime.
                </li><li>Please memorize your password, ot write it somewhere, as there is no possibility to recover it.
              </li></ul>
            </div>
            <div class="form-group">
              <label for="password2">Verify Password:</label>
              <input class="form-control" id="password2" placeholder="Verify password" size="20" name="password2" maxlength="255" type="password">
            </div>
            <div class="form-group">
              <label for="name"><font color="red">4.</font> Name (optional):</label>
              <input class="form-control" id="name" placeholder="alias name" size="20" name="name" maxlength="255" type="text">
            </div>
            <div class="form-group">
              <label for="email"><font color="red">5.</font> E-Mail (optional):</label>
              <input class="form-control" id="email" placeholder="enter your email" size="20" name="email" maxlength="255" type="text">
            </div>
            <div class="form-group">
              <label for="email"><font color="red">6.</font> Create account</label>
              <p>If you have filled the required fields and take note on your <b>username</b>, <b>server</b> and <b>password</b>, click on the button to proceed to create your new Jabber account.</p>
              <input class="btn btn-success" value="Create account" type="submit">
              <!-- <input type="reset" value="Reset Form"> -->
            </div>
          </form>
        </div>
        <div class="col-lg-3"></div>
      </div> <!-- .row -->
    </div>
  </div>
<hr>
<?php include 'footer.php'; ?>
</body>
</html>
