<?php
class AdsIbgUniversalJosServiceIndustryCompeteAreaRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.ibg.UniversalJosService.industry.compete.area";
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

                        	                        	                        	                        	                        	                        	                        	                   			private $cid3;
    	                        
	public function setCid3($cid3){
		$this->cid3 = $cid3;
         $this->apiParas["cid3"] = $cid3;
	}

	public function getCid3(){
	  return $this->cid3;
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

                        	                   			private $businessTypes;
    	                        
	public function setBusinessTypes($businessTypes){
		$this->businessTypes = $businessTypes;
         $this->apiParas["businessTypes"] = $businessTypes;
	}

	public function getBusinessTypes(){
	  return $this->businessTypes;
	}

                        	                   			private $analyseType;
    	                        
	public function setAnalyseType($analyseType){
		$this->analyseType = $analyseType;
         $this->apiParas["analyseType"] = $analyseType;
	}

	public function getAnalyseType(){
	  return $this->analyseType;
	}

                        	                   			private $selfBrandId;
    	                        
	public function setSelfBrandId($selfBrandId){
		$this->selfBrandId = $selfBrandId;
         $this->apiParas["selfBrandId"] = $selfBrandId;
	}

	public function getSelfBrandId(){
	  return $this->selfBrandId;
	}

                        	                   			private $competeBrandId;
    	                        
	public function setCompeteBrandId($competeBrandId){
		$this->competeBrandId = $competeBrandId;
         $this->apiParas["competeBrandId"] = $competeBrandId;
	}

	public function getCompeteBrandId(){
	  return $this->competeBrandId;
	}

                        	                   			private $scope;
    	                        
	public function setScope($scope){
		$this->scope = $scope;
         $this->apiParas["scope"] = $scope;
	}

	public function getScope(){
	  return $this->scope;
	}

                        	                        	}





        
 

