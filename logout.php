<?php
require 'core.php';
echo "i am logged out ";
sleep(3);
session_destroy();
header('Location: mainpage.php');
?>
