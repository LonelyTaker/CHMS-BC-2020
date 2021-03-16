<?php
    require_once('connectvars.php');
    echo json_encode(array("username"=>$_COOKIE['username']));
?>