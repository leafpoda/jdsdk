<?php
class DataVenderSmsNotifyRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.data.vender.sms.notify";
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
                                                        		                                    	                   			private $approverPhone;
    	                                                            
	public function setApproverPhone($approverPhone){
		$this->approverPhone = $approverPhone;
         $this->apiParas["approver_phone"] = $approverPhone;
	}

	public function getApproverPhone(){
	  return $this->approverPhone;
	}

                        	                        	                   			private $sign;
    	                        
	public function setSign($sign){
		$this->sign = $sign;
         $this->apiParas["sign"] = $sign;
	}

	public function getSign(){
	  return $this->sign;
	}

                        	                   			private $textContent;
    	                                                            
	public function setTextContent($textContent){
		$this->textContent = $textContent;
         $this->apiParas["text_content"] = $textContent;
	}

	public function getTextContent(){
	  return $this->textContent;
	}

                        	                   			private $taskInstId;
    	                                                                        
	public function setTaskInstId($taskInstId){
		$this->taskInstId = $taskInstId;
         $this->apiParas["task_inst_id"] = $taskInstId;
	}

	public function getTaskInstId(){
	  return $this->taskInstId;
	}

                        	                   			private $url;
    	                        
	public function setUrl($url){
		$this->url = $url;
         $this->apiParas["url"] = $url;
	}

	public function getUrl(){
	  return $this->url;
	}

                        	                   			private $sendTime;
    	                                                            
	public function setSendTime($sendTime){
		$this->sendTime = $sendTime;
         $this->apiParas["send_time"] = $sendTime;
	}

	public function getSendTime(){
	  return $this->sendTime;
	}

                        	                        	                        	                   			private $fullContent;
    	                                                            
	public function setFullContent($fullContent){
		$this->fullContent = $fullContent;
         $this->apiParas["full_content"] = $fullContent;
	}

	public function getFullContent(){
	  return $this->fullContent;
	}

                        	                   			private $mktActivityId;
    	                                                                        
	public function setMktActivityId($mktActivityId){
		$this->mktActivityId = $mktActivityId;
         $this->apiParas["mkt_activity_id"] = $mktActivityId;
	}

	public function getMktActivityId(){
	  return $this->mktActivityId;
	}

                        	                   			private $sendNum;
    	                                                            
	public function setSendNum($sendNum){
		$this->sendNum = $sendNum;
         $this->apiParas["send_num"] = $sendNum;
	}

	public function getSendNum(){
	  return $this->sendNum;
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

                        	                   			private $strategyInstId;
    	                                                                        
	public function setStrategyInstId($strategyInstId){
		$this->strategyInstId = $strategyInstId;
         $this->apiParas["strategy_inst_id"] = $strategyInstId;
	}

	public function getStrategyInstId(){
	  return $this->strategyInstId;
	}

                                                    	}





        
 

