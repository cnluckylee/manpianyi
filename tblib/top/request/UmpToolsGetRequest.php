<?php
/**
 * TOP API: taobao.ump.tools.get request
 * 
 * @author auto create
 * @since 1.0, 2014-02-13 12:53:56
 */
class UmpToolsGetRequest
{
	/** 
	 * 工具编码
	 **/
	private $toolCode;
	
	private $apiParas = array();
	
	public function setToolCode($toolCode)
	{
		$this->toolCode = $toolCode;
		$this->apiParas["tool_code"] = $toolCode;
	}

	public function getToolCode()
	{
		return $this->toolCode;
	}

	public function getApiMethodName()
	{
		return "taobao.ump.tools.get";
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
