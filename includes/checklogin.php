<?php
// check login and create SESSION and count attempts
include('session.inc.php');
if($_POST['username'] == 'admin' && $_POST['password'] == 'letmein'){
    $_SESSION['login'] = 1;    
}
    header("Location: ".$_SERVER['HTTP_REFERER']);



?>