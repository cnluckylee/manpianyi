<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="js/tkapi.js" async="" charset="gbk"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo CHtml::encode($this->pageTitle);?></title>
<meta name="keywords" content="蛮便宜网,蛮便宜独家优惠,蛮便宜9块9包邮,蛮便宜独家折扣">
<meta name="description" content="蛮便宜网汇集独家优惠商品全场1折起,天天都有九块九(9.9)包邮商品,秒杀最新9块9包邮独家折扣尽在蛮便宜(manpianyi)">
<link type="text/css" rel="stylesheet" href="css/style.css">
<link type="text/css" rel="stylesheet" href="css/index.css">
<link type="text/css" rel="stylesheet" href="css/jd.css">
<link rel="shortcut icon" href="/images/manpianyi.ico">

<script type="text/javascript">

$.fn.smartFloat = function() {

    var position = function(element) {

        var top = element.position().top, pos = element.css("position");

        $(window).scroll(function() {

            var scrolls = $(this).scrollTop();

            if (scrolls > top) {

                if (window.XMLHttpRequest) {

                    element.css({

                        position: "fixed",

                        top: 0

                    });

                } else {

                    element.css({

                        top: scrolls

                    });

                }

            }else {

                element.css({

                    position: pos,

                    top: top

                });

            }

        });

};

    return $(this).each(function() {

        position($(this));

    });

};

//绑定

</script>
<script>

$(document).ready(function(){

    $("#nav_left_layout").smartFloat();

    });

</script>
<script src="http://l.tbcdn.cn/apps/top/x/sdk.js?appkey=21548226"></script>
</head>
<body id="introduction" class="root61">
<div class="top">
  <div class="w1000">
    <div class="top_l">
      <img src="images/top_1.gif"><a style="cursor:pointer" onclick="addfavorite()" target="_blank">收藏蛮便宜</a> </div>
    <div class="top_r">
      <div id="user" class="l"><a href="<?php echo Yii::app()->params['siteUrl'];?>login.php?returnto=http://www.manpianyi.com">登录</a> <span>|</span> <a href="<?php echo Yii::app()->params['siteUrl'];?>reg.php" target="_blank">免费注册</a><span>|</span><a href="<?php echo Yii::app()->params['siteUrl'];?>login.php?returnto=http://home.manpianyi.com/invite.php">邀请好友</a></div>
      <span>|</span>
      <div class="scj"> <a href="javascript:void(0);" onclick="show();">收藏夹</a>
        <div class="sc_mian" id="pop" style="display:none">
          <div class="sc_tit"> <em>最近收藏的宝贝</em> <a href="javascript:void(0);" onclick="hide()">关闭</a> </div>
          <div id="view_shoucang"></div>
        </div>
      </div>
      <span>|</span><a href="<?php echo Yii::app()->params['siteUrl'];?>shuoming.html" target="_blank">帮助中心</a> <span>|</span> <span style="margin-right:0px;">关注蛮便宜：</span> </div>
  </div>
</div>
<div id="header-2013" class="w">
  <div class="ld" id="logo-2013"><a clstag="homepage|keycount|home2013|02a" hidefocus="true" href="http://www.jd.com/"><b></b><img height="60" width="270" alt="京东" src="images/head_logo.gif"></a></div>
  <!--logo end-->
  <div id="search-2013">
    <div class="i-search ld">
      <ul class="hide" id="shelper" style="display: none;">
      </ul>
      <div class="form">
        <input type="text" onkeydown="javascript:if(event.keyCode==13) search('key');" autocomplete="off" id="key" accesskey="s" class="text" style="color: rgb(153, 153, 153);">
        <input type="button" clstag="homepage|keycount|home2013|03a" onclick="search('key');return false;" class="button" value="搜索">
      </div>
    </div>
    <!--<div clstag="homepage|keycount|home2013|03b" id="hotwords"><strong>热门搜索：</strong><a style="color:#ff0000" target="_blank" href="http://sale.jd.com/act/chqNtQf7DIsVE.html">京东亲子日</a><a target="_blank" href="http://search.jd.com/Search?keyword=%E5%8D%95%E5%8F%8D%E7%9B%B8%E6%9C%BA&amp;enc=utf-8&amp;jdr=hot">单反相机</a><a target="_blank" href="http://sale.jd.com/act/chqNtQf7DIsVE.html&amp;jdr=hot">14童装新品</a><a target="_blank" href="http://list.jd.com/737-794-798-0-109147-0-0-0-0-0-1-1-1-1-12-911-4223-0.html&amp;jdr=hot">智能电视</a><a target="_blank" href="http://sale.jd.com/act/2alNE8URiIKSs.html&amp;jdr=hot">儿童理发器</a><a target="_blank" search?keyword="%E9%85%B7%E6%B4%BE8750&amp;enc=utf-8&amp;jdr=hot'" search.jd.com="" http:="">酷派8750</a><a target="_blank" href="http://list.jd.com/1713-3258-3258.html#&amp;jdr=hot">小说</a></div>
  --></div>
 
