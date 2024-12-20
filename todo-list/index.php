<?php
require_once __DIR__.'/utils.php';
define('FILE_NAME', 'task.csv');
$tasks = getTasks();
include 'index.tpl.php';
