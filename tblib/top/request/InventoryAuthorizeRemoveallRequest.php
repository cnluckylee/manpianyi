<?php
/**
 * TOP API: taobao.inventory.authorize.removeall request
 * 
 * @author auto create
 * @since 1.0, 2014-02-13 12:53:56
 */
class InventoryAuthorizeRemoveallRequest
{
	/** 
	 * 后端商品id
	 **/
	private $scItemId;
	
	/** 
	 * 移除授权的目标用户昵称列表，用”,”隔开
	 **/
	private $userNickList;
	
	private $apiParas = array();
	
	public function setScItemId($scItemId)
	{
		$this->scItemId = $scItemId;
		$this->apiParas["sc_item_id"] = $scItemId;
	}

	public function getScItemId()
	{
		return $this->scItemId;
	}

	public function setUserNickList($userNickList)
	{
		$this->userNickList = $userNickList;
		$this->apiParas["user_nick_list"] = $userNickList;
	}

	public function getUserNickList()
	{
		return $this->userNickList;
	}

	public function getApiMethodName()
	{
		return "taobao.inventory.authorize.removeall";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->scItemId,"scItemId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
