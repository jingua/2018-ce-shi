/*添加数据缩小的屏幕*/
function o2o_s_add(title,url,w,h){
	layer_show(title,url,w,h)
}

/*分类排序*/
$(".category_sorts input").blur(function(){
	var category_id = $(this).attr('attr-id');
	var category_sort = $(this).val();
	var postData = {
		category_id : category_id,
		category_sort : category_sort,
	}
	var url = sort_url.category_url;
	$.post(url,postData,function(result){
		if(result.code == 200){
			location.href = result.data;
		}else{
			location.href = result.data;
		}
	},"json");
});

/*删除*/
function o2o_del(url){
	layer.confirm('确定要删除吗',function(index){
		window.location.href=url
	});
}

/* 根据一级城市，切换二级城市*/
$(".cityId").change(function(){
	city_id = $(this).val();
	url = SCOPE.city_url;
	postData = {'city_id':city_id};
	$.post(url,postData,function(result){
		if(result.status == 200){
			data = result.data;
			city_html = '';
			$(data).each(function(i){
				city_html += "<option value='"+this.city_id+"'>"+this.city_name+"</option>";
			});
			$(".city_parent_id").html(city_html);
		}else if(result.status == 201){
			$(".city_parent_id").html('');
		}
	},'json');
});

/**分类相关二级内容**/
$(".categoryId").change(function(){
    category_id = $(this).val();
    // 抛送请求
    url = SCOPE.category_url;
    postData = {'category_id':category_id};
    $.post(url,postData,function(result){
        //相关的业务处理
        if(result.status == 200) {
            data = result.data;
            category_html = "";
            $(data).each(function(i){
                category_html += '<input name="se_category_id[]" type="checkbox" id="checkbox-moban" value="'+this.category_id+'"/>'+this.category_name;
                category_html += '<label for="checkbox-moban">&nbsp;</label>&nbsp;&nbsp;&nbsp;&nbsp;';
            });
            $('.se_category_id').html(category_html);
        }else if(result.status == 201) {
            $('.se_category_id').html('');
        }
    }, 'json');
});