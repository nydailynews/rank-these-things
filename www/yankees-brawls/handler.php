<?php
$slug = 'yankees-brawls';
$ranker_id = 6;

if ( !isset($SERVER_ROOT) ) $SERVER_ROOT = '../../../';
if ( !isset($DB) ) $DB = '_staging';
require_once ($SERVER_ROOT . 'includes/php/mysql_connect' . $DB . '.php');
include('../incl/ranker_mysql.php');
