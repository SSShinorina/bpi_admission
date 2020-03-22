<?php
include_once ("../src/Admission.php");
$obj1=new Admission();
$obj1->setData($_GET);
$item=$obj1->show();
print_r($item);
