<?php
class AdsIbgUniversalJosServiceAdQueryRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.ibg.UniversalJosService.ad.query";
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
                                    	                   			private $adName;
    	                        
	public function setAdName($adName){
		$this->adName = $adName;
         $this->apiParas["adName"] = $adName;
	}

	public function getAdName(){
	  return $this->adName;
	}

                        	                   			private $campaignType;
    	                        
	public function setCampaignType($campaignType){
		$this->campaignType = $campaignType;
         $this->apiParas["campaignType"] = $campaignType;
	}

	public function getCampaignType(){
	  return $this->campaignType;
	}

                        	                   			private $scenarioType;
    	                        
	public function setScenarioType($scenarioType){
		$this->scenarioType = $scenarioType;
         $this->apiParas["scenarioType"] = $scenarioType;
	}

	public function getScenarioType(){
	  return $this->scenarioType;
	}

                        	                   			private $adGroupName;
    	                        
	public function setAdGroupName($adGroupName){
		$this->adGroupName = $adGroupName;
         $this->apiParas["adGroupName"] = $adGroupName;
	}

	public function getAdGroupName(){
	  return $this->adGroupName;
	}

                        	                   			private $giftFlag;
    	                        
	public function setGiftFlag($giftFlag){
		$this->giftFlag = $giftFlag;
         $this->apiParas["giftFlag"] = $giftFlag;
	}

	public function getGiftFlag(){
	  return $this->giftFlag;
	}

                        	                   			private $campaignId;
    	                        
	public function setCampaignId($campaignId){
		$this->campaignId = $campaignId;
         $this->apiParas["campaignId"] = $campaignId;
	}

	public function getCampaignId(){
	  return $this->campaignId;
	}

                        	                   			private $startDay;
    	                        
	public function setStartDay($startDay){
		$this->startDay = $startDay;
         $this->apiParas["startDay"] = $startDay;
	}

	public function getStartDay(){
	  return $this->startDay;
	}

                        	                   			private $deliveryType;
    	                        
	public function setDeliveryType($deliveryType){
		$this->deliveryType = $deliveryType;
         $this->apiParas["deliveryType"] = $deliveryType;
	}

	public function getDeliveryType(){
	  return $this->deliveryType;
	}

                        	                   			private $packageId;
    	                        
	public function setPackageId($packageId){
		$this->packageId = $packageId;
         $this->apiParas["packageId"] = $packageId;
	}

	public function getPackageId(){
	  return $this->packageId;
	}

                        	                   			private $orderStatusCategory;
    	                        
	public function setOrderStatusCategory($orderStatusCategory){
		$this->orderStatusCategory = $orderStatusCategory;
         $this->apiParas["orderStatusCategory"] = $orderStatusCategory;
	}

	public function getOrderStatusCategory(){
	  return $this->orderStatusCategory;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $mediaType;
    	                        
	public function setMediaType($mediaType){
		$this->mediaType = $mediaType;
         $this->apiParas["mediaType"] = $mediaType;
	}

	public function getMediaType(){
	  return $this->mediaType;
	}

                        	                   			private $adGroupId;
    	                        
	public function setAdGroupId($adGroupId){
		$this->adGroupId = $adGroupId;
         $this->apiParas["adGroupId"] = $adGroupId;
	}

	public function getAdGroupId(){
	  return $this->adGroupId;
	}

                        	                   			private $platform;
    	                        
	public function setPlatform($platform){
		$this->platform = $platform;
         $this->apiParas["platform"] = $platform;
	}

	public function getPlatform(){
	  return $this->platform;
	}

                        	                        	                   			private $adId;
    	                        
	public function setAdId($adId){
		$this->adId = $adId;
         $this->apiParas["adId"] = $adId;
	}

	public function getAdId(){
	  return $this->adId;
	}

                        	                   			private $endDay;
    	                        
	public function setEndDay($endDay){
		$this->endDay = $endDay;
         $this->apiParas["endDay"] = $endDay;
	}

	public function getEndDay(){
	  return $this->endDay;
	}

                        	                   			private $clickOrOrderDay;
    	                        
	public function setClickOrOrderDay($clickOrOrderDay){
		$this->clickOrOrderDay = $clickOrOrderDay;
         $this->apiParas["clickOrOrderDay"] = $clickOrOrderDay;
	}

	public function getClickOrOrderDay(){
	  return $this->clickOrOrderDay;
	}

                        	                   			private $isDaily;
    	                        
	public function setIsDaily($isDaily){
		$this->isDaily = $isDaily;
         $this->apiParas["isDaily"] = $isDaily;
	}

	public function getIsDaily(){
	  return $this->isDaily;
	}

                        	                   			private $siteId;
    	                        
	public function setSiteId($siteId){
		$this->siteId = $siteId;
         $this->apiParas["siteId"] = $siteId;
	}

	public function getSiteId(){
	  return $this->siteId;
	}

                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $clickOrOrderCaliber;
    	                        
	public function setClickOrOrderCaliber($clickOrOrderCaliber){
		$this->clickOrOrderCaliber = $clickOrOrderCaliber;
         $this->apiParas["clickOrOrderCaliber"] = $clickOrOrderCaliber;
	}

	public function getClickOrOrderCaliber(){
	  return $this->clickOrOrderCaliber;
	}

                        	                   			private $interactiveType;
    	                        
	public function setInteractiveType($interactiveType){
		$this->interactiveType = $interactiveType;
         $this->apiParas["interactiveType"] = $interactiveType;
	}

	public function getInteractiveType(){
	  return $this->interactiveType;
	}

                        	                   			private $businessType;
    	                        
	public function setBusinessType($businessType){
		$this->businessType = $businessType;
         $this->apiParas["businessType"] = $businessType;
	}

	public function getBusinessType(){
	  return $this->businessType;
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

                        	                        	                        	                        	                        	                   			private $deliverySystemType;
    	                        
	public function setDeliverySystemType($deliverySystemType){
		$this->deliverySystemType = $deliverySystemType;
         $this->apiParas["deliverySystemType"] = $deliverySystemType;
	}

	public function getDeliverySystemType(){
	  return $this->deliverySystemType;
	}

                        	                   			private $jdMediaUserId;
    	                        
	public function setJdMediaUserId($jdMediaUserId){
		$this->jdMediaUserId = $jdMediaUserId;
         $this->apiParas["jdMediaUserId"] = $jdMediaUserId;
	}

	public function getJdMediaUserId(){
	  return $this->jdMediaUserId;
	}

                        	                   			private $granularity;
    	                        
	public function setGranularity($granularity){
		$this->granularity = $granularity;
         $this->apiParas["granularity"] = $granularity;
	}

	public function getGranularity(){
	  return $this->granularity;
	}

                        	                   			private $isDownload;
    	                        
	public function setIsDownload($isDownload){
		$this->isDownload = $isDownload;
         $this->apiParas["isDownload"] = $isDownload;
	}

	public function getIsDownload(){
	  return $this->isDownload;
	}

                        	                   			private $reportName;
    	                        
	public function setReportName($reportName){
		$this->reportName = $reportName;
         $this->apiParas["reportName"] = $reportName;
	}

	public function getReportName(){
	  return $this->reportName;
	}

                        	                   			private $creativeType;
    	                        
	public function setCreativeType($creativeType){
		$this->creativeType = $creativeType;
         $this->apiParas["creativeType"] = $creativeType;
	}

	public function getCreativeType(){
	  return $this->creativeType;
	}

                        	                   			private $type;
    	                        
	public function setType($type){
		$this->type = $type;
         $this->apiParas["type"] = $type;
	}

	public function getType(){
	  return $this->type;
	}

                        	                   			private $columns;
    	                        
	public function setColumns($columns){
		$this->columns = $columns;
         $this->apiParas["columns"] = $columns;
	}

	public function getColumns(){
	  return $this->columns;
	}

                        	                        	}





        
 

