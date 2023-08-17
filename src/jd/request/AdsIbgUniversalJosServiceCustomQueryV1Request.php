<?php
class AdsIbgUniversalJosServiceCustomQueryV1Request
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.ibg.UniversalJosService.custom.query.v1";
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

                        	                   			private $granularity;
    	                        
	public function setGranularity($granularity){
		$this->granularity = $granularity;
         $this->apiParas["granularity"] = $granularity;
	}

	public function getGranularity(){
	  return $this->granularity;
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

                        	                   			private $pins;
    	                        
	public function setPins($pins){
		$this->pins = $pins;
         $this->apiParas["pins"] = $pins;
	}

	public function getPins(){
	  return $this->pins;
	}

                        	                   			private $dimensions;
    	                        
	public function setDimensions($dimensions){
		$this->dimensions = $dimensions;
         $this->apiParas["dimensions"] = $dimensions;
	}

	public function getDimensions(){
	  return $this->dimensions;
	}

                        	                   			private $normalMetrics;
    	                        
	public function setNormalMetrics($normalMetrics){
		$this->normalMetrics = $normalMetrics;
         $this->apiParas["normalMetrics"] = $normalMetrics;
	}

	public function getNormalMetrics(){
	  return $this->normalMetrics;
	}

                        	                   			private $orderDetailMetrics;
    	                        
	public function setOrderDetailMetrics($orderDetailMetrics){
		$this->orderDetailMetrics = $orderDetailMetrics;
         $this->apiParas["orderDetailMetrics"] = $orderDetailMetrics;
	}

	public function getOrderDetailMetrics(){
	  return $this->orderDetailMetrics;
	}

                        	                   			private $customFilters;
    	                        
	public function setCustomFilters($customFilters){
		$this->customFilters = $customFilters;
         $this->apiParas["customFilters"] = $customFilters;
	}

	public function getCustomFilters(){
	  return $this->customFilters;
	}

                        	                   			private $customOrders;
    	                        
	public function setCustomOrders($customOrders){
		$this->customOrders = $customOrders;
         $this->apiParas["customOrders"] = $customOrders;
	}

	public function getCustomOrders(){
	  return $this->customOrders;
	}

                        	                   			private $isDownload;
    	                        
	public function setIsDownload($isDownload){
		$this->isDownload = $isDownload;
         $this->apiParas["isDownload"] = $isDownload;
	}

	public function getIsDownload(){
	  return $this->isDownload;
	}

                        	                        	                        	}





        
 

