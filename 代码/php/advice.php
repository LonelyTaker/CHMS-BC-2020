<?php
    header("Content-type:text/html;charset=utf-8");
    require_once('connectvars.php');
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    mysqli_query($dbc,"set names utf8");//防止乱码

    $day=date("Y-m-d");
    $username=$_COOKIE['username'];
    $query="select sex from user where Username='$username'";
    $result = mysqli_query($dbc,$query);
    $row=mysqli_fetch_array($result,MYSQL_ASSOC);

    $sex=$row['sex'];
    $pressure='今日无数据';
    $pressure_feedback='';

    $BFR='今日无数据';
    $BFR_feedback='';

    $query="select * from healthdata where Username='$username' and date='$day'";
    $result = mysqli_query($dbc,$query);
    $row=mysqli_fetch_array($result,MYSQL_ASSOC);
    if ($row!=null) {
        $spressure=$row['spressure'];
        $dpressure=$row['dpressure'];
        $pressure=$spressure.'/'.$dpressure;
        if ($spressure>140 || $dpressure>90) {
            $pressure_feedback='血压偏高';
        }
        else if ($spressure<90 || $dpressure<60) {
            $pressure_feedback='血压偏低';
        }
        else {
            $pressure_feedback='血压正常';
        }
        if ($spressure>140 && $dpressure<60) {
            $pressure_feedback='脉压差大';
        }

        if ($sex=='男') {
            $BFR=round(($row['waist']*0.74-($row['weight']*0.082+44.74))/$row['weight'],3)*100;
            if ($BFR<15) {
                $BFR_feedback='偏瘦';
            }
            else if ($BFR>26){
                $BFR_feedback='肥胖';
            }
            else if ($BFR>18){
                $BFR_feedback='偏高';
            }
            else{
                $BFR_feedback='正常';
            }
        }
        else{
            $BFR=round(($row['waist']*0.74-($row['weight']*0.082+34.89))/$row['weight'],3)*100;
            if ($BFR<20) {
                $BFR_feedback='偏瘦';
            }
            else if ($BFR>32){
                $BFR_feedback='肥胖';
            }
            else if ($BFR>25){
                $BFR_feedback='偏高';
            }
            else{
                $BFR_feedback='正常';
            }
        }
    }
    $put=array();
    if ($pressure_feedback=='血压正常' and $BFR_feedback=='正常') {
        $query="select * from healthAdvice where item='healthy'";
        $result = mysqli_query($dbc,$query);
        $row=mysqli_fetch_array($result,MYSQL_ASSOC);
        array_push($put, $row);
    }
    if ($pressure_feedback=='血压偏低') {
        $query="select * from healthAdvice where item='hypotension'";
        $result = mysqli_query($dbc,$query);
        $row=mysqli_fetch_array($result,MYSQL_ASSOC);
        array_push($put, $row);
    }
    if ($pressure_feedback=='血压偏高') {
        $query="select * from healthAdvice where item='hypertension'";
        $result = mysqli_query($dbc,$query);
        $row=mysqli_fetch_array($result,MYSQL_ASSOC);
        array_push($put, $row);
    }
    if ($pressure_feedback=='脉压差大') {
        $query="select * from healthAdvice where item='pulse'";
        $result = mysqli_query($dbc,$query);
        $row=mysqli_fetch_array($result,MYSQL_ASSOC);
        array_push($put, $row);
    }
    if ($BFR_feedback=='偏瘦') {
        $query="select * from healthAdvice where item='thin'";
        $result = mysqli_query($dbc,$query);
        $row=mysqli_fetch_array($result,MYSQL_ASSOC);
        array_push($put, $row);
    }
    if ($BFR_feedback=='偏高' || $BFR_feedback=='肥胖') {
        $query="select * from healthAdvice where item='fat'";
        $result = mysqli_query($dbc,$query);
        $row=mysqli_fetch_array($result,MYSQL_ASSOC);
        array_push($put, $row);
    }
    echo json_encode($put);

    //关闭连接
    mysqli_close($dbc);
?>