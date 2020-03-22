<?php
include_once("../src/Admission.php");
//print_r($_POST);
$obj = new Admission();
$obj->setData($_POST);
$obj->store();
print_r($_POST);
echo "Successfully added. To see details go to.<a href='show.php'>Click Here</a>";




