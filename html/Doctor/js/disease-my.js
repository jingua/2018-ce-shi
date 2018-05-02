window.onload=function(){
	
	$(".dis-modular a").click(function(){
	   var $Pat=$(this).parent();
	   $Pat[0].getElementsByClassName("a-Active")[0].className="";
	   $(this).addClass("a-Active");
		
	})
	
	
	$(".choose-container input").change(function(){
		var $Pat=$(this).parent();
		if(this.checked)
		 {
		 	
		 	$Pat.addClass("chooseActive");
		 }
		 else{
		 	
		 	$Pat[0].className="ds-body ";	
		 }
		
		var i=$(".chooseActive").length;
		var y=$(".ds-body").length;
		if(i)
		{$("#dis_Delete").css("display","inline-block");
		 $("#use_dis").css("display","inline-block");
		  $(".ds-header span").html("已选模块"+i+"个模板");
		  
		  if(i==y){	$(".ds-header input")[0].checked=true;
		  	
		  }else{$(".ds-header input")[0].checked=false;}
		
		
		}
		else{$("#dis_Delete").css("display","none");
		 $("#use_dis").css("display","none");
		  $(".ds-header span").html("全选");

	}
	
	})
	
	$(".ds-header input").change(function(){
			var $Check=$(".choose-container input");
			var y=$Check.length;
		if(this.checked){
                 
			for(var i=0;i<y;i++)
			 {
				$Check[i].checked=true;
				$Check[i].parentNode.className+="  chooseActive";
				
			 }	
			 
			 
			 var i=$(".chooseActive").length;
			 
			 
		$("#dis_Delete").css("display","inline-block");
		 $("#use_dis").css("display","inline-block");
		  $(".ds-header span").html("已选模块"+i+"个模板");
				
			 
			 
			 
		 }else{
		 	
		 
		
			for(var i=0;i<y;i++)
			 {
				$Check[i].checked=false;
				$Check[i].parentNode.className="ds-body";
			 }	
			 
		 	$("#dis_Delete").css("display","none");
		 	 $("#use_dis").css("display","none");
		  $(".ds-header span").html("全选");

		 }
		
	
	})
	
	
	
	$(".ds-body img").mouseover(function(){
		
		var Src=this.src;
		
		var i=Src.lastIndexOf("2.");
		Src=Src.slice(0,i);
		
		
		this.src=Src+".png";
	
	$(this).next()[0].style.display='inline-block';
		
		
	})
		$(".ds-body img").mouseout(function(){
		
		var Src=this.src;
	
		var i=Src.lastIndexOf(".");
		Src=Src.slice(0,i);

		this.src=Src+"2.png";
	  		$(this).next()[0].style.display='none';
	})
	
	$("#dis_Delete").click(function(){
		$(".chooseActive").remove();
		$(".ds-header span").html("全选");
		$(this).css("display","none");
		$(".ds-header input")[0].checked=false;
	})
	
//disease
$(".disease-nav a").click(function(){
	
	var UL=$(this).parent().parent()[0];
	UL.getElementsByClassName("nav-active")[0].className=" ";
	$(this).addClass("nav-active");
	    	
})


$("#one_Diagnosis").click(function(){
	
	$(".mask").css("display","block");
	$(".Popup-one").css("display","block");
		
})

$(".close_one").click(function(){
	
	$(".mask").css("display","none");
	$(".Popup-one").css("display","none");
		
})


$("#tow_Diagnosis").click(function(){
	
	$(".mask").css("display","block");
	$(".Popup-there").css("display","block");
		
})

$(".close_one").click(function(){
	
	$(".mask").css("display","none");
	$(".Popup-there").css("display","none");
		
})







	
}