</div>
<div class="head">
  <div class="w1000" style="position:relative;">
    <div class="logo"><a href="<?php echo Yii::app()->params['siteUrl'];?>" target="_blank"><img src="images/head_logo.gif"></a></div>
    <div class="nav"> <a href="<?php echo Yii::app()->params['siteUrl'];?>zhekou.html" target="_blank">限时折扣</a> <a href="<?php echo Yii::app()->params['siteUrl'];?>baoyou.html" target="_blank">9块9包邮</a> <a class="on" href="<?php echo Yii::app()->params['siteUrl'];?>" target="_blank">首页</a>
      <div class="clear"></div>
    </div>
  </div>
</div>
<script type="text/javascript">

		$("#http").css("display","none");

		$("#file").css("display","none");



		function user(){

				$("#kzstyle").css('display','block');

		}

			var http = $("#http").text();

			var file = $("#file").text();



</script>
<style>

.success{

	position:absolute;

	width:50%;

	height:50%;

}

</style>
<script>

var w3c = (document.getElementById) ? true : false;

var agt = navigator.userAgent.toLowerCase();

var ie = ((agt.indexOf("msie") != -1) && (agt.indexOf("opera") == -1) && (agt.indexOf("omniweb") == -1));

var mymovey = new Number();

function IeTrueBody(){

	return (document.compatMode && document.compatMode!="BackCompat") ? document.documentElement : document.body;

}

function GetScrollTop(){

	return ie ? IeTrueBody().scrollTop : window.pageYOffset;

}

</script>
<div class="clear10"></div>

<div class="w1000">
  <div class="indx_jd">
    <div id="banner">
      <div class="slides">
        <ul class="slide-pic">
          <li style="display: block;" class="cur"> <a href="http://s.click.taobao.com/t?e=m%3D2%26s%3D7bSN%2B4uuQgocQipKwQzePCperVdZeJviEViQ0P1Vf2kguMN8XjClApjk0nCCcV7AK7PhFmWInHYtBcxY5UAltyGCXrP4IRvIxfsQNL9h%2FWYxqvimWvNQq%2Bdn1BbglxZYxUhy8exlzcq9AmARIwX9K%2BnbtOD3UdznPV1H2z0iQv9eY%2By0blbhscYl7w3%2FA2kb" target="_blank"><img src="http://gtms01.alicdn.com/tps/i1/T1LuRAFspSXXX1pzZP-760-90.jpg" /></a> </li>
        </ul>
        <ul class="slide-li op">
          <li class="cur"></li>
        </ul>
        <ul class="slide-li slide-txt">
          <li class="cur"><a href="#"></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="indx_qd">
    <div class="qiandao">
      <div class="tit">每日签到</div>
      <div class="clear"></div>
      <div id="qdimgt"><a onclick="qiandao();_hmt.push(['_trackEvent','index','click','qiandao']);" id="qiandao" href="javascript:void(0);"><span>周三</span><b id="isqiandao">签到</b></a></div>
      <div class="qd_jifen"><span id="scoreid">蛮便宜网站和手机客户端可分别签到领积分</span></div>
      <div class="clear10"></div>
      <div class="qd_line"> <a href="<?php echo Yii::app()->params['siteUrl'];?>activity/activity.php" target="_blank">·关注蛮便宜网QQ空间和官方微信轻松得40积分</a>
      </div>
    </div>
  </div>
</div>
<div class="clear10"></div>
<div class="content" id="info">

<!-- 广告位：首页专题广告 -->
<?php echo $content; ?>
</div>
<div class="clear10"></div>
<div class="qd_ts" style="display:none;" id="qdmessage">
  <div class="tz-qd">
    <div class="top-logo"><img src="images/tz-qd.png"></div>
    <div class="top-gb"><img src="images/tz-gb.png"></div>
  </div>
  <div class="da_td"></div>
