<div id="login">
<?php 

///////////////////// conditional message /////////////////

?>
<form id="loginForm" name="loginForm" method="post" action="includes/checklogin.php">
                  <label for="username">Username</label>
                  <input name="username" type="text" id="username">
                  <label for="password">Password</label>
                  <input name="password" type="password" id="password">
                  <input type="submit" name="Submit" value="Login">
</form>
<?php 
// closing curly 

?>
</div>