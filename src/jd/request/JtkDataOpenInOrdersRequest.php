<?php
class JtkDataOpenInOrdersRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jtk.dataOpen.inOrders";
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

                        	                        	                   			private $appKey;
    	                        
	public function setAppKey($appKey){
		$this->appKey = $appKey;
         $this->apiParas["appKey"] = $appKey;
	}

	public function getAppKey(){
	  return $this->appKey;
	}

                        	                   			private $operatorPin;
    	                        
	public function setOperatorPin($operatorPin){
		$this->operatorPin = $operatorPin;
         $this->apiParas["operatorPin"] = $operatorPin;
	}

	public function getOperatorPin(){
	  return $this->operatorPin;
	}

                                                                        		                                    	                   			private $orderTimeFlag;
    	                        
	public function setOrderTimeFlag($orderTimeFlag){
		$this->orderTimeFlag = $orderTimeFlag;
         $this->apiParas["orderTimeFlag"] = $orderTimeFlag;
	}

	public function getOrderTimeFlag(){
	  return $this->orderTimeFlag;
	}

                        	                   			private $cptTimeFlag;
    	                        
	public function setCptTimeFlag($cptTimeFlag){
		$this->cptTimeFlag = $cptTimeFlag;
         $this->apiParas["cptTimeFlag"] = $cptTimeFlag;
	}

	public function getCptTimeFlag(){
	  return $this->cptTimeFlag;
	}

                        	                   			private $orderStartDate;
    	                        
	public function setOrderStartDate($orderStartDate){
		$this->orderStartDate = $orderStartDate;
         $this->apiParas["orderStartDate"] = $orderStartDate;
	}

	public function getOrderStartDate(){
	  return $this->orderStartDate;
	}

                        	                   			private $orderEndDate;
    	                        
	public function setOrderEndDate($orderEndDate){
		$this->orderEndDate = $orderEndDate;
         $this->apiParas["orderEndDate"] = $orderEndDate;
	}

	public function getOrderEndDate(){
	  return $this->orderEndDate;
	}

                        	                   			private $cptStartDate;
    	                        
	public function setCptStartDate($cptStartDate){
		$this->cptStartDate = $cptStartDate;
         $this->apiParas["cptStartDate"] = $cptStartDate;
	}

	public function getCptStartDate(){
	  return $this->cptStartDate;
	}

                        	                   			private $cptEndDate;
    	                        
	public function setCptEndDate($cptEndDate){
		$this->cptEndDate = $cptEndDate;
         $this->apiParas["cptEndDate"] = $cptEndDate;
	}

	public function getCptEndDate(){
	  return $this->cptEndDate;
	}

                        	                   			private $orderType;
    	                        
	public function setOrderType($orderType){
		$this->orderType = $orderType;
         $this->apiParas["orderType"] = $orderType;
	}

	public function getOrderType(){
	  return $this->orderType;
	}

                        	                   			private $channel;
    	                        
	public function setChannel($channel){
		$this->channel = $channel;
         $this->apiParas["channel"] = $channel;
	}

	public function getChannel(){
	  return $this->channel;
	}

                        	                   			private $valid;
    	                        
	public function setValid($valid){
		$this->valid = $valid;
         $this->apiParas["valid"] = $valid;
	}

	public function getValid(){
	  return $this->valid;
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

                            }





        
 

