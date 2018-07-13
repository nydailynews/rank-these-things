<?php
$slug = 'new-york-jets-draft-busts';
$ranker_id = 5;

if ( !isset($SERVER_ROOT) ) $SERVER_ROOT = '../../../';
if ( !isset($DB) ) $DB = '_staging';
require_once ($SERVER_ROOT . 'includes/php/mysql_connect' . $DB . '.php');
include('../incl/ranker_mysql.php');
