<?php
class DmpCommonCrowdQueryRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dmp.common.crowd.query";
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
                                    	                   			private $adGroupAdType;
    	                        
	public function setAdGroupAdType($adGroupAdType){
		$this->adGroupAdType = $adGroupAdType;
         $this->apiParas["adGroupAdType"] = $adGroupAdType;
	}

	public function getAdGroupAdType(){
	  return $this->adGroupAdType;
	}

                        	                   			private $adGroupBidPrice;
    	                        
	public function setAdGroupBidPrice($adGroupBidPrice){
		$this->adGroupBidPrice = $adGroupBidPrice;
         $this->apiParas["adGroupBidPrice"] = $adGroupBidPrice;
	}

	public function getAdGroupBidPrice(){
	  return $this->adGroupBidPrice;
	}

                        	                   			private $adGroupBillingType;
    	                        
	public function setAdGroupBillingType($adGroupBillingType){
		$this->adGroupBillingType = $adGroupBillingType;
         $this->apiParas["adGroupBillingType"] = $adGroupBillingType;
	}

	public function getAdGroupBillingType(){
	  return $this->adGroupBillingType;
	}

                        	                   			private $adGroupId;
    	                        
	public function setAdGroupId($adGroupId){
		$this->adGroupId = $adGroupId;
         $this->apiParas["adGroupId"] = $adGroupId;
	}

	public function getAdGroupId(){
	  return $this->adGroupId;
	}

                        	                   			private $businessType;
    	                        
	public function setBusinessType($businessType){
		$this->businessType = $businessType;
         $this->apiParas["businessType"] = $businessType;
	}

	public function getBusinessType(){
	  return $this->businessType;
	}

                        	                   			private $crowdName;
    	                        
	public function setCrowdName($crowdName){
		$this->crowdName = $crowdName;
         $this->apiParas["crowdName"] = $crowdName;
	}

	public function getCrowdName(){
	  return $this->crowdName;
	}

                        	                   			private $crowdTabType;
    	                        
	public function setCrowdTabType($crowdTabType){
		$this->crowdTabType = $crowdTabType;
         $this->apiParas["crowdTabType"] = $crowdTabType;
	}

	public function getCrowdTabType(){
	  return $this->crowdTabType;
	}

                        	                   			private $firstSenceCategory;
    	                        
	public function setFirstSenceCategory($firstSenceCategory){
		$this->firstSenceCategory = $firstSenceCategory;
         $this->apiParas["firstSenceCategory"] = $firstSenceCategory;
	}

	public function getFirstSenceCategory(){
	  return $this->firstSenceCategory;
	}

                        	                   			private $pageIndex;
    	                        
	public function setPageIndex($pageIndex){
		$this->pageIndex = $pageIndex;
         $this->apiParas["pageIndex"] = $pageIndex;
	}

	public function getPageIndex(){
	  return $this->pageIndex;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $secondSenceCategory;
    	                        
	public function setSecondSenceCategory($secondSenceCategory){
		$this->secondSenceCategory = $secondSenceCategory;
         $this->apiParas["secondSenceCategory"] = $secondSenceCategory;
	}

	public function getSecondSenceCategory(){
	  return $this->secondSenceCategory;
	}

                        	                   			private $resourcesList;
    	                        
	public function setResourcesList($resourcesList){
		$this->resourcesList = $resourcesList;
         $this->apiParas["resourcesList"] = $resourcesList;
	}

	public function getResourcesList(){
	  return $this->resourcesList;
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

                        	                        	                        	                        	                        	}





        
 

