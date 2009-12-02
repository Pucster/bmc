<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-type" content="text/html;charset=utf-8" />
  <title>BMC: Log in</title>
  <link rel="stylesheet" type="text/css" href="login.css" />
</head>
<body>
  <form id="login-form" method="post" action="login.inc.php">
    <fieldset>
      <legend>Login to Web Site</legend>
      <p>Please enter your username and password to access the administrator's panel</p>
      <label for="username">
        <input type="text" name="username" id="username" />Username:
      </label>
      <label for="password">
        <input type="password" name="password" id="password" />Password:
      </label>
      <label for="submit">
        <input type="submit" name="submit" id="submit" value="Login" />
      </label>
    </fieldset>
  </form>
</body>
</html>