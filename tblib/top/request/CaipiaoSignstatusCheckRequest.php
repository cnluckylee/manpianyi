<?php
/**
 * TOP API: taobao.caipiao.signstatus.check request
 * 
 * @author auto create
 * @since 1.0, 2014-02-13 12:53:56
 */
class CaipiaoSignstatusCheckRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.caipiao.signstatus.check";
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
