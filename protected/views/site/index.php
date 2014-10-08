<div class="w1000" id="page" style="height:36px;">
  <div id="nav_left_layout">
    <div class="tit">蛮便宜独家优惠</div>
    <div class="b_hot"><a href="?&sort=1" <?php if(!isset($_GET['sort']) || intval($_GET['sort']) == 1):?>class="on"<?php endif;?> target="_self">最新</a><a href="?&sort=2" target="_self" <?php if(isset($_GET['sort']) && intval($_GET['sort']) == 2):?>class="on"<?php endif;?>>最低</a></div>
    <div class="shengm">温馨提示：商品价格的不同可能会由于促销和打折引起的，详情可以咨询淘宝网店家 | <a href="<?php echo Yii::app()->params['siteUrl'];?>shezhi.html" target="_blank">商品打不开请点击这里</a></div>
    <div class="b_pag"><span>1/<?php echo $totalpages;?></span><a href="<?php echo Yii::app()->params['siteUrl'];?>2.html">下一页</a></div>
  </div>
</div>
<div class="w1000" style="position:relative;">
<div id="AdLayer"><a href="#top"><img src="images/top.gif"></a></div>
<?php 
if(isset($posts) && $posts):
foreach($posts as $item):?>
<div onmousemove="this.className='prl indx_li prb'" onmouseout="this.className='prl indx_li prf';" style="position:relative;" class="prl indx_li prf">
<!--
<div onmouseover="document.getElementById(&quot;extends<?php echo $item['name'];?>&quot;).style.display=&quot;block&quot;" onmousemove="this.className='prl indx_li prb'" onmouseout="document.getElementById('extends<?php echo $item['name'];?>').style.display='none';this.className='prl indx_li prf';" style="position:relative;" class="prl indx_li prf">
-->
<div val="<?php echo $item['id'];?>" class="p_box p_showdiv">
<div class="p_img">
<a target="_blank" href="?r=site/jump&id=<?php echo $item['id'];?>"><img alt="<?php echo $item['name'];?>" src="<?php echo $item['pic'];?>"></a>
</div>
<div class="clear"></div>
<div class="p_name">
<a  target="_blank" href="?r=site/jump&id=<?php echo $item['id'];?>" _hover-ignore="1"><?php echo $item['name'];?></a>
</div>
<div class="clear"></div>
<div class="p_pg">
<em>￥</em>
<span><?php echo $item['price'];?></span>
<b>￥<?php echo $item['oldprice'];?></b>
<strong>(<?php echo $item['zkType'];?>)</strong>
</div>
<div class="p_jd">
<div class="p_png"><?php echo $item['all_comment_count'];?>人购买</div>
<div class="gmrs">
<a  target="_blank" href="?r=site/jump&id=<?php echo $item['id'];?>"><img src="/images/n-gm-btn.png"></a>
<div class="clear"></div>	
</div>
<div class="clear"></div>	 
</div>
<div class="clear"></div>
<!--
<div class="new-ar">
</div>
-->
</div>






<div style="display: none;" id="extends<?php echo $item['name'];?>" class="p_fx">
<div class="bgf">
<div onclick="shoucang(23610664979,'<?php echo $item['name'];?>',9.9,138);">+收藏</div>
</div>
<!--当首页中的商品有属于品牌秒杀的话，鼠标浮上去之后显示一张蓝色的图片-->
<div class="b-juan" val="<?php echo $item['id'];?>">
	<a target="_blank" href="http://www.manpianyi.com/brand.html">
		<img style="" src="/images/quan_tag_end.png" class="b-juan-you">
	</a>
	<a target="_blank" href="http://www.manpianyi.com/brand.html">
		<img style="display: none;" src="/images/quan_tag_star_01.png" id="beginon">
	</a>
	
</div>
</div>
<div class="clear"></div>
</div>

<?php endforeach;
	endif;
?>
<div class="clear"></div>
 <?php
	 //分页widget代码: 
	 if(isset($pages) && $pages):
	  $this->widget('NewPager',array('pages'=>$pages));
	 endif;
?>
</div>
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
