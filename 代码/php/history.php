<?php
    require_once('connectvars.php');
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $put=array();
    $username=$_COOKIE['username'];
    $start=date("Y-m-d",strtotime("-1 week"));
    $end=date("Y-m-d");
    $days=abs((strtotime($end)-strtotime($start))/86400);
    for ($i=$days; $i >0; $i--) {
        $day=date("Y-m-d",strtotime("-$i day"));
        $query="select * from healthdata where Username='$username' and date='$day'";
        $result = mysqli_query($dbc,$query);
        $row=mysqli_fetch_array($result,MYSQL_ASSOC);
        array_push($put, $row);
    }
    echo json_encode($put);
    //关闭连接
    mysqli_close($dbc);
?>