<?php
  header("Content-type:text/html;charset=utf-8");
  require_once('connectvars.php');

  $username = $_POST['username'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  $sex = $_POST['sex'];
  $birthday = $_POST['birthday'];
  $phone = $_POST['phone'];
  $email = $_POST['email']; 

  //创立连接
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  //对用户名进行查询，如果不存在再插入，如果存在返回注册失败
  $query="select Password from user where Username ='$username'";
  $result = mysqli_query($dbc,$query);
  $row=mysqli_fetch_array($result,MYSQL_ASSOC);
  if($row==null){
    $query="INSERT INTO user VALUES ('$username', '$password','$name','$sex','$birthday','$phone','$email')";
    mysqli_query($dbc,"set names utf8");//防止乱码
    mysqli_query($dbc,$query);
    echo json_encode(array("feedback"=>"success"));
  }
  else{
    echo json_encode(array("feedback"=>"fail"));
  }
  //关闭连接
  mysqli_close($dbc);
?>