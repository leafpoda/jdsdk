<?php
class PopTaurusQueryCouponListByConditionRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.taurus.queryCouponListByCondition";
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

    private  $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
                                                        		                                    	                   			private $businessBeginTime;
    	                        
	public function setBusinessBeginTime($businessBeginTime){
		$this->businessBeginTime = $businessBeginTime;
         $this->apiParas["businessBeginTime"] = $businessBeginTime;
	}

	public function getBusinessBeginTime(){
	  return $this->businessBeginTime;
	}

                        	                   			private $dateType;
    	                        
	public function setDateType($dateType){
		$this->dateType = $dateType;
         $this->apiParas["dateType"] = $dateType;
	}

	public function getDateType(){
	  return $this->dateType;
	}

                        	                        	                   			private $endDate;
    	                        
	public function setEndDate($endDate){
		$this->endDate = $endDate;
         $this->apiParas["endDate"] = $endDate;
	}

	public function getEndDate(){
	  return $this->endDate;
	}

                        	                   			private $settlementStatus;
    	                        
	public function setSettlementStatus($settlementStatus){
		$this->settlementStatus = $settlementStatus;
         $this->apiParas["settlementStatus"] = $settlementStatus;
	}

	public function getSettlementStatus(){
	  return $this->settlementStatus;
	}

                        	                                                 	                        	                                                                                                                                                                                                                                                                                                               private $orderId;
                              public function setOrderId($orderId ){
                 $this->orderId=$orderId;
                 $this->apiParas["orderId"] = $orderId;
              }

              public function getOrderId(){
              	return $this->orderId;
              }
                                                                                                                                        	                   			private $businessEndTime;
    	                        
	public function setBusinessEndTime($businessEndTime){
		$this->businessEndTime = $businessEndTime;
         $this->apiParas["businessEndTime"] = $businessEndTime;
	}

	public function getBusinessEndTime(){
	  return $this->businessEndTime;
	}

                        	                   			private $startDate;
    	                        
	public function setStartDate($startDate){
		$this->startDate = $startDate;
         $this->apiParas["startDate"] = $startDate;
	}

	public function getStartDate(){
	  return $this->startDate;
	}

                            }





        
 

