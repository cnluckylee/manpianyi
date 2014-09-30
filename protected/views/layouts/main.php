<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><script src="js/tkapi.js" async="" charset="gbk"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo CHtml::encode($this->pageTitle);?></title>
<meta name="keywords" content="蛮便宜网,蛮便宜独家优惠,蛮便宜9块9包邮,蛮便宜独家折扣">
<meta name="description" content="蛮便宜网汇集独家优惠商品全场1折起,天天都有九块九(9.9)包邮商品,秒杀最新9块9包邮独家折扣尽在蛮便宜(manpianyi)">
<link type="text/css" rel="stylesheet" href="css/style.css">
<link type="text/css" rel="stylesheet" href="css/index.css">
<link type="text/css" rel="stylesheet" href="css/jd.css">
<link rel="shortcut icon" href="/images/manpianyi.ico">



<script>
var _hmt = _hmt || [];
</script>

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
				<!--<img src="images/top_mobile.gif"><a href="<?php echo Yii::app()->params['siteUrl'];?>mobile.html" target="_blank">手机客户端</a>-->
				<img src="images/top_1.gif"><a style="cursor:pointer" onclick="addfavorite()" target="_blank">收藏蛮便宜</a>
			</div>

            <div class="top_r">
				<div id="user" class="l"><a href="<?php echo Yii::app()->params['siteUrl'];?>login.php?returnto=http://www.manpianyi.com">登录</a> <span>|</span> <a href="<?php echo Yii::app()->params['siteUrl'];?>reg.php" target="_blank">免费注册</a><span>|</span><a href="<?php echo Yii::app()->params['siteUrl'];?>login.php?returnto=http://home.manpianyi.com/invite.php">邀请好友</a></div>
				<span>|</span>
				<div class="scj">
				<a href="javascript:void(0);" onclick="show();">收藏夹</a>
				<div class="sc_mian" id="pop" style="display:none">
				<div class="sc_tit">
						<em>最近收藏的宝贝</em>
						<a href="javascript:void(0);" onclick="hide()">关闭</a>
					</div>
					<div id="view_shoucang"></div>
					</div>
				</div>
                <span>|</span><a href="<?php echo Yii::app()->params['siteUrl'];?>shuoming.html" target="_blank">帮助中心</a>
				<span>|</span>
				<span style="margin-right:0px;">关注蛮便宜：</span>
				
				 </div>

        </div>
</div>
<div id="header-2013" class="w">
		<div class="ld" id="logo-2013"><a clstag="homepage|keycount|home2013|02a" hidefocus="true" href="http://www.jd.com/"><b></b><img height="60" width="270" alt="京东" src="images/head_logo.gif"></a></div>
		<!--logo end-->
		<div id="search-2013">
			<div class="i-search ld">
				<ul class="hide" id="shelper" style="display: none;"></ul>
				<div class="form">
					<input type="text" onkeydown="javascript:if(event.keyCode==13) search('key');" autocomplete="off" id="key" accesskey="s" class="text" style="color: rgb(153, 153, 153);">
					<input type="button" clstag="homepage|keycount|home2013|03a" onclick="search('key');return false;" class="button" value="搜索">
				</div>
			</div>
			<div clstag="homepage|keycount|home2013|03b" id="hotwords"><strong>热门搜索：</strong><a style="color:#ff0000" target="_blank" href="http://sale.jd.com/act/chqNtQf7DIsVE.html">京东亲子日</a><a target="_blank" href="http://search.jd.com/Search?keyword=%E5%8D%95%E5%8F%8D%E7%9B%B8%E6%9C%BA&amp;enc=utf-8&amp;jdr=hot">单反相机</a><a target="_blank" href="http://sale.jd.com/act/chqNtQf7DIsVE.html&amp;jdr=hot">14童装新品</a><a target="_blank" href="http://list.jd.com/737-794-798-0-109147-0-0-0-0-0-1-1-1-1-12-911-4223-0.html&amp;jdr=hot">智能电视</a><a target="_blank" href="http://sale.jd.com/act/2alNE8URiIKSs.html&amp;jdr=hot">儿童理发器</a><a target="_blank" search?keyword="%E9%85%B7%E6%B4%BE8750&amp;enc=utf-8&amp;jdr=hot'" search.jd.com="" http:="">酷派8750</a><a target="_blank" href="http://list.jd.com/1713-3258-3258.html#&amp;jdr=hot">小说</a></div>
		</div>
		<!--search end-->
		<div id="my360buy-2013">
			<dl>
				<dt class="ld"><s></s><a clstag="homepage|keycount|home2012|04a" href="http://home.jd.com/">我的京东</a><b></b></dt>
				<dd>
					<div class="loading-style1"><b></b>加载中，请稍候...</div>
				</dd>
			</dl>
		</div>
		<!--my360buy end-->
		<div clstag="homepage|keycount|home2013|05a" id="settleup-2013">
			<dl>
				<dt class="ld"><s></s><span class="shopping"><span id="shopping-amount">1</span></span><a id="settleup-url" href="http://cart.jd.com/cart/cart.html">去购物车结算</a> <b></b> </dt>
				<dd>
					<div class="prompt">
						<div class="loading-style1"><b></b>加载中，请稍候...</div>
					</div>
				</dd>
			</dl>
		</div>
		<!--settleup end-->
	</div>
