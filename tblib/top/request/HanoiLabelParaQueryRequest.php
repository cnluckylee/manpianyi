<?php
/**
 * TOP API: taobao.hanoi.label.para.query request
 * 
 * @author auto create
 * @since 1.0, 2014-02-13 12:53:56
 */
class HanoiLabelParaQueryRequest
{
	/** 
	 * 认证信息
	 **/
	private $appName;
	
	/** 
	 * 要删除的标签id
	 **/
	private $id;
	
	private $apiParas = array();
	
	public function setAppName($appName)
	{
		$this->appName = $appName;
		$this->apiParas["app_name"] = $appName;
	}

	public function getAppName()
	{
		return $this->appName;
	}

	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getApiMethodName()
	{
		return "taobao.hanoi.label.para.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appName,"appName");
		RequestCheckUtil::checkNotNull($this->id,"id");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
