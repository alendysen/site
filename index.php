<?php
$path = pathinfo($_SERVER['SCRIPT_FILENAME']);
require($path['dirname'] . '/config.php');
require 'views/partial/head.php';
require 'views/partial/header.php';
require 'views/partial/sidebar.php';
require 'views/partial/footer.php';
?>