<div class="head">
<div class="w1000" style="position:relative;">
<div class="logo"><a href="<?php echo Yii::app()->params['siteUrl'];?>" target="_blank"><img src="images/head_logo.gif"></a></div>
<div class="nav">
<a href="<?php echo Yii::app()->params['siteUrl'];?>jifen.html" target="_blank">积分兑换</a>
<a href="<?php echo Yii::app()->params['siteUrl'];?>zhekou.html" target="_blank">限时折扣</a>
<a href="<?php echo Yii::app()->params['siteUrl'];?>baoyou.html" target="_blank">9块9包邮</a>
<a class="on" href="<?php echo Yii::app()->params['siteUrl'];?>" target="_blank">首页</a>
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

</script><style>
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
<script type="text/javascript" src="js/util.js"></script>
<div class="w1000">
<div class="indx_jd">
<div id="banner">
        <div class="slides">
            <ul class="slide-pic">
              <li style="display: block;" class="cur">
              	<a href="http://s.click.taobao.com/t?e=m%3D2%26s%3D7bSN%2B4uuQgocQipKwQzePCperVdZeJviEViQ0P1Vf2kguMN8XjClApjk0nCCcV7AK7PhFmWInHYtBcxY5UAltyGCXrP4IRvIxfsQNL9h%2FWYxqvimWvNQq%2Bdn1BbglxZYxUhy8exlzcq9AmARIwX9K%2BnbtOD3UdznPV1H2z0iQv9eY%2By0blbhscYl7w3%2FA2kb" target="_blank"><img src="http://gtms01.alicdn.com/tps/i1/T1LuRAFspSXXX1pzZP-760-90.jpg" /></a>
				 </li>


			</ul>
            <ul class="slide-li op">
				<li class="cur"></li>            </ul>
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
<div class="qd_line">
<a href="<?php echo Yii::app()->params['siteUrl'];?>activity/activity.php" target="_blank">·关注蛮便宜网QQ空间和官方微信轻松得40积分</a>

<!--
<div><img src="/images/zhuomian.gif" /></div>
<a href="/shortcut.php">桌面图标</a>
<div><img src="/images/shoucang.gif" /></div>
<a href="javascript:void(0)" onclick="addfavorite()">加入收藏夹</a>
<div><img src="/images/shezhiindex.gif" /></div>
<a href="javascript:void(0)" onclick="window.external.addfavorite('http://www.manpianyi.com','蛮便宜')">设为首页</a>-->
</div>
</div>
<!--<div class="clear10"></div>
<div class="qd_sj">
<div class="sj_icon"><a href="/mobile.html?url=index" target="_blank"><img src="/images/64x64_icon.jpg" /></a></div>
<div class="sj_conm">
<span><a href="/mobile.html?url=index" target="_blank" style="font-size:16px; font-family:'微软雅黑';">蛮便宜手机客户端</a></span>
<em>IPhone Andriod</em>
<p><a href="/mobile.html?url=index" target="_blank"><img src="/images/sj_xzm.gif" /></a></p>
</div>
<div class="clear"></div>
</div>-->
</div>
</div>
<div class="clear10"></div>
<div class="w1000" id="page" style="height:36px;">
<div id="nav_left_layout">
<div class="tit">蛮便宜独家优惠</div>
<div class="b_hot"><a href="?&sort=1" <?php if(!isset($_GET['sort']) || intval($_GET['sort']) == 1):?>class="on"<?php endif;?> target="_self">最新</a><a href="?&sort=2" target="_self" <?php if(isset($_GET['sort']) && intval($_GET['sort']) == 2):?>class="on"<?php endif;?>>最热</a></div>
<div class="shengm">温馨提示：商品价格的不同可能会由于促销和打折引起的，详情可以咨询淘宝网店家 | <a href="<?php echo Yii::app()->params['siteUrl'];?>shezhi.html" target="_blank">商品打不开请点击这里</a></div>
<div class="b_pag"><span>1/5</span><a href="<?php echo Yii::app()->params['siteUrl'];?>2.html">下一页</a></div>
</div>
</div>
<div class="w1000" id="info" style="position:relative;">
<div id="AdLayer"><a href="#top"><img src="images/top.gif"></a></div>
<!-- 广告位：首页专题广告 -->