</div>
<div style="right: 1179.5px; bottom: 50px;" id="tbox">
  <div id="jianyi">
    <div class="tit">今日优惠</div>
    <ul class="pl_fl">
      <?php 

				$result = Yii::app()->params->menu;
				

		foreach($result as $name=>$cid):?>
      <li><a href="?&cid=<?php echo $cid;?>" target="_blank" _hover-ignore="1"><?php echo $name;?></a></li>
      <?php endforeach;?>
    </ul>
    <div class="pl_top">精彩推荐</div>
    <div class="clear"></div>
    <ul class="pl_fl">
      <li><a href="?&cid=muying" target="_blank" _hover-ignore="1">母婴专场</a></li>
      <li><a href="?&cid=jiaju" target="_blank" _hover-ignore="1">家居专场</a></li>
    </ul>
    <!--
    <div class="pl_top">手机专享特权</div>
    <div class="clear"></div>
    <div class="pl_img"> <a href="<?php echo Yii::app()->params['siteUrl'];?>mobile.html" target="_blank"><img src="images/pf_code1.gif"></a> <br>
      <a href="<?php echo Yii::app()->params['siteUrl'];?>mobile.html" target="_blank">扫描或点击下载</a> </div>
    <div class="pl_dh"> <a href="<?php echo Yii::app()->params['siteUrl'];?>baoming/" target="_blank" _hover-ignore="1">商家报名</a> </div>
 --> 
  </div>
 
  <div class="clear"></div>
</div>
<div class="clear10"></div>
<!--
<div id="servicesbox" style="width:1000px;margin:0 auto;">
  <div style="float:right;width:1px;">
    <div style="top: 91px;" id="backi" class="pf_code">
      <div>关注蛮便宜微信</div>
      <a href="<?php echo Yii::app()->params['siteUrl'];?>activity/activity.php" target="_blank"><img src="images/pf_code.gif"></a> <a href="<?php echo Yii::app()->params['siteUrl'];?>activity/activity.php" target="_blank">关注送微信积分</a><br>
    </div>
  </div>
</div>
-->
		<!--
<div class="nfoot">
  <div class="w1000">
    <div class="nfoot_l"> <img src="images/m_btm_logo.gif"> ©2013 Manpianyi.com,All Rights Reserved.
      
      京ICP备12032228号-4 </div>
    <dl>
      <dd>玩转蛮便宜</dd>
      <dt><a href="<?php echo Yii::app()->params['siteUrl'];?>shuoming_1.html" target="_blank">秒杀秘籍</a></dt>
      <dt><a href="<?php echo Yii::app()->params['siteUrl'];?>shuoming_2.html" target="_blank">积分攻略</a></dt>
      <dt><a href="<?php echo Yii::app()->params['siteUrl'];?>shuoming_3.html" target="_blank">会员等级</a></dt>
    </dl>
    <dl>
      <dd>关注我们</dd>
      <dt><a href="http://weibo.com/manpianyiwang" target="_blank">新浪微博</a></dt>
      <dt><a href="http://t.qq.com/manpianyiwang" target="_blank">腾讯微博</a></dt>
      <dt><a href="http://user.qzone.qq.com/184478721/" target="_blank">QQ空间</a></dt>
    </dl>
    <dl>
      <dd>商务合作</dd>
      <dt><a href="<?php echo Yii::app()->params['siteUrl'];?>ad.html" target="_blank">广告联系</a></dt>
      <dt><a href="<?php echo Yii::app()->params['siteUrl'];?>link.html" target="_blank">友情链接</a></dt>
      <dt><a href="<?php echo Yii::app()->params['siteUrl'];?>baoming/" target="_blank">卖家报名</a></dt>
    </dl>
    <dl>
      <dd>关于我们</dd>
      <dt><a href="<?php echo Yii::app()->params['siteUrl'];?>our.html" target="_blank">关于我们</a></dt>
      <dt><a href="<?php echo Yii::app()->params['siteUrl'];?>contact.html" target="_blank">联系我们</a></dt>
      <dt><a href="<?php echo Yii::app()->params['siteUrl'];?>job.html" target="_blank">人才招聘</a></dt>
    </dl>
    <dl style="margin-right:0px;">
      <dd>在线客服</dd>
      <dt> </dt>
      <dt><a href="<?php echo Yii::app()->params['siteUrl'];?>shezhi.html" target="_blank">商品无法跳转</a></dt>
      <dt><a href="<?php echo Yii::app()->params['siteUrl'];?>shezhi.html" style="color:#f00;" target="_blank">点击此处设置</a></dt>
    </dl>
    <div class="clear"></div>
  </div>
  -->
  <div class="clear"></div>
  <div class="w1000" style="text-align:center;border-top:#f4f4f4 solid 1px;padding-top:10px;margin-top:10px;"> 蛮便宜独家优惠网站是第三方网上购物导购网站所有商品信息来自互联网，如果有商品信息不同可能由于信息更新引起信息以商家网站为准。 </div>
</div>



<script type="text/javascript">



$("#mail").css('color','red');

$("#bc").css("color",'red');


function search(searchid) {
	
	var keyword = $('#'+searchid).val();
		jQuery.ajax({
			'url':'/index.php?r=site/index&keyword='+keyword,
			'cache':false,			
			'success':function(data) {
				jQuery("div#content").html(data);
			}
			});
		return false;
}
		
</script>
</body>
</html>
