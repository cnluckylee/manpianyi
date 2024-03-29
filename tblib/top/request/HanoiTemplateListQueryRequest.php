<?php
/**
 * TOP API: taobao.hanoi.template.list.query request
 * 
 * @author auto create
 * @since 1.0, 2014-02-13 12:53:56
 */
class HanoiTemplateListQueryRequest
{
	/** 
	 * 认证信息
	 **/
	private $appName;
	
	/** 
	 * 模板业务状态 1 审核 0 创建
	 **/
	private $bizStatus;
	
	/** 
	 * 创建者id
	 **/
	private $creater;
	
	/** 
	 * 当前页、默认为1
	 **/
	private $currentPage;
	
	/** 
	 * 所使用的数据模板
	 **/
	private $dataTemplateId;
	
	/** 
	 * 根据时间查询 创建时间结束点
	 **/
	private $gmtCreateEnd;
	
	/** 
	 * 根据时间查询 创建时间截止点
	 **/
	private $gmtCreateStart;
	
	/** 
	 * 根据时间查询，最近修改时间截止
	 **/
	private $gmtModifiedEnd;
	
	/** 
	 * 根据时间查询，最近修改时间起点
	 **/
	private $gmtModifiedStart;
	
	/** 
	 * 模板id
	 **/
	private $id;
	
	/** 
	 * 是否查询总数，默认false
	 **/
	private $isTotal;
	
	/** 
	 * 模板名称
	 **/
	private $name;
	
	/** 
	 * 模板的开放策略
	 **/
	private $open;
	
	/** 
	 * 分页查询，默认20
	 **/
	private $pagesize;
	
	/** 
	 * 源模板id
	 **/
	private $sourceTemplateId;
	
	/** 
	 * 模板编码
	 **/
	private $templateCode;
	
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

	public function setBizStatus($bizStatus)
	{
		$this->bizStatus = $bizStatus;
		$this->apiParas["biz_status"] = $bizStatus;
	}

	public function getBizStatus()
	{
		return $this->bizStatus;
	}

	public function setCreater($creater)
	{
		$this->creater = $creater;
		$this->apiParas["creater"] = $creater;
	}

	public function getCreater()
	{
		return $this->creater;
	}

	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
	}

	public function setDataTemplateId($dataTemplateId)
	{
		$this->dataTemplateId = $dataTemplateId;
		$this->apiParas["data_template_id"] = $dataTemplateId;
	}

	public function getDataTemplateId()
	{
		return $this->dataTemplateId;
	}

	public function setGmtCreateEnd($gmtCreateEnd)
	{
		$this->gmtCreateEnd = $gmtCreateEnd;
		$this->apiParas["gmt_create_end"] = $gmtCreateEnd;
	}

	public function getGmtCreateEnd()
	{
		return $this->gmtCreateEnd;
	}

	public function setGmtCreateStart($gmtCreateStart)
	{
		$this->gmtCreateStart = $gmtCreateStart;
		$this->apiParas["gmt_create_start"] = $gmtCreateStart;
	}

	public function getGmtCreateStart()
	{
		return $this->gmtCreateStart;
	}

	public function setGmtModifiedEnd($gmtModifiedEnd)
	{
		$this->gmtModifiedEnd = $gmtModifiedEnd;
		$this->apiParas["gmt_modified_end"] = $gmtModifiedEnd;
	}

	public function getGmtModifiedEnd()
	{
		return $this->gmtModifiedEnd;
	}

	public function setGmtModifiedStart($gmtModifiedStart)
	{
		$this->gmtModifiedStart = $gmtModifiedStart;
		$this->apiParas["gmt_modified_start"] = $gmtModifiedStart;
	}

	public function getGmtModifiedStart()
	{
		return $this->gmtModifiedStart;
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

	public function setIsTotal($isTotal)
	{
		$this->isTotal = $isTotal;
		$this->apiParas["is_total"] = $isTotal;
	}

	public function getIsTotal()
	{
		return $this->isTotal;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setOpen($open)
	{
		$this->open = $open;
		$this->apiParas["open"] = $open;
	}

	public function getOpen()
	{
		return $this->open;
	}

	public function setPagesize($pagesize)
	{
		$this->pagesize = $pagesize;
		$this->apiParas["pagesize"] = $pagesize;
	}

	public function getPagesize()
	{
		return $this->pagesize;
	}

	public function setSourceTemplateId($sourceTemplateId)
	{
		$this->sourceTemplateId = $sourceTemplateId;
		$this->apiParas["source_template_id"] = $sourceTemplateId;
	}

	public function getSourceTemplateId()
	{
		return $this->sourceTemplateId;
	}

	public function setTemplateCode($templateCode)
	{
		$this->templateCode = $templateCode;
		$this->apiParas["template_code"] = $templateCode;
	}

	public function getTemplateCode()
	{
		return $this->templateCode;
	}

	public function getApiMethodName()
	{
		return "taobao.hanoi.template.list.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appName,"appName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
