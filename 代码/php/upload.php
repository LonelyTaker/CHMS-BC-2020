<?php
header("Content-Type: text/html;charset=utf-8");
if(isset($_POST['submit'])&&$_POST['submit']=="上传"){
if(isset($_POST['header_announce'])&&$_POST['article_announce']&&['img_announce']){
    $title = $_POST['header_announce'];
    $content = $_POST['article_announce'];
    $filename = $_FILES['img_announce']['name'];
    $tmp_name = $_FILES['img_announce']['tmp_name'];
    move_uploaded_file($tmp_name,iconv("UTF-8","gb2312","../img/ad/".$filename));
    $path = "img/ad/".$filename;

    #print_r($title.$content.$path);
    require_once('connectvars.php');
    $coon = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    mysqli_query($coon,"set names 'utf8'");  
    $sql = "insert into announce values(NULL,'$title','$content','$path')";  
    $result = mysqli_query($coon,$sql);  
    echo "<script>alert('上传成功！');history.go(-1);</script>";
}
    else{
        echo "<script>alert('内容输入不完整！');history.go(-1);</script>";
}
}else if(isset($_POST['submit'])&&$_POST['submit']=="编辑"){
    $title = $_POST['header_announce'];
    $content = $_POST['article_announce'];
    $filename = $_FILES['img_announce']['name'];
    $tmp_name = $_FILES['img_announce']['tmp_name'];
    move_uploaded_file($tmp_name,iconv("UTF-8","gb2312","../img/ad/".$filename));
    $path = "img/ad/".$filename;
    require_once('connectvars.php');
    $coon = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    mysqli_query($coon,"set names 'utf8'");  
    $sql = "update announce set content='$content',path='$path' where title='$title'";
    $result = mysqli_query($coon,$sql);
    echo "<script>alert('修改成功！');history.go(-1);</script>";
}else if(isset($_POST['submit'])&&$_POST['submit']=="删除"){
    require_once('connectvars.php');
    $coon = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    mysqli_query($coon,"set names 'utf8'");  
    $title = $_POST['header_announce'];
    $sql = "delete from announce where title='$title'";
    $result = mysqli_query($coon,$sql);
    echo "<script>alert('删除成功！');history.go(-1);</script>";
}



?>