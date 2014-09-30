$(function() {
	$(".p_box").hover(
	  function () {
	    var numid = $(this).find(".b-juan").attr("val");
		var qiang = $(this).find(".qianggou").attr("val");
		var ctime = $(this).attr("val");
		numid = numid.replace(/[ ]/g,""); //替换所有空格！ 
		//ajax进行传值
		// $.post("/servet/ajax_brand.php",{numid:numid},function(date){
		// 	alert("1232");
		// 	// alert(date.url);
		// },"json");
		// $(this).find(".b-juan").show();
			$.ajax({
				url:'/servet/ajax_brand.php',
				data:{numid:numid},
				type:'POST',
				dataType:'html',
				success:function(msg){
					var strs = new Array();
       				strs = msg.split(",");
       				var flag = strs[0];
       				var price = strs[1];
       				flag = flag.trim();
       				if(flag==2){
       					$(".p_box").each(function(){
							if($(this).find(".b-juan").attr("val")==numid){
								$(this).find(".b-juan").show();
								if(ctime>0){
									$(this).find(".b-juan .b-juan-you").show();
									$(this).find(".b-juan #beginon").hide();
								}else{
									$(this).find(".b-juan #beginon").show();
									$(this).find(".b-juan .b-juan-you").hide();
								}
								$(this).find(".b-juan .b-juan-none").hide();
								$(this).find(".b-juan .jinqian").html("<i>￥</i>"+price);
							}
						});
       				}else if(flag==1){
       					$(".p_box").each(function(){
							if($(this).find(".b-juan").attr("val")==numid){
								$(this).find(".b-juan").show();
								$(this).find(".b-juan .b-juan-you").hide();
								$(this).find(".b-juan #beginon").hide();
								$(this).find(".b-juan .b-juan-none").show();
								$(this).find(".b-juan .jinqian").html("<i>￥</i>"+price);
							}
						});
       				}else{

       				}
				},
				error:function(msg){
					alert("eeeee");
				}
			});
	  },
	  function () {
	    $(this).find(".b-juan").hide();
	  }
	);

	//当点击图片或者标题时，要判断用户是否已经登录了
	$(".login").click(function(){
		var numid = $(this).attr("val");
		$.ajax({
			url:'/servet/ajax_brandlogin.php',
			data:{flag:"1"},
			type:'POST',
			dataType:'html',
			async:false,
			success:function(data){
				//如果data为1时代表用户没有登录
				if(data==1){
					$("#kzstyle").show();
				}else{
					 window.open("/brand_detail.php?id="+numid,"_blank");
				}
			}
		});
	});
});