<?php echo $content; ?>
<div class="clear10"></div>
<div class="w1000 p_bot">
<div class="pbot_li">
<div class="tit">热门专区</div>
<div class="comn"><a href="<?php echo Yii::app()->params['siteUrl'];?>baoyou.html" target="_blank">9块9包邮</a><a href="<?php echo Yii::app()->params['siteUrl'];?>zhekou.html" target="_blank">限时折扣</a><a href="<?php echo Yii::app()->params['siteUrl'];?>jifen.html" target="_blank">积分兑换</a></div>
</div>
<div class="pbot_li">
<div class="tit">蛮便宜手机客户端</div>
<div class="comn"><a href="<?php echo Yii::app()->params['siteUrl'];?>mobile.html" target="_blank">IPhone手机</a><a href="<?php echo Yii::app()->params['siteUrl'];?>mobile.html" target="_blank">Andriod手机</a></div>
</div>
<div class="pbot_li">
<div class="tit">精彩活动</div>
<div class="comn"><a href="<?php echo Yii::app()->params['siteUrl'];?>reg.php" target="_blank">注册会员送集分宝</a><!--<a href="/choujiang/" target="_blank">0元抽奖</a>--></div>
</div>
<div class="weixin">
<div class="er_img"><img src="images/weixin.gif"></div>
<div class="wx_right">
<span>关注蛮便宜微信</span>
<p>秒杀早知道</p>
<b>用微信扫描左侧二维码</b>
</div>
</div>
</div>


<div class="qd_ts" style="display:none;" id="qdmessage">
<div class="tz-qd">
<div class="top-logo"><img src="images/tz-qd.png"></div>
<div class="top-gb"><img src="images/tz-gb.png"></div>
<script>
$(".top-gb").click(function(){
	$(".qd_ts").css('display','none');
	})

function closeabc()
{
   //var div = document.getElementById("qdmessage");
   //div.style.display ="none";
   $("#qdmessage").hide();

}

</script>
<p>恭喜您成功获得10个积分</p>
<button class="btn" id="btn" onclick="closeabc()">确定</button>
<div class="clear"></div>
<div style="width:100%;text-align:center;margin-top:10px;font-size:12px;line-height:20px;">温馨提示：去蛮便宜手机客户端还可以获得10积分<a href="<?php echo Yii::app()->params['siteUrl'];?>mobile.html?url=qd" style="color:#c00" target="_blank">下载蛮便宜手机客户端</a></div>
<div id="success"></div>
<div class="tz-wx">
<span>您还可以完成以下任务获得更多积分：</span>
<p><a href="<?php echo Yii::app()->params['siteUrl'];?>mobile.html?url=qd" target="_blank">蛮便宜网手机客户端签到送10积分</a></p>
<p><a hrrf="<?php echo Yii::app()->params['siteUrl'];?>activity/activity.php?url=qd" target="_blank">关注蛮便宜网QQ空间和微信获得40积分</a></p>
</div>
</div>
<input name="uid" value="" type="hidden">
<div class="da_td"></div>
</div>
<script type="text/javascript">
function shoucang(num_iid,title,price,oldprice){

		$.ajax({
	  url:'/servet/addshoucang.php',
	  data:{
      num_iid:num_iid,
      price:price,
      title:title,
      oldprice:oldprice
	  },
	  type:'post',
	  success:function(data){
		  if(data=="没有登录"){
			  $('#kzstyle').show();
		  }
		  if(data=="已收藏过"){
			  $("#sctsd").html('已收藏过');
			  $("#sctsd").show();
			  setTimeout(function(){$("#sctsd").hide();},'1000')
		  }
		  if(data=="success"){
			  $("#sctsd").show();
			  $("#sctsd").html('收藏成功');
			  setTimeout(function(){$("#sctsd").hide();},'1000')
		  }
	  }
			});
	}

