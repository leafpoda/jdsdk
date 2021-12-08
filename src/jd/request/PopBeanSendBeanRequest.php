<?php
class PopBeanSendBeanRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.bean.sendBean";
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
                                                        		                                    	                        	                        	                   			private $requestId;
    	                        
	public function setRequestId($requestId){
		$this->requestId = $requestId;
         $this->apiParas["requestId"] = $requestId;
	}

	public function getRequestId(){
	  return $this->requestId;
	}

                        	                                                                        		                                    	                   			private $beanNum;
    	                        
	public function setBeanNum($beanNum){
		$this->beanNum = $beanNum;
         $this->apiParas["beanNum"] = $beanNum;
	}

	public function getBeanNum(){
	  return $this->beanNum;
	}

                        	                   			private $accountId;
    	                        
	public function setAccountId($accountId){
		$this->accountId = $accountId;
         $this->apiParas["accountId"] = $accountId;
	}

	public function getAccountId(){
	  return $this->accountId;
	}

                        	                   			private $accountCode;
    	                        
	public function setAccountCode($accountCode){
		$this->accountCode = $accountCode;
         $this->apiParas["accountCode"] = $accountCode;
	}

	public function getAccountCode(){
	  return $this->accountCode;
	}

                        	                   			private $sendWay;
    	                        
	public function setSendWay($sendWay){
		$this->sendWay = $sendWay;
         $this->apiParas["sendWay"] = $sendWay;
	}

	public function getSendWay(){
	  return $this->sendWay;
	}

                        	                   			private $sendCode;
    	                        
	public function setSendCode($sendCode){
		$this->sendCode = $sendCode;
         $this->apiParas["sendCode"] = $sendCode;
	}

	public function getSendCode(){
	  return $this->sendCode;
	}

                        	                   			private $accountType;
    	                        
	public function setAccountType($accountType){
		$this->accountType = $accountType;
         $this->apiParas["accountType"] = $accountType;
	}

	public function getAccountType(){
	  return $this->accountType;
	}

                        	                   			private $context;
    	                        
	public function setContext($context){
		$this->context = $context;
         $this->apiParas["context"] = $context;
	}

	public function getContext(){
	  return $this->context;
	}

                        	                   			private $planId;
    	                        
	public function setPlanId($planId){
		$this->planId = $planId;
         $this->apiParas["planId"] = $planId;
	}

	public function getPlanId(){
	  return $this->planId;
	}

                        	                   			private $rfId;
    	                        
	public function setRfId($rfId){
		$this->rfId = $rfId;
         $this->apiParas["rfId"] = $rfId;
	}

	public function getRfId(){
	  return $this->rfId;
	}

                        	                   			private $openIdBuyer;
    	                                                                        
	public function setOpenIdBuyer($openIdBuyer){
		$this->openIdBuyer = $openIdBuyer;
         $this->apiParas["open_id_buyer"] = $openIdBuyer;
	}

	public function getOpenIdBuyer(){
	  return $this->openIdBuyer;
	}

                            }





        
 

