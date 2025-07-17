<?php
class AdsIbgUniversalJosServiceZwggAccountQueryRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.ibg.UniversalJosService.zwgg.account.query";
	}
	
	public function getApiParas(){
	    if(empty($this->apiParas)){
            return "{}";
        }
        return $this->apiParas;
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
                                    	                   			private $accessPin;
    	                        
	public function setAccessPin($accessPin){
		$this->accessPin = $accessPin;
         $this->apiParas["accessPin"] = $accessPin;
	}

	public function getAccessPin(){
	  return $this->accessPin;
	}

                        	                        	                        	                        	                   			private $authType;
    	                        
	public function setAuthType($authType){
		$this->authType = $authType;
         $this->apiParas["authType"] = $authType;
	}

	public function getAuthType(){
	  return $this->authType;
	}

                        	                        	                        	                        	                        	                   			private $dimension;
    	                        
	public function setDimension($dimension){
		$this->dimension = $dimension;
         $this->apiParas["dimension"] = $dimension;
	}

	public function getDimension(){
	  return $this->dimension;
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

                        	                   			private $orderStatusCategory;
    	                        
	public function setOrderStatusCategory($orderStatusCategory){
		$this->orderStatusCategory = $orderStatusCategory;
         $this->apiParas["orderStatusCategory"] = $orderStatusCategory;
	}

	public function getOrderStatusCategory(){
	  return $this->orderStatusCategory;
	}

                        	                   			private $giftFlag;
    	                        
	public function setGiftFlag($giftFlag){
		$this->giftFlag = $giftFlag;
         $this->apiParas["giftFlag"] = $giftFlag;
	}

	public function getGiftFlag(){
	  return $this->giftFlag;
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

                        	                   			private $granularity;
    	                        
	public function setGranularity($granularity){
		$this->granularity = $granularity;
         $this->apiParas["granularity"] = $granularity;
	}

	public function getGranularity(){
	  return $this->granularity;
	}

                        	                   			private $mediaType;
    	                        
	public function setMediaType($mediaType){
		$this->mediaType = $mediaType;
         $this->apiParas["mediaType"] = $mediaType;
	}

	public function getMediaType(){
	  return $this->mediaType;
	}

                        	                   			private $jdMediaUserIds;
    	                        
	public function setJdMediaUserIds($jdMediaUserIds){
		$this->jdMediaUserIds = $jdMediaUserIds;
         $this->apiParas["jdMediaUserIds"] = $jdMediaUserIds;
	}

	public function getJdMediaUserIds(){
	  return $this->jdMediaUserIds;
	}

                        	                   			private $campaignIds;
    	                        
	public function setCampaignIds($campaignIds){
		$this->campaignIds = $campaignIds;
         $this->apiParas["campaignIds"] = $campaignIds;
	}

	public function getCampaignIds(){
	  return $this->campaignIds;
	}

                        	                   			private $adGroupIds;
    	                        
	public function setAdGroupIds($adGroupIds){
		$this->adGroupIds = $adGroupIds;
         $this->apiParas["adGroupIds"] = $adGroupIds;
	}

	public function getAdGroupIds(){
	  return $this->adGroupIds;
	}

                        	                   			private $adIds;
    	                        
	public function setAdIds($adIds){
		$this->adIds = $adIds;
         $this->apiParas["adIds"] = $adIds;
	}

	public function getAdIds(){
	  return $this->adIds;
	}

                        	                   			private $jdMids;
    	                        
	public function setJdMids($jdMids){
		$this->jdMids = $jdMids;
         $this->apiParas["jdMids"] = $jdMids;
	}

	public function getJdMids(){
	  return $this->jdMids;
	}

                        	                   			private $materialElementTypes;
    	                        
	public function setMaterialElementTypes($materialElementTypes){
		$this->materialElementTypes = $materialElementTypes;
         $this->apiParas["materialElementTypes"] = $materialElementTypes;
	}

	public function getMaterialElementTypes(){
	  return $this->materialElementTypes;
	}

                        	                   			private $isNewTencent;
    	                        
	public function setIsNewTencent($isNewTencent){
		$this->isNewTencent = $isNewTencent;
         $this->apiParas["isNewTencent"] = $isNewTencent;
	}

	public function getIsNewTencent(){
	  return $this->isNewTencent;
	}

                        	                   			private $deliveryTargets;
    	                        
	public function setDeliveryTargets($deliveryTargets){
		$this->deliveryTargets = $deliveryTargets;
         $this->apiParas["deliveryTargets"] = $deliveryTargets;
	}

	public function getDeliveryTargets(){
	  return $this->deliveryTargets;
	}

                        	                   			private $billingTypes;
    	                        
	public function setBillingTypes($billingTypes){
		$this->billingTypes = $billingTypes;
         $this->apiParas["billingTypes"] = $billingTypes;
	}

	public function getBillingTypes(){
	  return $this->billingTypes;
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

                        	                        	                   			private $isDownload;
    	                        
	public function setIsDownload($isDownload){
		$this->isDownload = $isDownload;
         $this->apiParas["isDownload"] = $isDownload;
	}

	public function getIsDownload(){
	  return $this->isDownload;
	}

                        	                        	                   			private $obys;
    	                        
	public function setObys($obys){
		$this->obys = $obys;
         $this->apiParas["obys"] = $obys;
	}

	public function getObys(){
	  return $this->obys;
	}

                        	                   			private $isNeedJdMediaUserDim;
    	                        
	public function setIsNeedJdMediaUserDim($isNeedJdMediaUserDim){
		$this->isNeedJdMediaUserDim = $isNeedJdMediaUserDim;
         $this->apiParas["isNeedJdMediaUserDim"] = $isNeedJdMediaUserDim;
	}

	public function getIsNeedJdMediaUserDim(){
	  return $this->isNeedJdMediaUserDim;
	}

                        	                   			private $isNeedAdDim;
    	                        
	public function setIsNeedAdDim($isNeedAdDim){
		$this->isNeedAdDim = $isNeedAdDim;
         $this->apiParas["isNeedAdDim"] = $isNeedAdDim;
	}

	public function getIsNeedAdDim(){
	  return $this->isNeedAdDim;
	}

                        	                   			private $reportName;
    	                        
	public function setReportName($reportName){
		$this->reportName = $reportName;
         $this->apiParas["reportName"] = $reportName;
	}

	public function getReportName(){
	  return $this->reportName;
	}

                        	                        	}





        
 

