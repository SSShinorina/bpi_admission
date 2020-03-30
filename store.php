<?php
include_once("../src/Admission.php");

//$obj = new Admission();
//$obj->setData($_POST);
//$obj->store();
//if (isset($_POST['technology'])) {
//    $class_roll = $_POST['technology'] . "001" . '<br>';
//    print_r($class_roll);
//}
////print_r($_POST);
 


if($_SERVER['REQUEST_METHOD']=='POST'){

        foreach ($_POST['technology'] as $roll) {
//            $_POST['c_roll'] = 001;
//            $_POST['c_roll'] = ++$_POST['c_roll'];
            $_POST['c_roll'] = $roll['technology'] . $_POST['c_roll'];
        }
            $obj = new Admission();
            $obj->setData($_POST);
            $obj->store();

}

echo "Successfully added. To see details go to.<a href='show.php'>Click Here</a>";
