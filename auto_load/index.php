<?php
use AppPsr4\Test1\TestA as TestA;
use AppPsr4\Test2\TestB as TestB;
use AppPsr4\Test3\TestC as TestC;
use AppPsr4\Test4\TestD as TestD;
require_once "vendor/autoload.php";
//$user = new User();

//psr4
//$user = new TestA();
$user = new TestD();
