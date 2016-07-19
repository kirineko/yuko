<!DOCTYPE html>
<html>
<head>
<mata charset ="UTF-8">
<title>软件学院</title>
<style>
body
{
background-color:#b0c4de;
background-image:url('img/lala.png');
background-repeat:no-repeat;
background-position:right center;
margin-right:300px;
}
.header{
    width:100%;
    height:100px;
    border:1px solid #000000;
}
.logo{
    text-align:center;
}
ul{
    height:50px;
    width:100%;
    border:1px solid #000000;
    padding-top:10px;
}
ul li{
    float:left;
    padding:10px;
    list-style:none;
    border:1px solid #000000;
}
ul>span{
    padding:10px;
    display:inline-block;
    float:right;
    margin-right:200px;
}
.content-left{
    border:1px solid #000000;
    height:400px;
    width:70%;
    float:left;
}
p{
    text-align:center;
}
.c_l{
    padding-top:150px;
}
.content-right-top{
    border:1px solid #000000;
    height:195px;
    width:28%;
    float:right;
    margin-bottom:10px;
}
.content-right-bottom{
    border:1px solid #000000;
    height:195px;
    width:28%;
    float:right;
}
.content-right-bottom p span{
    text-decoration:underline;  
}
.clear{
    clear:both;
}
.footer{
    margin-top:10px;
    width:100%;
    height:170px;
    border:1px solid #000000;
}
</style>
<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $(".n1").hover(function(){
        $(".n1").css("background-color","lightgreen");
        $(".pp").html("学院简介");
    },function(){
    $(".n1").css("background-color","#ffffff");
        $(".pp").html("内容展示区");
    })
    $(".n2").hover(function(){
        $(".n2").css("background-color","lightblue");
        $(".pp").html("学院风光");
    },function(){
    $(".n2").css("background-color","#ffffff");
        $(".pp").html("内容展示区");
    })
    $(".n3").hover(function(){
        $(".n3").css("background-color","lightpink");
        $(".pp").html("学生周知");
    },function(){
    $(".n3").css("background-color","#ffffff");
        $(".pp").html("内容展示区");
    })
    $(".n4").hover(function(){
        $(".n4").css("background-color","lightgray");
        $(".pp").html("就业信息");
    },function(){
    $(".n4").css("background-color","#ffffff");
        $(".pp").html("内容展示区");
    })
});
</script>
<body align="center">
<div width="980" align="left">
<div class="header">
    <img src="img/logo.png" width="1400" height="102">
    
</div>

<div class="nav">
    <ul>
        <li class="n1"><a href="http://ssdut.dlut.edu.cn/xygk1/xygk.htm">学院简介</a></li>
        <li class="n2"><a href="http://ssdut.dlut.edu.cn/xygk1/xyfg.htm">学院风光</a></li>
        <li class="n3"><a href="http://ssdut.dlut.edu.cn/hzjl/zytz.htm">学生周知</a></li>
        <li class="n4"><a href="http://ssdut.dlut.edu.cn/bkspy/bksgl/zsjy.htm">就业信息</a></li>
        <span>导航栏</span>
    </ul>

</div>
<div class="content-left">
    <div class="c_l"></div>
    <p class="pp">内容展示区</p>
    <p>(显示友情链接网站的内容)</p>
</div>
<div class="content-right-top">
    <p>教师登陆</p>
    <p>名称：<input type="text" value="userid"></p>
    <p>密码：<input type="password" value="userid"></p>
    <p><input type="button" value="登陆"></p>
</div>
<div class="content-right-bottom">
    <p>友情链接</p>
    <p><span><a href="http://www.sina.com">新浪网</a></span>&nbsp;<span><a href="http://www.qq.com">腾讯网</a></span></p>
    <p><span><a href="http://www.tmall.com">淘宝网</a></span>&nbsp;<span><a href="http://www.renren.com">人人网</a></span></p>
</div>
<div class="clear"></div>
<div class="footer"> 
    <p>&copy;版权所有：大连理工大学软件学院&nbsp;&nbsp;版本信息：大连理工大学软件学院网站版本2.2</p>
    <p>Email:ssdut@dlut.edu.cn(软件学院办公室)  电话:0411-87571567(软件学院办公室)</p>
    <p>地址:大连经济技术开发区图强街321号</p>
    <p>技术支持:大连理工大学软件学院 辽ICP备09013925</p>
</div>
</div>
</body>
</head>
</html>