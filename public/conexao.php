<?php
$db = new PDO('mysql:host=mariadb;dbname=sBanco','root','32130');


$stmt = $db->query('SELECT * FROM cad_users LIMIT 3');

foreach($db->query('SELECT * FROM cad_users') as $row) {
    echo $row['Host'], "\n";
}