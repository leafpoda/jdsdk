<?php
class DspPlatformFinanceOpenapiQuerycostdetailsRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.platform.finance.openapi.querycostdetails";
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

                        	                        	                   			private $operatorPin;
    	                        
	public function setOperatorPin($operatorPin){
		$this->operatorPin = $operatorPin;
         $this->apiParas["operatorPin"] = $operatorPin;
	}

	public function getOperatorPin(){
	  return $this->operatorPin;
	}

                        	                        	                                                                        		                                    	                   			private $beginDate;
    	                        
	public function setBeginDate($beginDate){
		$this->beginDate = $beginDate;
         $this->apiParas["beginDate"] = $beginDate;
	}

	public function getBeginDate(){
	  return $this->beginDate;
	}

                        	                   			private $endDate;
    	                        
	public function setEndDate($endDate){
		$this->endDate = $endDate;
         $this->apiParas["endDate"] = $endDate;
	}

	public function getEndDate(){
	  return $this->endDate;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $orderType;
                              public function setOrderType($orderType ){
                 $this->orderType=$orderType;
                 $this->apiParas["orderType"] = $orderType;
              }

              public function getOrderType(){
              	return $this->orderType;
              }
                                                                                                                                        	                   			private $pageNo;
    	                        
	public function setPageNo($pageNo){
		$this->pageNo = $pageNo;
         $this->apiParas["pageNo"] = $pageNo;
	}

	public function getPageNo(){
	  return $this->pageNo;
	}

                        	                   			private $moneyType;
    	                        
	public function setMoneyType($moneyType){
		$this->moneyType = $moneyType;
         $this->apiParas["moneyType"] = $moneyType;
	}

	public function getMoneyType(){
	  return $this->moneyType;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $subPin;
    	                        
	public function setSubPin($subPin){
		$this->subPin = $subPin;
         $this->apiParas["subPin"] = $subPin;
	}

	public function getSubPin(){
	  return $this->subPin;
	}

                            }





        
 

