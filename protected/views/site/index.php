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


