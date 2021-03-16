<?php
    header("Content-type:text/html;charset=utf-8");
    require_once('connectvars.php');
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    mysqli_query($dbc,"set names utf8");//防止乱码

    $username=$_COOKIE['username'];
    $query="select * from user where Username='$username'";
    $result = mysqli_query($dbc,$query);
    $row=mysqli_fetch_array($result,MYSQL_ASSOC);

    echo json_encode($row);
    //关闭连接
    mysqli_close($dbc);
?>