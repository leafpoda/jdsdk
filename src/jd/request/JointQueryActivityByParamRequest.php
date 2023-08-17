<?php
class JointQueryActivityByParamRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.joint.queryActivityByParam";
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
                                                        		                                    	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $jointActivityId;
    	                        
	public function setJointActivityId($jointActivityId){
		$this->jointActivityId = $jointActivityId;
         $this->apiParas["jointActivityId"] = $jointActivityId;
	}

	public function getJointActivityId(){
	  return $this->jointActivityId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                        private $status;
                              public function setStatus($status ){
                 $this->status=$status;
                 $this->apiParas["status"] = $status;
              }

              public function getStatus(){
              	return $this->status;
              }
                                                                                                                                        	                   			private $offset;
    	                        
	public function setOffset($offset){
		$this->offset = $offset;
         $this->apiParas["offset"] = $offset;
	}

	public function getOffset(){
	  return $this->offset;
	}

                        	                   			private $activityName;
    	                        
	public function setActivityName($activityName){
		$this->activityName = $activityName;
         $this->apiParas["activityName"] = $activityName;
	}

	public function getActivityName(){
	  return $this->activityName;
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

                        	                        	                        	                            }





        
 

