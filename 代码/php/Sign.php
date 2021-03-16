<?php
    require_once('connectvars.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $id=$_POST['id'];

    //创立连接
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    //mysql语句
    $query="select * from ".$id." where Username ='$username'";
    //执行mysql语句
    $result = mysqli_query($dbc,$query);
    $row=mysqli_fetch_array($result,MYSQL_ASSOC);
    if($row==null){
      echo json_encode(array("feedback"=>"Nexist"));
    }
    else if($password==$row["Password"]){
      setcookie('username',$row["Username"],time()+(60*60*24));
      echo json_encode(array("feedback"=>"success"));
    }
    else{
      echo json_encode(array("feedback"=>"fail"));
    }
    //关闭连接
    mysqli_close($dbc);
    
?>