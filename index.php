<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 11/06/19
 * Time: 09:17
 */
include_once "Fan.php";

$fan1 =new Fan();
$fan1->setSpeed('FAST');
$fan1->setColor('yellow');
$fan1->setRadius(10);
echo $fan1->toString() . "</br>";

$fan2 = new Fan();
$fan2->setSpeed('MEDIUM');
$fan2->setOn('true');
echo $fan2->toString();