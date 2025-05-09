<?php
class AdsIbgUniversalJosServiceCpdMaterialRequest
{


	private $apiParas = array();

	public function getApiMethodName(){
	  return "jingdong.ads.ibg.UniversalJosService.cpd.material";
	}

	public function getApiParas(){
	    if(empty($this->apiParas)){
            return "{}";
        }
        return json_encode($this->apiParas);
	}

	public function check(){

	}

	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
                                    	                        	                        	                        	                        	                        	                        	                   			private $authType;

	public function setAuthType($authType){
		$this->authType = $authType;
         $this->apiParas["authType"] = $authType;
	}

	public function getAuthType(){
	  return $this->authType;
	}

                        	                   			private $accessPin;

	public function setAccessPin($accessPin){
		$this->accessPin = $accessPin;
         $this->apiParas["accessPin"] = $accessPin;
	}

	public function getAccessPin(){
	  return $this->accessPin;
	}

                        	                   			private $clickOrOrderDay;

	public function setClickOrOrderDay($clickOrOrderDay){
		$this->clickOrOrderDay = $clickOrOrderDay;
         $this->apiParas["clickOrOrderDay"] = $clickOrOrderDay;
	}

	public function getClickOrOrderDay(){
	  return $this->clickOrOrderDay;
	}

                        	                   			private $clickOrOrderCaliber;

	public function setClickOrOrderCaliber($clickOrOrderCaliber){
		$this->clickOrOrderCaliber = $clickOrOrderCaliber;
         $this->apiParas["clickOrOrderCaliber"] = $clickOrOrderCaliber;
	}

	public function getClickOrOrderCaliber(){
	  return $this->clickOrOrderCaliber;
	}

                        	                   			private $startDay;

	public function setStartDay($startDay){
		$this->startDay = $startDay;
         $this->apiParas["startDay"] = $startDay;
	}

	public function getStartDay(){
	  return $this->startDay;
	}

                        	                   			private $endDay;

	public function setEndDay($endDay){
		$this->endDay = $endDay;
         $this->apiParas["endDay"] = $endDay;
	}

	public function getEndDay(){
	  return $this->endDay;
	}

                        	                   			private $campaignType;

	public function setCampaignType($campaignType){
		$this->campaignType = $campaignType;
         $this->apiParas["campaignType"] = $campaignType;
	}

	public function getCampaignType(){
	  return $this->campaignType;
	}

                        	                   			private $page;

	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $pageSize;

	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $isDaily;

	public function setIsDaily($isDaily){
		$this->isDaily = $isDaily;
         $this->apiParas["isDaily"] = $isDaily;
	}

	public function getIsDaily(){
	  return $this->isDaily;
	}

                        	                   			private $isDownload;

	public function setIsDownload($isDownload){
		$this->isDownload = $isDownload;
         $this->apiParas["isDownload"] = $isDownload;
	}

	public function getIsDownload(){
	  return $this->isDownload;
	}

                        	                   			private $orderIds;

	public function setOrderIds($orderIds){
		$this->orderIds = $orderIds;
         $this->apiParas["orderIds"] = $orderIds;
	}

	public function getOrderIds(){
	  return $this->orderIds;
	}

                        	                   			private $scheduleIds;

	public function setScheduleIds($scheduleIds){
		$this->scheduleIds = $scheduleIds;
         $this->apiParas["scheduleIds"] = $scheduleIds;
	}

	public function getScheduleIds(){
	  return $this->scheduleIds;
	}

                        	                   			private $posIds;

	public function setPosIds($posIds){
		$this->posIds = $posIds;
         $this->apiParas["posIds"] = $posIds;
	}

	public function getPosIds(){
	  return $this->posIds;
	}

                        	                   			private $materialIds;

	public function setMaterialIds($materialIds){
		$this->materialIds = $materialIds;
         $this->apiParas["materialIds"] = $materialIds;
	}

	public function getMaterialIds(){
	  return $this->materialIds;
	}

                        	                   			private $isImage;

	public function setIsImage($isImage){
		$this->isImage = $isImage;
         $this->apiParas["isImage"] = $isImage;
	}

	public function getIsImage(){
	  return $this->isImage;
	}

                        	                   			private $orderBy;

	public function setOrderBy($orderBy){
		$this->orderBy = $orderBy;
         $this->apiParas["orderBy"] = $orderBy;
	}

	public function getOrderBy(){
	  return $this->orderBy;
	}

                        	                        	}








