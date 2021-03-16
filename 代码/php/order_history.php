<?php
    header("Content-type:text/html;charset=utf-8");
    require_once('connectvars.php');
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    mysqli_query($dbc,"set names utf8");//防止乱码
    $put=array();
    $username=$_COOKIE['username'];

    $start=date("Y-m-d",strtotime("-1 week"));
    $end=date("Y-m-d");
    $days=abs((strtotime($end)-strtotime($start))/86400);
    for ($i=$days-1; $i >=0; $i--) {
        $day=date("Y-m-d",strtotime("-$i day"));
        $query="select * from orderhistory where username='$username' and date='$day'";
        $result = mysqli_query($dbc,$query);

        $food=array();
        while($row=mysqli_fetch_array($result,MYSQL_ASSOC)){
            $fid=$row["food"];
            $query="select * from menu where id='$fid'";
            $result1 = mysqli_query($dbc,$query);
            $row1=mysqli_fetch_array($result1,MYSQL_ASSOC);

            $item=array('fname'=>$row1["fname"],'fprice'=>$row1["fprice"]);
            array_push($food,$item);
        }
        array_push($put, array("date"=>$day,"food"=>$food));
    }
    echo json_encode($put);
    //关闭连接
    mysqli_close($dbc);
?>