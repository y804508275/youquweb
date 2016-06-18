<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <title>有趣文化</title>
    <style>
        body{
            width: 100%;
            height: 100%;
            margin: 0;
        }
        div{
            margin: 0;
        }
        .headerImg{
            width: 100%;
            height: 200px;
        }
        .headerImg img{
            width: 100%;
            height: 200px;

        }
        .activityTips{
            width: 80%;
            margin-left: 10%;
            margin-top: 30px;
        }
        .iconNote{
            width: 33%;
            float: left;
        }
        .iconNote p{
            font-size: 12px;
            color: dimgrey;
        }
        .iconNote .iconPng{
            vertical-align: middle;
        }
        .iconPng img{
            width: 30%;
        }
        .activityText{
            width: 80%;
            margin-left: 10%;
            font-size: 14px;
        }
        .footer{
            width: 100%;
            height: 60px;
            background-color: #ff4400;
            position: fixed;
            bottom: 0;
            z-index: 100;
            display: table;
        }
        .footerRow{
            display: table-cell;
            vertical-align: middle;
            text-align: center;
        }
        .footerPrice{
            width: 40%;
            margin-left: 10%;
            float: left;
            color: #ffffff;
            font-weight: 700;
            text-align: center;
         }
        .footerBtn{
            width: 40%;
            margin-right: 10%;
            float: left;
            color: #ffffff;
            font-weight: 700;

        }
        .textInfo img{
            width: 100%;
        }
        @media screen and (min-width: 800px){
            .activity-body{
                width:50%;
                margin-left: 25%;
            }
            .headerImg{
            	height: 300px;
            }
            .headerImg img{
            	height: 300px;
            }
            .footer{
                width: 50%;
            }
            .activityTitle{
            	font-size: 1.3em;
            }
        }
    </style>
</head>
<body>
    <div class="activity-body">
            <?php
            $id=$_GET["id"];
            $con=mysql_connect("localhost","furui","1013");
            mysql_select_db("shujuku");
            mysql_query("SET NAMES 'utf8'");
            $sql="select * from shujuku.citywalk WHERE id='".$id."'";
            $list=mysql_query($sql,$con);
            while($result=mysql_fetch_array($list)){
                $title=$result["title"];
                $place=$result["place"];
                $pic1=$result["pic1"];
                $price=$result["price"];
                $citywalkid=$result["id"];
                $activity_time=$result["activity_time"];
                $howlong=$result["howlong"];
                $activity_info1=$result["activity_info1"];
                $activity_info2=$result["activity_info2"];
                $text_info=$result["text_info"];
                $minNum=$result["minNum"];
                $maxNum=$result["maxNum"];
                $pay_link=$result["pay_link"];
                $price_include=$result["price_include"];

                echo '<div class="headerImg">
                        <img src="'.$pic1.'">
                    </div>
                    <div class="block" style="background-color:#FFF8DC;">
                    <div class="textrow">';
                echo '<p class="activityTitle" style="font-weight: 700;color: #333333;">'.$title.'</p>';
                echo '<div class="activityTips">
                <div class="iconNote">
                    <div class="iconPng"><img src="images/rili.png"></div>
                    <p>'.$activity_time.'</p>
                </div>
                <div class="iconNote">
                    <div class="iconPng"><img src="images/renren.png"></div>
                    <p>'.$minNum.'到'.$maxNum.'人</p>
                </div>
                <div class="iconNote">
                    <div class="iconPng"><img src="images/time.png"></div>
                    <p>'.$howlong.'</p>
                </div>
                </div></div>
                </div>';
                echo '<div class="block" style="background-color: #FFFFF0">
                    <p class="activityTitle" style="text-align: center; color: #CD6839; font-weight: 800;">活动亮点</p>
                    <p class="activityText">'.$activity_info1.'</p>
                </div>
                <div class="block" style="background-color: #FFFFF0">
                    <p class="activityTitle" style="text-align: center; color: #CD6839; font-weight: 800;">费用说明</p>
                    <p class="activityText">费用包含:'.$price_include.'</p>
                </div>
                <div class="block" style="background-color: #FFFFF0">
                    <p class="activityTitle" style="text-align: center; color: #CD6839; font-weight: 800;">报名须知</p>
                    <p class="activityText">'.$activity_info2.'</p>
                </div>
                <div class="block" style="background-color: #FFFFF0;margin-bottom: 60px;">
                    <p class="activityTitle" style="text-align: center; color: #CD6839; font-weight: 800;">活动详情</p>
                    <div class="textInfo" style="width:80%;margin-left:10%;">'.$text_info.'</div>
                </div>';
                echo '<div class="footer" onclick="location.href=\''.$pay_link.'\'">
                        <div class="footerRow">
                    <div class="footerPrice">'.$price.'元/人</div>
                    <div class="footerBtn" >报名</div>
                    </div>
                    </div>';
            }
            ?>
            
        </div>    
        
    
    
</body>
</html>