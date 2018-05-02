<?php
namespace app\api\controller;
use think\Controller;
class Category extends Controller
{
    private  $obj;
    public function _initialize() {
        $this->obj = model("Category");
    }
    public function get_category_two() {
        $category_id = input('post.category_id',0, 'intval');
        if(!$category_id) {
            $this->error('ID不合法');
        }
        // 通过id获取二级城市
        $categorys = $this->obj->get_category($category_id);
        if(!$categorys) {
            return show(201,'error');
        }
        return show(200,'success', $categorys);
    }

}