function qdtishiclose(){
	$("#qdmessage").hide();
}
function ajax_qiandao(){
	$.ajax({
		url:'/servet/ajax_qiandao.php',
		dataType:'json',
		success:function(msg){

			if(msg.msg=='yes'){
				$("#scoreid").html('<a target="_blank" href="http://home.manpianyi.com/jifen.php">查看我的积分>></a>');
				$("#isqiandao").html('已签到');
			}
		}

	});
}


</script>



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
       		 <li><a href="?&cid=2" target="_blank" _hover-ignore="1">母婴专场</a></li>
			 <li><a href="?&cid=4" target="_blank" _hover-ignore="1">家居专场</a></li>


        </ul>
        <div class="pl_top">手机专享特权</div>
        <div class="clear"></div>
        <div class="pl_img">
		   <a href="<?php echo Yii::app()->params['siteUrl'];?>mobile.html" target="_blank"><img src="images/pf_code1.gif"></a>
		   <br>
		   <a href="<?php echo Yii::app()->params['siteUrl'];?>mobile.html" target="_blank">扫描或点击下载</a>
        </div>
		<div class="pl_dh">
			<a href="<?php echo Yii::app()->params['siteUrl'];?>baoming/" target="_blank" _hover-ignore="1">商家报名</a>
		</div>

	</div>
    <div class="clear"></div>

</div><!--<div>2014-02-05/17:48:02</div>-->

<div class="clear10"></div>
<div id="servicesbox" style="width:1000px;margin:0 auto;">
	<div style="float:right;width:1px;">
		<div style="top: 91px;" id="backi" class="pf_code">
		<div>关注蛮便宜微信</div>
<a href="<?php echo Yii::app()->params['siteUrl'];?>activity/activity.php" target="_blank"><img src="images/pf_code.gif"></a>
<a href="<?php echo Yii::app()->params['siteUrl'];?>activity/activity.php" target="_blank">关注送微信积分</a><br>
		</div>
	</div>
	</div>
	<script language="JavaScript1.1">
			function heartBeat(){
				diffY=GetScrollTop();
				mymovey += Math.floor((diffY-document.getElementById('backi').style.top.replace("px","")+100)*0.1);
				document.getElementById('backi').style.top = mymovey+"px";
			}
			window.setInterval("heartBeat()",1);
		</script>


<div class="nfoot">
<div class="w1000">
<div class="nfoot_l">
 <img src="images/m_btm_logo.gif">

 ©2013 Manpianyi.com,All Rights Reserved.
京ICP备12032228号-4
</div>

<dl>
<dd>玩转蛮便宜</dd>
<dt><a href="<?php echo Yii::app()->params['siteUrl'];?>shuoming_1.html" target="_blank">秒杀秘籍</a></dt>
<dt><a href="<?php echo Yii::app()->params['siteUrl'];?>shuoming_2.html" target="_blank">积分攻略</a></dt>
<dt><a href="<?php echo Yii::app()->params['siteUrl'];?>shuoming_3.html" target="_blank">会员等级</a></dt>
</dl>
<dl>
<dd>手机蛮便宜</dd>
<dt><a href="https://itunes.apple.com/cn/app/man-bian-yi/id691798436?mt=8" target="_blank">下载IPhone手机客户端</a></dt>
<dt><a href="<?php echo Yii::app()->params['siteUrl'];?>mobile.html" target="_blank">下载Android手机客户端</a></dt>
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
<dt>

