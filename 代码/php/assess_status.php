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
    $temperature='今日无数据';
    $temperature_feedback='';
    $pressure='今日无数据';
    $pressure_feedback='';
    $heartRate='今日无数据';
    $heartRate_feedback='';
    $BFR='今日无数据';
    $BFR_feedback='';
    $BMI='今日无数据';
    $BMI_feedback='';

    $query="select * from healthdata where Username='$username' and date='$day'";
    $result = mysqli_query($dbc,$query);
    $row=mysqli_fetch_array($result,MYSQL_ASSOC);
    if ($row!=null) {
        $temperature=$row['temperature'];
        if ($temperature>=37.1) {
            $temperature_feedback='体温偏高';
        }
        else if ($temperature<=36.1) {
            $temperature_feedback='体温偏低';
        }
        else{
            $temperature_feedback='正常';
        }
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

        $heartRate=$row['heartRate'];
        if ($heartRate<60) {
            $heartRate_feedback='心率偏慢';
        }
        else if ($heartRate>100) {
            $heartRate_feedback='心率过快';
        }
        else{
            $heartRate_feedback='心率正常';
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
        $BMI=round($row['weight']/(($row['height']/100)*($row['height']/100)),1);
        if ($BMI<18.5) {
            $BMI_feedback='偏低';
        }
        else if ($BMI>23.9) {
            $BMI_feedback='偏高';
        }
        else{
            $BMI_feedback='正常';
        }
    }
    echo json_encode(array('sex'=>$sex,'temperature'=>$temperature,'temperature_feedback'=>$temperature_feedback,'pressure'=>$pressure,'pressure_feedback'=>$pressure_feedback,'heartRate'=>$heartRate,'heartRate_feedback'=>$heartRate_feedback,'BFR'=>$BFR,'BFR_feedback'=>$BFR_feedback,'BMI'=>$BMI,'BMI_feedback'=>$BMI_feedback));
    //关闭连接
    mysqli_close($dbc);
?>