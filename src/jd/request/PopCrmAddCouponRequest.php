<?php
class PopCrmAddCouponRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.crm.addCoupon";
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
                                                        		                                    	                   			private $venderName;
    	                                                            
	public function setVenderName($venderName){
		$this->venderName = $venderName;
         $this->apiParas["vender_name"] = $venderName;
	}

	public function getVenderName(){
	  return $this->venderName;
	}

                        	                   			private $validateDays;
    	                                                            
	public function setValidateDays($validateDays){
		$this->validateDays = $validateDays;
         $this->apiParas["validate_days"] = $validateDays;
	}

	public function getValidateDays(){
	  return $this->validateDays;
	}

                        	                   			private $quota;
    	                        
	public function setQuota($quota){
		$this->quota = $quota;
         $this->apiParas["quota"] = $quota;
	}

	public function getQuota(){
	  return $this->quota;
	}

                        	                        	                   			private $discount;
    	                        
	public function setDiscount($discount){
		$this->discount = $discount;
         $this->apiParas["discount"] = $discount;
	}

	public function getDiscount(){
	  return $this->discount;
	}

                        	                   			private $startTime;
    	                                                            
	public function setStartTime($startTime){
		$this->startTime = $startTime;
         $this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime(){
	  return $this->startTime;
	}

                        	                   			private $shopId;
    	                                                            
	public function setShopId($shopId){
		$this->shopId = $shopId;
         $this->apiParas["shop_id"] = $shopId;
	}

	public function getShopId(){
	  return $this->shopId;
	}

                        	                   			private $endTime;
    	                                                            
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
	}

                        	                   			private $batchCount;
    	                                                            
	public function setBatchCount($batchCount){
		$this->batchCount = $batchCount;
         $this->apiParas["batch_count"] = $batchCount;
	}

	public function getBatchCount(){
	  return $this->batchCount;
	}

                                                                        		                                    	                   			private $mktActivityId;
    	                                                                        
	public function setMktActivityId($mktActivityId){
		$this->mktActivityId = $mktActivityId;
         $this->apiParas["mkt_activity_id"] = $mktActivityId;
	}

	public function getMktActivityId(){
	  return $this->mktActivityId;
	}

                        	                   			private $appKey;
    	                                                            
	public function setAppKey($appKey){
		$this->appKey = $appKey;
         $this->apiParas["app_key"] = $appKey;
	}

	public function getAppKey(){
	  return $this->appKey;
	}

                        	                   			private $taskInstId;
    	                                                                        
	public function setTaskInstId($taskInstId){
		$this->taskInstId = $taskInstId;
         $this->apiParas["task_inst_id"] = $taskInstId;
	}

	public function getTaskInstId(){
	  return $this->taskInstId;
	}

                        	                   			private $mktActivityInstId;
    	                                                                                    
	public function setMktActivityInstId($mktActivityInstId){
		$this->mktActivityInstId = $mktActivityInstId;
         $this->apiParas["mkt_activity_inst_id"] = $mktActivityInstId;
	}

	public function getMktActivityInstId(){
	  return $this->mktActivityInstId;
	}

                        	                   			private $taskId;
    	                                                            
	public function setTaskId($taskId){
		$this->taskId = $taskId;
         $this->apiParas["task_id"] = $taskId;
	}

	public function getTaskId(){
	  return $this->taskId;
	}

                        	                   			private $marketingName;
    	                                                            
	public function setMarketingName($marketingName){
		$this->marketingName = $marketingName;
         $this->apiParas["marketing_name"] = $marketingName;
	}

	public function getMarketingName(){
	  return $this->marketingName;
	}

                        	                   			private $strategyInstId;
    	                                                                        
	public function setStrategyInstId($strategyInstId){
		$this->strategyInstId = $strategyInstId;
         $this->apiParas["strategy_inst_id"] = $strategyInstId;
	}

	public function getStrategyInstId(){
	  return $this->strategyInstId;
	}

                        	                   			private $customerCount;
    	                                                            
	public function setCustomerCount($customerCount){
		$this->customerCount = $customerCount;
         $this->apiParas["customer_count"] = $customerCount;
	}

	public function getCustomerCount(){
	  return $this->customerCount;
	}

                            }





        
 

