<?php
<<<<<<< HEAD
//第一步：链接数据库
$conn=@mysql_connect("w.rdc.sae.sina.com.cn:3307","mnwmxnnl5l","j0wlx20114ky02lzxyhhj2y243xzzl0xzx11l2ji")or die ("mysql链接失败");
//第二步: 选择指定的数据库，设置字符集
@mysql_select_db("app_publicbicycle",$conn) or die ("db链接失败".mysql_error());
mysql_query('SET NAMES UTF8')or die ("字符集设置错误");
//$siteName="四川大学公益自行车管理系统";
$siteName="校园公共自行车管理系统";
?>
=======
   //第一步：链接数据库  
    $conn=@mysql_connect("w.rdc.sae.sina.com.cn:3307","jn41zm50w3","2h5ix35hlzylmxyzz2yx0jk2y42ixl3zk24yhi2x")or die ("mysql链接失败");
   //第二步: 选择指定的数据库，设置字符集  
    @mysql_select_db("app_campuspubbike",$conn) or die ("db链接失败".mysql_error());
    mysql_query('SET NAMES UTF8')or die ("字符集设置错误");  
    //$siteName="四川大学公益自行车管理系统";
    $siteName="校园公共自行车管理系统";
 ?>
>>>>>>> ab00a96d6ef6a6fd4a12180d5caef3d2ea815a6d
