<?php

require('../config.php') ;
require('../function_prono.php');

ouverture();

session_start();
session_unset(); 
session_destroy(); 

$expire = 365 * 24 * 3600; 

setcookie('phplpronouser', '', time() - $expire, '/', '');
setcookie('phplpronopass', '', time() - $expire, '/', '');

header('location: index.php');

?>