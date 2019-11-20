<?php 



session_start();
ob_start();
session_destroy();
session_unset();
unset($_SESSION['oturum']);
ob_end_flush();
?>