<?php
class DataVenderStrategyInstanceCreateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.data.vender.strategy.instance.create";
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
                                                        		                                    	                        	                        	                        	                   			private $mktActivityId;
    	                                                                        
	public function setMktActivityId($mktActivityId){
		$this->mktActivityId = $mktActivityId;
         $this->apiParas["mkt_activity_id"] = $mktActivityId;
	}

	public function getMktActivityId(){
	  return $this->mktActivityId;
	}

                        	                   			private $strategyId;
    	                                                            
	public function setStrategyId($strategyId){
		$this->strategyId = $strategyId;
         $this->apiParas["strategy_id"] = $strategyId;
	}

	public function getStrategyId(){
	  return $this->strategyId;
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

                        	                   			private $strategyParam;
    	                                                            
	public function setStrategyParam($strategyParam){
		$this->strategyParam = $strategyParam;
         $this->apiParas["strategy_param"] = $strategyParam;
	}

	public function getStrategyParam(){
	  return $this->strategyParam;
	}

                        	                   			private $instancePackType;
    	                                                                        
	public function setInstancePackType($instancePackType){
		$this->instancePackType = $instancePackType;
         $this->apiParas["instance_pack_type"] = $instancePackType;
	}

	public function getInstancePackType(){
	  return $this->instancePackType;
	}

                                                    	}





        
 

