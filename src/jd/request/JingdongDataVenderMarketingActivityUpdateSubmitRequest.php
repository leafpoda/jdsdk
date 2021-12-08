<?php
class JingdongDataVenderMarketingActivityUpdateSubmitRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jingdong.data.vender.marketing.activity.update.submit";
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

                        	                   			private $mktTaskExecuteTimePlan;
    	                                                                                                
	public function setMktTaskExecuteTimePlan($mktTaskExecuteTimePlan){
		$this->mktTaskExecuteTimePlan = $mktTaskExecuteTimePlan;
         $this->apiParas["mkt_task_execute_time_plan"] = $mktTaskExecuteTimePlan;
	}

	public function getMktTaskExecuteTimePlan(){
	  return $this->mktTaskExecuteTimePlan;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                                                                                                                       private $taskDesc;
                              public function setTaskDesc($taskDesc ){
                 $this->taskDesc=$taskDesc;
                 $this->apiParas["task_desc"] = $taskDesc;
              }

              public function getTaskDesc(){
              	return $this->taskDesc;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $taskType;
                              public function setTaskType($taskType ){
                 $this->taskType=$taskType;
                 $this->apiParas["task_type"] = $taskType;
              }

              public function getTaskType(){
              	return $this->taskType;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $nextTasks;
                              public function setNextTasks($nextTasks ){
                 $this->nextTasks=$nextTasks;
                 $this->apiParas["next_tasks"] = $nextTasks;
              }

              public function getNextTasks(){
              	return $this->nextTasks;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $taskName;
                              public function setTaskName($taskName ){
                 $this->taskName=$taskName;
                 $this->apiParas["task_name"] = $taskName;
              }

              public function getTaskName(){
              	return $this->taskName;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $preTasks;
                              public function setPreTasks($preTasks ){
                 $this->preTasks=$preTasks;
                 $this->apiParas["pre_tasks"] = $preTasks;
              }

              public function getPreTasks(){
              	return $this->preTasks;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $taskId;
                              public function setTaskId($taskId ){
                 $this->taskId=$taskId;
                 $this->apiParas["task_id"] = $taskId;
              }

              public function getTaskId(){
              	return $this->taskId;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $extraInfo;
                              public function setExtraInfo($extraInfo ){
                 $this->extraInfo=$extraInfo;
                 $this->apiParas["extra_info"] = $extraInfo;
              }

              public function getExtraInfo(){
              	return $this->extraInfo;
              }
                                                                                                                                        	                            }





        
 

