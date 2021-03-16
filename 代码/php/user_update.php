<?php 
    header("Content-type:text/html;charset=utf-8");
    require_once('connectvars.php');

    $username=$_COOKIE['username'];
    $password=$_POST['password'];
    $password_again=$_POST['password_again'];
    $sex=$_POST['sex'];
    $birthday=$_POST['birthday'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];

    $captcha=$_POST['captcha'];
    $right_captcha=$_COOKIE['pass_phrase'];
    if ($password!='' && mb_strlen($password)<6 || mb_strlen($password)>18) {
      echo json_encode(array("feedback"=>"pw_wrong"));
    }
    else if($password!='' &&  $password!=$password_again){
      echo json_encode(array("feedback"=>"pwa_wrong"));
    }
    else if($phone!='' && mb_strlen($phone)!=11){
      echo json_encode(array("feedback"=>"phone_wrong"));
    }
    else if ($captcha!=$right_captcha) {
      echo json_encode(array("feedback"=>"captcha_wrong"));
    }
    else{
      //创立连接
      $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
      mysqli_query($dbc,"set names utf8");//防止乱码
      if ($password!='') {
        $query="update user set Password='$password' where Username = '$username'";
        mysqli_query($dbc,$query);
      }
      if ($phone!='') {
        $query="update user set phone='$phone' where Username = '$username'";
        mysqli_query($dbc,$query);
      }
      if ($email!='') {
        $query="update user set Email='$email' where Username = '$username'";
        mysqli_query($dbc,$query);
      }
      if ($birthday!='') {
        $query="update user set birthday='$birthday' where Username = '$username'";
        mysqli_query($dbc,$query);
      }
      if ($sex!='') {
        $query="update user set sex='$sex' where Username = '$username'";
        mysqli_query($dbc,$query);
      }
      echo json_encode(array("feedback"=>"success"));
      //关闭连接
      mysqli_close($dbc);
    }
?>