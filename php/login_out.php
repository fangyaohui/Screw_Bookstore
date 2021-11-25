<?php
require_once 'common/function.php';
session_start();
$_SESSION['user'] = "";
redirect("index.php");
