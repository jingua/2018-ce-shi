<?php
namespace app\admin\validate;
use think\Validate;
class Category extends Validate{

	/*编写验证规则*/
	protected $rule = [
		['category_name','require|max:1000','分类不能为空|分类不能超过10个字符'],
		['category_parent_id','number'],
		['category_id','number'],
		['category_status','number|in:1,2,3','状态必须是数字|状态码不合法'],
		['category_sort','number'],
	];

	/*设置场景*/
	protected $scene = [
		'add' => ['category_name','category_parent_id','category_id'],
		'sort' => ['category_sort','category_id'],
		'status' => ['category_id','category_status'],
	];

}
?>