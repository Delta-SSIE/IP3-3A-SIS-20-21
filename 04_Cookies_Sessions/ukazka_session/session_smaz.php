<?php
session_start();
session_destroy();
var_dump($_SESSION);
$_SESSION = [];
var_dump($_SESSION);
