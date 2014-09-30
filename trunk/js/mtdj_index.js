$(document).ready(function(){
		$(".p_showdiv").hover(
				  function () {
					//获取到商品id号
				    var numid = $(this).attr("val");
				  	//替换所有空格！
					numid = numid.replace(/[ ]/g,"");  
						$.ajax({
							url:'/servet/ajax_brandIndex.php',
							data:{numid:numid},
							type:'POST',
							dataType:'json',
							success:function(msg){
								//如果msg.reg等于0的话说明优惠券已经抢完，等于1说明还有优惠券,等于2说明是预告商品  
								if(msg.reg==0){
									$(".b-juan-you").show();
									$(".b-juan-you").attr("src","/images/quan_tag_end.png");
								}else if(msg.reg==1){
									$(".b-juan-you").show();
									$(".b-juan-you").attr("src","/images/quan_tag_star_01.png");
								}else if(msg.reg==2){
									$(".b-juan-you").show();
									$(".b-juan-you").attr("src","/images/quan_tag_wait_01.png");
								}
							}
						});
				  },
				  function(){
					    $(this).find(".b-juan").hide();
				  }
				);		
});