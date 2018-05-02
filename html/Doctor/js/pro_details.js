window.onload=function(){
	
	$(".right-nav a").click(function(e){
		e=e||window.event;
	         e.preventDefault();
		var Parent=$(this).parent().parent()[0];
		Parent.getElementsByClassName("liactive")[0].className=" ";
		
		$(this).addClass("liactive");
		
	})
	
	$(".image-ul li").mouseover(function(){
		
		$(this).css("border-color","rgb(0,191,68)");
		
		
		
	})
	
	$(".image-ul li").mouseout(function(){
		
		$(this).css("border-color","#ddd");
		
	})
	
}
