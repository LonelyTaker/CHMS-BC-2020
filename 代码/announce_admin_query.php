<?php
function news($pageNum = 1, $pageSize = 3)
{
    $array = array();
    require_once('php/connectvars.php');
    $coon = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    mysqli_set_charset($coon, "utf8");
    // limit为约束显示多少条信息，后面有两个参数，第一个为从第几个开始，第二个为长度
    $rs = "select * from announce limit " . (($pageNum - 1) * $pageSize) . "," . $pageSize;
    $r = mysqli_query($coon, $rs);
    while ($obj = mysqli_fetch_object($r)) {
        $array[] = $obj;
    }
    mysqli_close($coon,"test");
    return $array;
}
 
//显示总页数的函数
function allNews()
{
    require_once('php/connectvars.php');
    $coon = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    mysqli_set_charset($coon, "utf8");
    $rs = "select count(*) num from announce"; //可以显示出总页数
    $r = mysqli_query($coon, $rs);
    $obj = mysqli_fetch_object($r);
    mysqli_close($coon,"test");
    return $obj->num;
}
 
    @$allNum = allNews();
    @$pageSize = 2; //约定没页显示几条信息
    @$pageNum = empty($_GET["pageNum"])?1:$_GET["pageNum"];
    @$endPage = ceil($allNum/$pageSize); //总页数
    @$array = news($pageNum,$pageSize);
function select()
{
    require_once('php/connectvars.php');
    $coon = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    mysqli_set_charset($coon, "utf8");
    $rs = "select title from announce"; //可以显示出总页数
    $r = mysqli_query($coon, $rs);
    $num = mysqli_num_rows($r);
    if($num){
      $row = mysqli_fetch_array($result); 
      echo $row[0];
    }
}
    ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>智能社区健康管理系统-公告</title>
  <link rel="stylesheet" href="css/layui.css">
  <link rel="stylesheet" href="css/data.css">
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
  <div class="layui-header">
    <div class="layui-logo">智能社区健康管理系统</div>
    <!-- 头部区域（可配合layui已有的水平导航） -->
    <ul class="layui-nav layui-layout-left">
      <li class="layui-nav-item  layui-this"><a href="#">公告</a></li>

    </ul>

    <ul class="layui-nav layui-layout-right">
      <li id="user" class="layui-nav-item">
        <a href="javascript:;">
          测试数据
        </a>
      </li>
      <li class="layui-nav-item">
        <a href="javascript:void(0);" onclick="logout()">
          退出登录
        </a>
      </li>
    </ul>
  </div>
  
  <div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
      <ul class="layui-nav layui-nav-tree"  lay-filter="test">
        <li class="layui-nav-item layui-this"><a href="announce_admin_query.php">查看公告</a></li>
      </ul>

      <ul class="layui-nav layui-nav-tree"  lay-filter="test">
        <li class="layui-nav-item"><a href="announce_admin_edit.html">编辑公告</a></li>
      </ul>
    </div>
  </div>



  
  <div class="layui-body">
    <!-- 内容主体区域 -->
    <div style="padding: 15px;"></div>
    <!--文件上传<input type="file" name="file" id="test20">-->

    <!-- 搜索框 -->
     <div id="search" class="search_class">
        <form action="search.php" method="post">
            <input type="text" name="search" placeholder="请输入公告名称">
            <input type="submit" name="submit" value = "搜索"id="" class="layui-btn layui-btn-xs">
            </form>
        </div>
   <div class="layui-col-md12">
      <div class="layui-card">
        <div class="layui-card-header">
          <p class="header_announce"><?php
        $array = array();
        require_once('php/connectvars.php');
    $coon = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        mysqli_set_charset($coon, "utf8");
        $rs = "select * from announce limit " . (($pageNum - 1) * $pageSize) . "," . (($pageNum * $pageSize)-1);
        $r = mysqli_query($coon, $rs);
        $array = mysqli_fetch_array($r);
        echo $array[1];
         ?></p></p>
          

         </div>
        <div class="layui-card-body">
　　 <p><?php
        $array = array();
        require_once('php/connectvars.php');
    $coon = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        mysqli_set_charset($coon, "utf8");
        $rs = "select * from announce limit " . (($pageNum - 1) * $pageSize) . "," . (($pageNum * $pageSize)-1);
        $r = mysqli_query($coon, $rs);
        $array = mysqli_fetch_array($r);
        echo $array[2];
        $path1 = $array[3];
         ?></p>
          <div class=img_div_announce>
            <img src="<?php echo $path1?>" class='img_announce'><br>
          </div>

          <hr class="layui-bg-green">

        </div>
      </div>
    </div>

    <div class="layui-col-md12">
      <div class="layui-card">
        <div class="layui-card-header ">
          <p class="header_announce"><?php
        $array = array();
        require_once('php/connectvars.php');
    $coon = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        mysqli_set_charset($coon, "utf8");
        $rs = "select * from announce limit " . ($pageNum* $pageSize-1) . "," . ($pageNum * $pageSize);
        $r = mysqli_query($coon, $rs);
        $array = mysqli_fetch_array($r);
        echo $array[1];
         ?></p>

        </div>
        <div class="layui-card-body">
　　 <p><?php
        $array = array();
        require_once('php/connectvars.php');
    $coon = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        mysqli_set_charset($coon, "utf8");
        $rs = "select * from announce limit " . ($pageNum* $pageSize-1) . "," . ($pageNum * $pageSize);
        $r = mysqli_query($coon, $rs);
        $array = mysqli_fetch_array($r);
        echo $array[2];
        $path2 = $array[3];
         ?></p>
          
          <div class=img_div_announce>
            <img src="<?php echo $path2?>" class='img_announce'><br>
          </div>
          
          <hr class="layui-bg-green">


        </div>
      </div>
    </div>


  </div>

  
  
  <div class="layui-footer">
    <!-- 底部固定区域 -->
    <div>
      <a href="?pageNum=1">首页</a>
      <a href="?pageNum=<?php echo $pageNum==1?1:($pageNum-1)?>">上一页</a>
      <a href="?pageNum=<?php echo $pageNum==$endPage?$endPage:($pageNum+1)?>">下一页</a>
      <a href="?pageNum=<?php echo $endPage?>">尾页</a>
   
  </div>
    © myhealth.com - 智能社区健康管理系统
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
<script src="js/initialization.js"></script>
</body>
</html>