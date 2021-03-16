<?php 
    header("Content-type:text/html;charset=utf-8");
    require_once('connectvars.php');
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    mysqli_query($dbc,"set names utf8");//防止乱码

    $menu=$_POST['menu'];

    $username=$_COOKIE['username'];
    $day=date("Y-m-d");
    for ($i=0; $i < count($menu); $i++) { 
    	$query="insert into orderhistory values('$username','$menu[$i]','$day')";
        mysqli_query($dbc,$query);
    }
    //关闭连接
    mysqli_close($dbc);
    echo "<script>alert('下单成功');history.go(-1);</script>";
 ?>