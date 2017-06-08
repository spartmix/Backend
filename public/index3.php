<?php
require_once('Usuario.php');
require_once('Admin.php');

$values = array(new Usuario());

$values[0]->setId(1);
$values[0]->setNome('Eder');
$values[0]->setEmail('eder@gmail.com');


$admin = new Admin();
$admin->setSenha('1234');
$admin->setId(1);
$admin->setNome('Eder');
$admin->setEmail('ederdeivid@live.com');


$values[1] = $admin;
var_dump($values);

