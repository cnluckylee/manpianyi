<?php
/**
 * TOP API: taobao.jushita.jdp.user.add request
 * 
 * @author auto create
 * @since 1.0, 2014-02-13 12:53:56
 */
class JushitaJdpUserAddRequest
{
	/** 
	 * RDS实例名称，如果有多个RDS必须设置。
	 **/
	private $rdsName;
	
	private $apiParas = array();
	
	public function setRdsName($rdsName)
	{
		$this->rdsName = $rdsName;
		$this->apiParas["rds_name"] = $rdsName;
	}

	public function getRdsName()
	{
		return $this->rdsName;
	}

	public function getApiMethodName()
	{
		return "taobao.jushita.jdp.user.add";
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
