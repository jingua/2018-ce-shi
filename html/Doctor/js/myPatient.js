window.onload=function(){
	$(".dis-tr td").click(function(){
		var txt=$(this).text();
		


	})
	


 //charPatient
 
  $(".pen").mouseover(function(){
    	var Src=this.src;
    	var i=Src.lastIndexOf("pen.png");
    	Src=Src.slice(0,i);
    	this.src=Src+"caibi.png";
    	$(this).css({
    		    top:"26px",
    left: "619px",
    borderLeft: "1px solid #ddd",
    paddingLeft: "5px"
    		
    	})
    	
    })
    $(".pen").mouseout(function(){
    	var Src=this.src;
    	var i=Src.lastIndexOf("caibi.png");
    	Src=Src.slice(0,i);
    	this.src=Src+"pen.png";
        $(this).css({
        	    top:"21px",
    left:"619px", 
    borderLeft: "1px solid #ddd",
     paddingLeft: "0px"
        })
    })
    var State="hide";
    
     $(".pen").click(function(){
      
    	
    	if(State=="hide"){
    	State="show";
    	$(".keyWord").css("display","block")
    	}
    	else{State="hide";
    	$(".keyWord").css("display","none")}
    	
    })
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
     $(".computer").mouseover(function(){
    	var Src=this.src;
    	var i=Src.lastIndexOf("computer.png");
    	Src=Src.slice(0,i);
    	this.src=Src+"caiCom.png";
    	
    	
    })
    $(".computer").mouseout(function(){
    	var Src=this.src;
    	var i=Src.lastIndexOf("caiCom.png");
    	Src=Src.slice(0,i);
    	this.src=Src+"computer.png";
     })



   $(".keyWord li").mouseover(function(){
   	
   	this.className="activeKey";

   })
   
   $(".keyWord li").mouseout(function(){
   	
   	this.className=" ";

   })

	
}
