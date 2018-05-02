

$(function(){
	
	var winHeight=$(window).innerHeight();
	
	$(".advert_title div").click(function(){
		var b=$(this).attr("data-advert");
		if(!$(this).hasClass("active")){
			$("[data-advertlist]").hide();
			$("[data-advertlist="+b+"]").show();
			$("[data-advert]").removeClass("active");
			$(this).addClass("active")
		}
	})
	
	$(document).on("click",".userOther",function(){
		$("#messageWindow").show();
	})
	
	$(".hyqq").click(function(){
		$("[data-rightshowid]").hide();
		$("#rightWindow").show();
		
		$("[data-rightshowid=1]").show();
		
		
		$(document).on("click",".rightuserCtrl_sure",function(){
			var id=$(this).attr("[data-tofriendid]");
			if(confirm("确定同意好友申请？")){
				alert("添加好友成功");
			}
		})
	})
	$(".rcjc").click(function(){
		$("[data-rightshowid]").hide();
		$("#rightWindow").show();
		$("[data-rightshowid=2]").show();
	})
	$(".sfjl").click(function(){
		$("[data-rightshowid]").hide();
		$("#rightWindow").show();
		$("[data-rightshowid=3]").show();
	})
	$(".close").click(function(){
		$("#openWindow").fadeOut();
		$("#rightWindow").fadeOut();
		$("#messageWindow").fadeOut();
	})
	
	$(".talkNow").click(function(){
					if($(this).parent(".fixed-bottom-right").hasClass("active")){
						$(this).parent(".fixed-bottom-right").removeClass("active");
						$(this).parent(".fixed-bottom-right").find(".newCall").remove();
					}else{
						$(this).parent(".fixed-bottom-right").addClass("active");
						setTimeout(function(){
						for(var i=0;i<10;i++){
						$(".fixed-bottom-right").prepend('<div class="newCall"><a href="char_patient.html"><span class="point"></span><span>黄aadfadf私服</span></a></div>');
						}
						},500)
					}
				})
})