</dt>
<dt><a href="<?php echo Yii::app()->params['siteUrl'];?>shezhi.html" target="_blank">商品无法跳转</a></dt>
<dt><a href="<?php echo Yii::app()->params['siteUrl'];?>shezhi.html" style="color:#f00;" target="_blank">点击此处设置</a></dt>
</dl>
<div class="clear"></div>
</div>
<div class="clear"></div>
<div class="w1000" style="text-align:center;border-top:#f4f4f4 solid 1px;padding-top:10px;margin-top:10px;">
蛮便宜独家优惠网站是第三方网上购物导购网站所有商品信息来自互联网，如果有商品信息不同可能由于信息更新引起信息以商家网站为准。
</div>
</div>
<!---->
<div class="scts_w" id="sctsd" style="display:none;">收藏成功</div>
<div id="kzstyle" style="display:none;">
<div class="zhezhao" style=" height:6300px">
</div>
<div class="zlogin">
<div class="top">
<div class="logo"><img src="images/head_logo.gif"></div>
<div class="guanb"><a href="javascript:void(0)" onclick="guanbi();"><img src="images/gb_menu.gif"></a></div>
</div>
<div class="k_login">
<div id="bc" class="true" style="display: none; color: red;"></div>
<dl>
<dd>用户名：</dd>
<dt><input id="username" name="" value="邮箱/用户名/手机号" type="text"></dt>
<dd>密码：</dd>
<dt><input id="password" name="" onkeydown="if(event.keyCode==13){bdyz();}" type="password"></dt>
</dl>
<div class="menu"><input value="登录" onclick="bdyz()" type="button"><a href="<?php echo Yii::app()->params['siteUrl'];?>password_retrieve.php" target="_blank">忘记密码</a><a href="<?php echo Yii::app()->params['siteUrl'];?>reg.php" target="_blank">立即注册</a></div>

</div>
</div>
</div>
<!--结束-->

<script type="text/javascript" src="js/foot.js"></script>
<script type="text/javascript">

$("#mail").css('color','red');

function guanbi(){
	$("#kzstyle").css('display','none');
}

$("#username").focus(function(){
	var uname = $("#username").val();
	if(uname=='邮箱/用户名/手机号'){
		$("#username").val('');
	}
});

$("#username").blur(function(){
	var uname = $("#username").val();
	if(uname==''){
		$("#username").val('邮箱/用户名/手机号');
	}
});

function bdyz(){
		if(yz() == false){
			return false;
		}
		var uname = $("#username").val();
		var pwd = $("#password").val();
		var noyzm = 1;
		$.ajax({
			type:'POST',
			url:'/servet/ajax_login.php',
			dataType:'json',
			data:"uname="+uname+"&pwd="+pwd+"&noyzm="+noyzm,

		success:function(data){
					if(data.status == 'error'){
						$("#bc").css("display",'block');
						$("#bc").html("账号或密码错误");
					}else if(data.status == "ok"){
						window.location.href="";
						return false;
					}

				}
		})

}
	$("#bc").css("color",'red');
function yz(){

		var uname = document.getElementById("username");

		if(uname.value == ""){
			$("#bc").css("display",'block');
			document.getElementById("bc").innerHTML="账号不能为空";
			return false;
		}else if(uname.value == '邮箱/用户名/手机号'){
				$("#bc").css("display",'block');
				document.getElementById("bc").innerHTML="请输入账号";
			return false;
		}else{
			return true;
		}
}

function qiandao(){

	$.ajax({
		url:'/servet/qiandao.php',
		type:'POST',
		dataType:'json',
		success:function(msg){

			if(msg.status=='1'){
				$("#isqiandao").html("已签到");
				$("#scoreid").html('<a href="http://home.manpianyi.com/jifen.php" target="_blank">查看我的积分</a>');
				$("#qdmessage").show();
				setTimeout("qdtishiclose()",12000);
			}else if(msg.status=='nologin'){
				$("#kzstyle").show();
				//$("#kzstyle").show();
				$(".bc").html(msg);
				$(".zhezhao").css('opacity',"0.4");
				$(".zlogin").css('display','block');
			}else{
				alert(msg.message);
			}
		},
		error:function(){
			//alert("ajax异常");
		}
	});
}


function search(searchid) {
	
	var keyword = $('#'+searchid).val();
		jQuery.ajax({
			'url':'/index.php?r=site/index&keyword='+keyword,
			'cache':false,
			
			'success':function(data) {
				jQuery("div#info").html(data);
			}
			});
		return false;
}
		
</script>
</body></html>
