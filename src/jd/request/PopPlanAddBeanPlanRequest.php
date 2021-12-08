<?php
class PopPlanAddBeanPlanRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.plan.addBeanPlan";
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

                        	                                                                        		                                    	                   			private $serviceMoneyBudget;
    	                        
	public function setServiceMoneyBudget($serviceMoneyBudget){
		$this->serviceMoneyBudget = $serviceMoneyBudget;
         $this->apiParas["serviceMoneyBudget"] = $serviceMoneyBudget;
	}

	public function getServiceMoneyBudget(){
	  return $this->serviceMoneyBudget;
	}

                        	                   			private $accountCode;
    	                        
	public function setAccountCode($accountCode){
		$this->accountCode = $accountCode;
         $this->apiParas["accountCode"] = $accountCode;
	}

	public function getAccountCode(){
	  return $this->accountCode;
	}

                        	                   			private $accountType;
    	                        
	public function setAccountType($accountType){
		$this->accountType = $accountType;
         $this->apiParas["accountType"] = $accountType;
	}

	public function getAccountType(){
	  return $this->accountType;
	}

                        	                   			private $sendTimes;
    	                        
	public function setSendTimes($sendTimes){
		$this->sendTimes = $sendTimes;
         $this->apiParas["sendTimes"] = $sendTimes;
	}

	public function getSendTimes(){
	  return $this->sendTimes;
	}

                        	                   			private $type;
    	                        
	public function setType($type){
		$this->type = $type;
         $this->apiParas["type"] = $type;
	}

	public function getType(){
	  return $this->type;
	}

                        	                   			private $modifyMode;
    	                        
	public function setModifyMode($modifyMode){
		$this->modifyMode = $modifyMode;
         $this->apiParas["modifyMode"] = $modifyMode;
	}

	public function getModifyMode(){
	  return $this->modifyMode;
	}

                        	                   			private $content;
    	                        
	public function setContent($content){
		$this->content = $content;
         $this->apiParas["content"] = $content;
	}

	public function getContent(){
	  return $this->content;
	}

                        	                   			private $accountId;
    	                        
	public function setAccountId($accountId){
		$this->accountId = $accountId;
         $this->apiParas["accountId"] = $accountId;
	}

	public function getAccountId(){
	  return $this->accountId;
	}

                        	                   			private $budgetNum;
    	                        
	public function setBudgetNum($budgetNum){
		$this->budgetNum = $budgetNum;
         $this->apiParas["budgetNum"] = $budgetNum;
	}

	public function getBudgetNum(){
	  return $this->budgetNum;
	}

                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $rfId;
    	                        
	public function setRfId($rfId){
		$this->rfId = $rfId;
         $this->apiParas["rfId"] = $rfId;
	}

	public function getRfId(){
	  return $this->rfId;
	}

                        	                   			private $beginTime;
    	                        
	public function setBeginTime($beginTime){
		$this->beginTime = $beginTime;
         $this->apiParas["beginTime"] = $beginTime;
	}

	public function getBeginTime(){
	  return $this->beginTime;
	}

                        	                   			private $endTime;
    	                        
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["endTime"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
	}

                        	                   			private $sendMode;
    	                        
	public function setSendMode($sendMode){
		$this->sendMode = $sendMode;
         $this->apiParas["sendMode"] = $sendMode;
	}

	public function getSendMode(){
	  return $this->sendMode;
	}

                        	                   			private $sendRule;
    	                        
	public function setSendRule($sendRule){
		$this->sendRule = $sendRule;
         $this->apiParas["sendRule"] = $sendRule;
	}

	public function getSendRule(){
	  return $this->sendRule;
	}

                        	                   			private $pinRiskLevel;
    	                        
	public function setPinRiskLevel($pinRiskLevel){
		$this->pinRiskLevel = $pinRiskLevel;
         $this->apiParas["pinRiskLevel"] = $pinRiskLevel;
	}

	public function getPinRiskLevel(){
	  return $this->pinRiskLevel;
	}

                            }





        
 

