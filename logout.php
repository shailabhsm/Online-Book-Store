<?php
require './inc/core.inc.php';
session_destroy();
header('Location: login.php');
?>