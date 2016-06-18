<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html" charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!--<script src="http://lib.sinaapp.com/js/jquery/2.0.2/jquery-2.0.2.min.js">-->
    </script>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <script>
  //       var _hmt = _hmt || [];
		// (function() {
		//   var hm = document.createElement("script");
		//   hm.src = "//hm.baidu.com/hm.js?ec8b58485f9bca2f1bf0fb30a01dd4ba";
		//   var s = document.getElementsByTagName("script")[0]; 
		//   s.parentNode.insertBefore(hm, s);
		// })();
        function showCityList(){
            document.getElementById("black-bg").style.display="block";
            document.getElementById("city-list").style.visibility="visible";
        }
        function offCityList(){
            document.getElementById("city-list").style.visibility="hidden";
            document.getElementById("black-bg").style.display="none";
        }
    </script>
    <style type="text/css">
        .black-bg{
            width: 100%;
            height: 100%;
            position: fixed;
            opacity: 0.4;
            display: none;
            background-color: black;
            z-index: 1000;
        }
        .text-left{
            text-align: left;
        }
        .pc-textrow{
            width: 60%;
            height: 100%;
            margin-left: 20%;
        }
        .pc-title{
            font-size: 1.6em;
            font-weight: 400;
            color: #5a5d63;
        }
        .pc-textrow .pc-title{
            margin: 0;
            line-height: 1.3;
        }
        .pc-textrow .note{
            font-size: 1.1em;
            color: #686a6e;
            margin-top: 10px;
        }
        .pc-textrow .button{
            width: 20%;
            min-width: 100px;
            margin: 0 auto;
            padding-top: 10px;
            padding-bottom: 10px;
            border-radius: 5px;
            color: #00bf55;
            border: 1px solid #00bf55;
            margin-top: 30px;
            text-align: center;
        }
        .pc-textrow .button:hover{
            color: white;
            background-color: #00bf55;
        }
        .cityRow{
            width: 100%;
            margin-left: ;
            height: 300px;
            background-image: url(images/index.jpg);
            background-color: #b3beb8;
            background-size: cover;
            background-position: center;
            text-align: center;
            display: table;
            cursor: pointer;
        }
        .city-block{
            width: 96.7%;
            margin-left: 1.65%;
        }
        .city-des{
            width: 100%;
            display: table-cell;
            vertical-align: middle;
        }
        .city-name{
            font-size: 1.5em;
            color: white;
            font-weight: 800;
            margin: 0;
        }
        .city-note{
            font-size: 1.2em;
            color: white;
            font-weight: 600;
            margin: 0;
            margin-top: 10px;
        }
        .city-list{
            width: 50%;
            height: 50%;
            position: fixed;
            margin-left: 25%;
            top: 25%;
            border-radius: 5px;
            background-color: #edefed;
            
            visibility: hidden;
            z-index: 2000;
        }
        .city-list-head{
            width: 100%;
            height: 20%;
            display: table;
        }
        .city-list-head div{
            width: 20%;
            display: table-cell;
            vertical-align: middle;
        }
        .city-list-head div img{
            width: 5%;
            float: right;
            display: table-cell;
            margin-right: 20px;
            vertical-align: middle;
            cursor: pointer;
        }
        .city-list-middle{
            display: table;
            width: 100%;
            min-height: 60%;
        }
        .city-list-row{
            width: 80%;
            margin-left: 10%;
            display: table-cell;
            vertical-align: middle;
        }
        .city-name-btn{
            width: 33%;
            float: left;
            margin-bottom: 8px;
        }
        .city-name-btn div{
            width: 50%;
            margin:  0 auto;
            min-width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
            border: 1px solid #00bf55;
            border-radius: 5px;
            color: #00bf55;
            text-align: center;
            cursor: pointer;
        }
        .inline-box{
            margin-top: 5%;
            width: 100%;
            margin-left: ;
        }
        .inline-box .cityRow{
            width: 50%; 
            height: 200px;
            float: left;
            
        }
        .city2{
            margin-left: 0;
        }
        .city3{
            margin-left: 0;
        }
        .activityRow .activity-des{
            
            width: 90%;
            margin-left: 5%;
        }
        .activity-img{
            width: 100%;
            height: 200px;
            background-image: url(images/index.jpg);
            background-size: cover;
            background-position: center;
            text-align: center;
            position: relative;
        }
        .activityRow{
            width: 33%;
            height: auto;
            float: left;
            margin-bottom: 20px;
        }
        .activity-text{
            width: 100%;
            height: 20%;           
            display: table;
            position: relative;
            color: white;
            bottom: 0;
            padding-bottom: 10px;
            position: absolute;
            text-align: left;
            background-image: -webkit-linear-gradient(top,rgba(0,0,0,0) 0,#000 100%);
            background-image: -webkit-gradient(linear,50% 0,50% 100%,color-stop(0%,rgba(0,0,0,0)),color-stop(100%,#000));
            background-image: -moz-linear-gradient(top,rgba(0,0,0,0) 0,#000 100%);
            background-image: -o-linear-gradient(top,rgba(0,0,0,0) 0,#000 100%);
            background-image: linear-gradient(top,rgba(0,0,0,0) 0,#000 100%);
        }
        .activity-text .activity-title{
            margin: 0;
            margin-left: 10px;
            font-size: 1.2em;
            font-weight: 400;
        }
        .activity-text .activity-note{
            margin: 0;
            margin-left: 10px;
            font-size: 1em;
            font-weight: 300;
        }
        .pc-text{
            width: 96.7%;
            margin-left: 1.65%;
        }
        .footer{
            width: 100%;
            height: 40%;
            background-color: #434546;
        }
        .footer-block{
            width: 60%;
            height: 100%;
            margin-left: 20%;
            display: table;
        }
        .footer-textrow{
            width: 100%;
            display: table-cell;
            text-align: center;
            vertical-align: middle;
            color: #a9b7b7;
        }
        .footer-icon{
            width: 80%;
            margin-left: 10%;
        }
        .footer-icon div{
            width: 33%;
            float: left;

        }
        .footer-icon div img{
            width: 20%;
        }
        .footer-icon div p{
            width: 80%;
            margin-left: 10%;
        }
        .mobile-activity-text{
            display: none;
        }
        @media screen and (max-width: 1200px){
            .city-list-head div img{
                width: 8%;
            }
            .activityRow{
                width: 50%;
                height: auto;
                float: left;
                margin-bottom: 20px;
            }
            .footer-block{
                width: 80%;
                margin-left: 10%;
            }
        }
        @media screen and (max-width: 800px){
            .city-list{
                width: 80%;
                margin-left: 10%;
            }
            .pc-textrow{
                width: 80%;
                height: 100%;
                margin-left: 10%;
            }
            .footer{
                height: 80px;
            }
            .footer .footer-textrow .pc-title{
                display: none;
            }
            .footer-icon{
                display: none;
            }
            .mobile-activity-text{
                display: block;
                background-color: azure;
                border-radius: 5px;
            }
            .mobile-activity-text p{
                margin: 0;
            }
        }
        @media screen and (max-width: 650px){
            .city-list{
                width: 90%;
                margin-left: 5%;
                height: 70%;
                top: 15%;
            }
            .city-name-btn{
                width: 50%;
            }
            .city-list-head div img{
                width: 10%;
            }
            .city-block{
                width: 100%;
                margin: 0;
            }
            .activityRow{
                width: 100%;
                height: auto;
                float: left;
                margin-bottom: 20px;
            }
            .activity-img{
                border-radius: 5px;
            }
            .activity-text{
                border-radius: 5px;
            }
            .pc-textrow{
                width: 100%;
                height: 100%;
                margin-left: 0;
            }
            .cityRow{
                width: 100%;
                margin-left: 0;
                height: 200px;
            }
            .inline-box .cityRow{
                width: 100%;
            }
            .city2{
                width: 100%;
                height: 200px;
                margin: 0;
            }
            .pc-text{
                text-align: center;
            }
            .footer-block{
                width: 80%;
                margin-left: 10%;
            }
        }
        </style>
    <title>有趣文化</title>
</head>
<body  id="ind">
    <div id="index">
        <div class="black-bg" id="black-bg">
        </div>
        <div class="city-list" id="city-list">
            <div class="city-list-head">
                <div>
                    <img src="images/off.png" onclick="offCityList()">
                </div>
            </div>
            <div class="city-list-middle">
                <div class="city-list-row">
                <?php                   
                    error_reporting(E_ALL&~(E_WARNING | E_NOTICE));
                    include("youquadmin/class.all.php");
                    $db=new ConnectDb('localhost','furui','1013','shujuku','utf8');
                    $db->search("select * from shujuku.city");
                    while($result=$db->fetch_array()){
                        $kind=$result["cityName"];
                        $id=$result["cityId"];
                        
                        echo '<div class="city-name-btn" onclick="location.href=\'list.php?action=city&cityid='.$id.'\'">
		                        <div>'.$kind.'</div>
		                    </div>';         
                    }            
                ?>
                    
                    
                    <!-- <div class="city-name-btn">
                        <div>哈尔滨</div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="background bg1">
            <div class="head" style=""  id="head">
                <div class="backgroundBlock">
                    <div class="backgroundText">
                        <p>像本地人一样行走</p>
    <!--                <a class="headBtn">出发</a>-->
                    </div>
                </div>
            </div>
        </div>

        <div class="block" id="block">
            <div class="textrow">     
                <p class="pc-title">Travel like a local</p>
                <p class="note">像本地人一样行走，发现更大的世界</p>
            </div>
        </div>
        <div class="block">
            <div class="pc-textrow text-left">
                <div class="pc-text">
                    <p class="pc-title">遇见新的世界</p>
                    <p class="note">最美的时光在路上</p>
                </div>
                <div class="city-block">
                <div class="cityRow" style="background-image: url(images/wuhan.jpg);" onclick="location.href='http://www.youqujile.com/list.php?action=city&cityid=gkfxk46r'";>
                    <div class="city-des">
                        <p class="city-name">武汉</p>
                        <p class="city-note">不一样的江城</p>
                    </div>
                </div>
                <div class="inline-box city2">
                    <div class="cityRow" style="background-image: url(images/beijing.jpg);" onclick="location.href='http://www.youqujile.com/list.php?action=city&cityid=3jakipfn'">
                        <div class="city-des">
                            <p class="city-name">北京</p>
                            <p class="city-note"></p>
                        </div>
                    </div>
                    <div class="cityRow city3" style="background-image: url(images/guangzhou.jpg);" onclick="location.href='http://www.youqujile.com/list.php?action=city&cityid=cpedgelm'">
                        <div class="city-des">
                            <p class="city-name">广州</p>
                            <p class="city-note"></p>
                        </div>
                    </div>
                </div>
            </div>
                <!-- <div class="activity" onclick="location.href=\'activity.php?id='.$citywalkid.'\'">
                    <div class="activityImg">
                        <img src="'.$pic1.'">
                    </div>
                    <div class="activityNote" >
                        <div class="activityNoteLeft">
                            <p class="activityTitle">'.$title.'</p><span class="price">￥'.$price.'</span>
                            <br><span class="subNote">'.$place.'</span>
                        </div>
                    </div>
                 </div> -->
                <div style="clear:both;"></div>     
                <div class="button" onclick="showCityList()">
                    其他城市
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>

        <div class="block">
            <div class="pc-textrow text-left">
                <div class="pc-text">
                    <p class="pc-title">推荐活动</p>
                    <p class="note">你喜欢的才是有趣的</p>  
                </div>     
                <?php
                // header("Content-type: text/html; charset=utf-8");
                error_reporting(E_ALL&~(E_WARNING | E_NOTICE));
                // include("youquadmin/class.all.php");
                // $db=new ConnectDb('localhost','furui','1013','shujuku','utf8');
                $db->search("select * from shujuku.citywalk WHERE show_state ='显示' ORDER BY ifTop DESC,top_time DESC limit 3");
                while($result=$db->fetch_array()){
                    $title=$result["title"];
                    $place=$result["place"];
                    $pic1=$result["pic1"];
                    $price=$result["price"];
                    $citywalkid=$result["id"];
                    echo '<div class="activityRow">
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
                ?>   
                
                
                <!-- <div class="activityRow">
                    <div class="activity-des">
                    <div class="activity-img"> 
                        <div class="activity-text">
                            <p class="activity-title">这是活动标题</p>
                        </div>    
                    </div>
                    </div>
                </div> -->
                <div style="clear:both;"></div>     
                <div class="button" onclick="location.href='list.php?kindid=mdjprv4b'">
                    查看更多
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
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
    </div>
</body>
</html>