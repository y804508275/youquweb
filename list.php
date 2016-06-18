<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>有趣文化</title>
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
        
    </style>
</head>
<body>
<div class="header">
    <div class="header-txt">
        <div class="head-text">
        <?php
        header("Content-type: text/html; charset=utf-8");
        error_reporting(E_ALL&~(E_WARNING | E_NOTICE));
        $action=$_GET["action"];
        $con=mysql_connect("localhost","furui","1013");
        mysql_select_db("shujuku");
        mysql_query("SET NAMES 'utf8'");

        if($action=='city'){
            $cityid=$_GET["cityid"];
            $sql="select * from shujuku.city WHERE cityId='".$cityid."'";
            $list=mysql_query($sql,$con);
                while($result=mysql_fetch_array($list)){
                $kind=$result["cityName"];
                $cityNote=$result["cityNote"];
                echo '<p class="head-title">'.$kind.'</p>
                        <p class="head-note">'.$cityNote.'</p>';            
            }
        }else{
            echo '<p class="head-title">Travel like a local</p>
                        <p class="head-note">像本地人一样行走</p>';
        }
        ?>     
        </div>
    </div>
</div>
<div class="list-body">
    <div class="list-block">
        <div class="list-textrow">
        <?php
        header("Content-type: text/html; charset=utf-8");
        error_reporting(E_ALL&~(E_WARNING | E_NOTICE));
        $action=$_GET["action"];
        if($action=='city'){
            $id=$_GET["cityid"];
            $con=mysql_connect("localhost","furui","1013");
            mysql_select_db("shujuku");
            mysql_query("SET NAMES 'utf8'");
            $sql="select * from shujuku.citywalk WHERE city='".$id."' AND show_state ='显示'";
            $sql.=" ORDER BY ifTop DESC,top_time DESC,add_time DESC";
            $list=mysql_query($sql,$con);
            while($result=mysql_fetch_array($list)){
                $title=$result["title"];
                $place=$result["place"];
                $pic1=$result["pic1"];
                $price=$result["price"];
                $citywalkid=$result["id"];
                echo '<div class="list-activityRow">
                            <div class="activity-des" onclick="location.href=\'activity.php?id='.$citywalkid.'\'">
                            <div class="activity-img" style="background-image: url('.$pic1.');">
                                <div class="activity-text">
                                    <p class="activity-title">'.$title.'</p>
                                    <p class="activity-note">'.$place.'</p>
                                </div>
                            </div>
                            
                            </div>
                        </div>';
           }
        }else{
            $id=$_GET["kindid"];
            $con=mysql_connect("localhost","furui","1013");
            mysql_select_db("shujuku");
            mysql_query("SET NAMES 'utf8'");
            $sql="select * from shujuku.citywalk WHERE kindId='".$id."' AND show_state ='显示'";
            $sql.=" ORDER BY ifTop DESC,top_time DESC,add_time DESC";
            $list=mysql_query($sql,$con);
            while($result=mysql_fetch_array($list)){
                $title=$result["title"];
                $place=$result["place"];
                $pic1=$result["pic1"];
                $price=$result["price"];
                $citywalkid=$result["id"];

               echo '<div class="list-activityRow">
                            <div class="activity-des" onclick="location.href=\'activity.php?id='.$citywalkid.'\'">
                            <div class="activity-img" style="background-image: url('.$pic1.');">
                                <div class="activity-text">
                                    <p class="activity-title">'.$title.'</p>
                                    <p class="activity-note">'.$place.'</p>
                                </div>
                            </div>
                            
                            </div>
                        </div>';
           }
        }

        ?>
            
            <div style="clear: both;"></div>
        </div>
    </div>
    <div class="list-right">
        <div class="all-kinds">
            <p class="title">精选分类</p>
            <?php 
            $sql="select * from shujuku.admin";
            $list=mysql_query($sql,$con);

            while($result=mysql_fetch_array($list)){
                $kind=$result["kinds"];
                $id=$result["id"];
                echo '<div class="kinds-btn" onclick="location.href=\'list.php?action=kinds&kindid='.$id.'\'">'.$kind.'</div>';
            }
            ?>
            
        </div>
    </div>
</div>
<div style="clear: both;"></div>
<div class="footer">
    <div class="footer-block">
        <div class="footer-textrow">
            <p class="pc-title" style="color: #a9b7b7;margin-bottom: 10px;">联系我们</p>
            <div class="footer-icon">
                <div>
                    <img src="images/mail.png"> 
                    <p>hello@voluntour.cn</p>  
                </div>
                <div>
                    <img src="images/weibo.png"> 
                    <p>@voluntour义工旅行</p>   
                </div>
                <div>
                    <img src="images/weixin.png">  
                    <p>公众微信号：youquwenhua</p>   
                </div>
            </div>
            <div style="clear: both;"></div>
            <p style="margin:0;">© 有趣文化.</p>
        </div>
    </div>
</div>
</html>