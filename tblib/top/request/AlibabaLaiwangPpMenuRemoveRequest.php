<?php
/**
 * TOP API: alibaba.laiwang.pp.menu.remove request
 * 
 * @author auto create
 * @since 1.0, 2014-02-13 12:53:56
 */
class AlibabaLaiwangPpMenuRemoveRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "alibaba.laiwang.pp.menu.remove";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
