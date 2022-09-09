<?php

require("./includes/class-autoload.inc.php");

$conn=new test();

$conn->getusers();
//$conn->getuser(42);
//$conn->setuser(40);
//$conn->setuser("product ten",110);
//$conn->deluser(43);