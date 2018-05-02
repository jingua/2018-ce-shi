
/*执行数据添加*/
var is_submit=0;
$(".btn_submit").on("click", function(){
    if(is_submit==1) return;
    is_submit=1;
    $("#form-article-add").ajaxSubmit({
        url:page_url.save_url,
        type:"POST",
        dataType:"json",
        beforeSend: function() { },
        error: function() {
            layer.alert("服务器超时，请稍后再试",{icon:2,time:1000});
            is_submit=0;
        },
        success:function(data){
            if(data.ok==200){
                layer.alert(data.info,{icon:1,time:1000});
                setInterval(function(){ location.href=page_url.list_url; },1000);
            }else{
                layer.alert(data.info,{icon:2,time:1000});
            }
            is_submit=0;
        }
    });
});

var is_submit=0;
$(".btn-submit").on("click", function(){
    if(is_submit==1) return;
    is_submit=1;
    var image = new Array();
    $('.upFileImgs').each(function(index,ele){
        image[index] = $(ele).attr('data-tu');
    })
    $("#form-article-add").ajaxSubmit({
        url:page_url.save_url,
        data:{"image":image},
        type:"POST",
        dataType:"json",
        beforeSend: function() { },
        error: function() {
            layer.alert("服务器超时，请稍后再试",{icon:2,time:1000});
            is_submit=0;
        },
        success:function(data){
            if(data.ok==200){
                layer.alert(data.info,{icon:1,time:1000});
                setInterval(function(){ location.href=page_url.list_url; },1000);
            }else{
                layer.alert(data.info,{icon:2,time:1000});
            }
            is_submit=0;
        }
    });
});





