<?php
class DataVenderPackDMPSynchronizeRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.data.vender.pack.DMP.synchronize";
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
                                                        		                                    	                   			private $dmpChannelType;
    	                                                                        
	public function setDmpChannelType($dmpChannelType){
		$this->dmpChannelType = $dmpChannelType;
         $this->apiParas["dmp_channel_type"] = $dmpChannelType;
	}

	public function getDmpChannelType(){
	  return $this->dmpChannelType;
	}

                        	                        	                        	                   			private $mktActivityId;
    	                                                                        
	public function setMktActivityId($mktActivityId){
		$this->mktActivityId = $mktActivityId;
         $this->apiParas["mkt_activity_id"] = $mktActivityId;
	}

	public function getMktActivityId(){
	  return $this->mktActivityId;
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

                        	                   			private $strategyInstId;
    	                                                                        
	public function setStrategyInstId($strategyInstId){
		$this->strategyInstId = $strategyInstId;
         $this->apiParas["strategy_inst_id"] = $strategyInstId;
	}

	public function getStrategyInstId(){
	  return $this->strategyInstId;
	}

                            }





        
 

