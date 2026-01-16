<?php

require('../config.php') ;
require('../function_admin.php');

ouverture();

session_start();
session_unset(); 
session_destroy(); 

$expire = 365 * 24 * 3600; 

setcookie('phpladminuser', '', time() - $expire, '/', '');
setcookie('phpladminpass', '', time() - $expire, '/', '');

header('location: index.php');

?>