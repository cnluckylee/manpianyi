<?php

class Tools 
{
	/**
	 * 获取参数
	 */
	public static function getParam($name,$default='',$method='get')
	{
		if($method == 'post')
			$var = filter_input(INPUT_POST, $name, FILTER_SANITIZE_SPECIAL_CHARS);
		else 
			$var = filter_input(INPUT_GET, $name, FILTER_SANITIZE_SPECIAL_CHARS);
		if(is_null($var))
			$var = $default;
		return $var;
	}
	
	/**
	 * 商品分类
	 */
	public static function Category($cid=null)
	{
		$category = array(1=>'服装',2=>'母婴',3=>'鞋包',4=>'美妆');
		return $cid?$category[$cid]:$category;
	}
	/*
	 * bigint型
	 */
	public static function bigintval($value) {
		$value = trim($value);
		if (ctype_digit($value)) {
			return $value;
		}
		$value = preg_replace("/[^0-9](.*)$/", '', $value);
		if (ctype_digit($value)) {
			return $value;
		}
		return 0;
	}
}
