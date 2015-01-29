<?php
/**
 * 
 * summary:该类记录所有数组相关帮助方法
 * authur: liliang
 * date: Jan 29, 2015
 */
class ArrayHelper
{
	/**
	 * 按多维数组中指定属性升序排序
	 * 	$tags[]=array("rank"=>1,"name"=>'zhang');
	 * 	$tags[]=array("rank"=>2,"name"=>'sa');
	 * 	$tags[]=array("rank"=>3,"name"=>'sx');
	 *  调用方法：multi_array_sort($tags,'rank');
	 * 
	 */
	public static function multi_array_sort($multi_array,$sort_key,$sort=SORT_ASC){
		if(is_array($multi_array)){
			foreach ($multi_array as $row_array){
				if(is_array($row_array)){
					$key_array[] = $row_array[$sort_key];
				}else{
					return false;
				}
			}
		}else{
			return false;
		}
		array_multisort($key_array,$sort,$multi_array);
		return $multi_array;
	}

}