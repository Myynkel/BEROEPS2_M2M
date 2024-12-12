<?php
require 'phpUtils.php';

$db = databaseConnect('BEROEPS2_101342');

if ($db) {
    echo 'Connection Succesful';
} else {
    echo 'Connectie Gefaald';
}
