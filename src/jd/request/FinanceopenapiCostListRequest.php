<?php
class FinanceopenapiCostListRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.financeopenapi.cost.list";
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

                        	                   			private $orderTypes;
    	                        
	public function setOrderTypes($orderTypes){
		$this->orderTypes = $orderTypes;
         $this->apiParas["orderTypes"] = $orderTypes;
	}

	public function getOrderTypes(){
	  return $this->orderTypes;
	}

                        	                   			private $subPin;
    	                        
	public function setSubPin($subPin){
		$this->subPin = $subPin;
         $this->apiParas["subPin"] = $subPin;
	}

	public function getSubPin(){
	  return $this->subPin;
	}

                        	                   			private $moneyType;
    	                        
	public function setMoneyType($moneyType){
		$this->moneyType = $moneyType;
         $this->apiParas["moneyType"] = $moneyType;
	}

	public function getMoneyType(){
	  return $this->moneyType;
	}

                        	                   			private $pageNo;
    	                        
	public function setPageNo($pageNo){
		$this->pageNo = $pageNo;
         $this->apiParas["pageNo"] = $pageNo;
	}

	public function getPageNo(){
	  return $this->pageNo;
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





        
 

