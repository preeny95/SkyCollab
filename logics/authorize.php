<?php
include '../includes/session.inc.php';

if(!isset($_SESSION['login']))
{
    header('Location: '.$_SERVER['HTTP_REFERER']);
}
else{
    header('Location: ../adminpage.php');
}
?>