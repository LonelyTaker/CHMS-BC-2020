<?php
  require_once('connectvars.php');
  $username=$_COOKIE['username'];
  $temperature=$_POST['temperature'];
  $spressure=$_POST['spressure'];
  $dpressure=$_POST['dpressure'];
  $heartRate=$_POST['heartRate'];
  $height=$_POST['height'];
  $weight=$_POST['weight'];
  $waist=$_POST['waist'];
  $date=date("Y-m-d");
  //创立连接
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  //mysql语句
  $query="select * from healthdata where Username='$username' and date='$date'";
  $result = mysqli_query($dbc,$query);
  if (mysqli_num_rows($result)==1) {
    $query="update healthdata set temperature='$temperature' where Username='$username' and date='$date'";
    mysqli_query($dbc,$query);
    $query="update healthdata set spressure='$spressure' where Username='$username' and date='$date'";
    mysqli_query($dbc,$query);
    $query="update healthdata set dpressure='$dpressure' where Username='$username' and date='$date'";
    mysqli_query($dbc,$query);
    $query="update healthdata set heartRate='$heartRate' where Username='$username' and date='$date'";
    mysqli_query($dbc,$query);
    $query="update healthdata set height='$height' where Username='$username' and date='$date'";
    mysqli_query($dbc,$query);
    $query="update healthdata set weight='$weight' where Username='$username' and date='$date'";
    mysqli_query($dbc,$query);
    $query="update healthdata set waist='$waist' where Username='$username' and date='$date'";
    mysqli_query($dbc,$query);
    echo json_encode(array("feedback"=>"update_success"));;
  }
  else if (mysqli_num_rows($result)==0) {
    $query="INSERT INTO healthdata VALUES ('$username', '$temperature','$spressure','$dpressure','$heartRate','$height','$weight','$waist','$date')";
    mysqli_query($dbc,$query);
    echo json_encode(array("feedback"=>"up_success"));;
  }
  else{
    echo json_encode(array("feedback"=>"error"));;
  }
  //关闭连接
  mysqli_close($dbc);
?>