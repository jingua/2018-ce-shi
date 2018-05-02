var calUtil = {
    getDaysInmonth : function(iMonth, iYear){
      var dPrevDate = new Date(iYear, iMonth, 0);
      return dPrevDate.getDate();
    },
    bulidCal : function(iYear, iMonth) {
      var aMonth = new Array();
      aMonth[0] = new Array(7);
      aMonth[1] = new Array(7);
      aMonth[2] = new Array(7);
      aMonth[3] = new Array(7);
      aMonth[4] = new Array(7);
      aMonth[5] = new Array(7);
      aMonth[6] = new Array(7);
      var dCalDate = new Date(iYear, iMonth - 1, 1);
      var iDayOfFirst = dCalDate.getDay();
      var iDaysInMonth = calUtil.getDaysInmonth(iMonth, iYear);
      var iVarDate = 1;
      var d, w;
      aMonth[0][0] = "日";
      aMonth[0][1] = "一";
      aMonth[0][2] = "二";
      aMonth[0][3] = "三";
      aMonth[0][4] = "四";
      aMonth[0][5] = "五";
      aMonth[0][6] = "六";
      for (d = iDayOfFirst; d < 7; d++) {
        aMonth[1][d] = iVarDate;
        iVarDate++;
      }
      for (w = 2; w < 7; w++) {
        for (d = 0; d < 7; d++) {
          if (iVarDate <= iDaysInMonth) {
            aMonth[w][d] = iVarDate;
            iVarDate++;
          }
        }
      }
      return aMonth;
    },
    ifHasSignedMorn : function(signList,month,day){
      var signed = [];
      
      for(var item in signList){
      	var date = new Date(item);
      	//console.log(date.getDate()+"=="+day)
      	if(date.getDate() == day) {
    		  signed.push(1);
    		  signed.push(signList[item]["morning"][0]);
    		  signed.push(signList[item]["morning"][1]);
    		  signed.push(signList[item]["morning"][2]);
    	}
      }
      
      return signed ;
      
    },
    ifHasSignedAfter : function(signList,month,day){
      var signed = [];
      for(var item in signList){
      	var date = new Date(item);
      	if(date.getDate() == day) {
    		  signed.push(1);
    		  signed.push(signList[item]["after"][0]);
    		  signed.push(signList[item]["after"][1]);
    		  signed.push(signList[item]["after"][2]);
    	}
      }
      
      return signed ;
      
    },
    drawCal : function(iYear, iMonth ,signList) {
      var myMonth = calUtil.bulidCal(iYear, iMonth);
      var htmls = new Array();
      htmls.push("<div class='sign_main' id='sign_layer'>");
      htmls.push("<div class='sign' id='sign_cal'>");
      htmls.push("<table class='table'>");
      htmls.push("<tr>");
      htmls.push("<th></th>");
      htmls.push("<th>" + myMonth[0][0] + "</th>");
      htmls.push("<th>" + myMonth[0][1] + "</th>");
      htmls.push("<th>" + myMonth[0][2] + "</th>");
      htmls.push("<th>" + myMonth[0][3] + "</th>");
      htmls.push("<th>" + myMonth[0][4] + "</th>");
      htmls.push("<th>" + myMonth[0][5] + "</th>");
      htmls.push("<th>" + myMonth[0][6] + "</th>");
      htmls.push("</tr>");
      var d, w;
      for (w = 1; w < 7; w++) {
      	
      	if(w>5){
      		
      		if(myMonth[w][1]==undefined||myMonth[w][1]=="undefined") continue;
      	}
      	
        htmls.push("<tr><td class='date'></td>");
        for (d = 0; d < 7; d++) {
			htmls.push("<td class='date'>"+(!isNaN(myMonth[w][d]) ? myMonth[w][d] : " ") + "</td>");
        }
        
        htmls.push("</tr>");
        
        
        htmls.push("<tr><td>上午</td>");
        for (d = 0; d < 7; d++) {
            var ifHasSigned = calUtil.ifHasSignedMorn(signList,iMonth,myMonth[w][d]);
          	console.log(myMonth[w][d]);
            if(ifHasSigned[0]){
            	htmls.push("<td ");
            	if(ifHasSigned[3]=="1"||ifHasSigned[3]==1){
            		
            		htmls.push(" class='onLineDay onMonth' data-lineMon='"+iYear+"-"+iMonth+"-"+myMonth[w][d]+"'>");
	            	htmls.push("<div class='online'></div>");
	            }else{
	            	htmls.push(">");
	            	htmls.push("</td>");
	            	continue;
	            }
	            
            	if(ifHasSigned[1]=="1"||ifHasSigned[1]==1){
            	htmls.push("<span class='normalAcount' data-normalNum='10'></span>");
            	}
            	if(ifHasSigned[2]=="1"||ifHasSigned[2]==1){
	            htmls.push("<span class='VIPAcount' data-vipNum='10'></span>");
            	}
            	
	            htmls.push("</td>");
            }else{
            	if(myMonth[w][d]==undefined||myMonth[w][d]=="undefined"){
            	htmls.push("<td></td>");
            	}else{
            		htmls.push("<td class='onMonth' data-lineMon='"+iYear+"-"+iMonth+"-"+myMonth[w][d]+"'></td>");
            	}
            }
        }
        htmls.push("</tr>");
        
         htmls.push("<tr><td>下午</td>");
        for (d = 0; d < 7; d++) {
	        var ifHasSigned = calUtil.ifHasSignedAfter(signList,iMonth,myMonth[w][d]);
          
            if(ifHasSigned[0]){
            	htmls.push("<td");
            	if(ifHasSigned[3]=="1"||ifHasSigned[3]==1){
            		
            		htmls.push(" class='onLineDay' data-lineMon='"+iYear+"-"+iMonth+"-"+myMonth[w][d]+"'>");
	            	htmls.push("<div class='online'></div>");
	            }else{
	            	htmls.push(">");
	            	htmls.push("</td>");
	            	continue;
	            }
	            
            	
            	if(ifHasSigned[1]=="1"||ifHasSigned[1]==1){
            	htmls.push("<span class='normalAcount' data-normalNum='10'></span>");
            	}
            	if(ifHasSigned[2]=="1"||ifHasSigned[2]==1){
	            htmls.push("<span class='VIPAcount' data-vipNum='10'></span>");
            	}
            	
	            htmls.push("</td>");
            }else{
            	if(myMonth[w][d]==undefined||myMonth[w][d]=="undefined"){
            	htmls.push("<td></td>");
            	}else{
            		htmls.push("<td class='onMonth' data-lineMon='"+iYear+"-"+iMonth+"-"+myMonth[w][d]+"'></td>");
            	}
            }
        }
        htmls.push("</tr>");
       	
      }
      htmls.push("</table>");
      htmls.push("</div>");
      htmls.push("</div>");
      return htmls.join('');
    }
};