<?php
class JtkDataOpenRefundOrdersRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jtk.dataOpen.refundOrders";
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
                                                        		                                    	                   			private $operatorPin;
    	                        
	public function setOperatorPin($operatorPin){
		$this->operatorPin = $operatorPin;
         $this->apiParas["operatorPin"] = $operatorPin;
	}

	public function getOperatorPin(){
	  return $this->operatorPin;
	}

                        	                        	                   			private $appKey;
    	                        
	public function setAppKey($appKey){
		$this->appKey = $appKey;
         $this->apiParas["appKey"] = $appKey;
	}

	public function getAppKey(){
	  return $this->appKey;
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

                        	                                                                        		                                    	                   			private $endCptDay;
    	                        
	public function setEndCptDay($endCptDay){
		$this->endCptDay = $endCptDay;
         $this->apiParas["endCptDay"] = $endCptDay;
	}

	public function getEndCptDay(){
	  return $this->endCptDay;
	}

                        	                   			private $pageIndex;
    	                        
	public function setPageIndex($pageIndex){
		$this->pageIndex = $pageIndex;
         $this->apiParas["pageIndex"] = $pageIndex;
	}

	public function getPageIndex(){
	  return $this->pageIndex;
	}

                        	                   			private $endBackDay;
    	                        
	public function setEndBackDay($endBackDay){
		$this->endBackDay = $endBackDay;
         $this->apiParas["endBackDay"] = $endBackDay;
	}

	public function getEndBackDay(){
	  return $this->endBackDay;
	}

                        	                   			private $startCptDay;
    	                        
	public function setStartCptDay($startCptDay){
		$this->startCptDay = $startCptDay;
         $this->apiParas["startCptDay"] = $startCptDay;
	}

	public function getStartCptDay(){
	  return $this->startCptDay;
	}

                        	                   			private $startBackDay;
    	                        
	public function setStartBackDay($startBackDay){
		$this->startBackDay = $startBackDay;
         $this->apiParas["startBackDay"] = $startBackDay;
	}

	public function getStartBackDay(){
	  return $this->startBackDay;
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





        
 

