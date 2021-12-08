<?php
class AssetActivityCreateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.asset.activity.create";
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
                                                        		                                    	                        	                        	                        	                   			private $activityId;
    	                                                            
	public function setActivityId($activityId){
		$this->activityId = $activityId;
         $this->apiParas["activity_id"] = $activityId;
	}

	public function getActivityId(){
	  return $this->activityId;
	}

                        	                   			private $activityName;
    	                                                            
	public function setActivityName($activityName){
		$this->activityName = $activityName;
         $this->apiParas["activity_name"] = $activityName;
	}

	public function getActivityName(){
	  return $this->activityName;
	}

                        	                   			private $beginDate;
    	                                                            
	public function setBeginDate($beginDate){
		$this->beginDate = $beginDate;
         $this->apiParas["begin_date"] = $beginDate;
	}

	public function getBeginDate(){
	  return $this->beginDate;
	}

                        	                   			private $endDate;
    	                                                            
	public function setEndDate($endDate){
		$this->endDate = $endDate;
         $this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate(){
	  return $this->endDate;
	}

                        	                   			private $tool;
    	                        
	public function setTool($tool){
		$this->tool = $tool;
         $this->apiParas["tool"] = $tool;
	}

	public function getTool(){
	  return $this->tool;
	}

                        	                   			private $details;
    	                        
	public function setDetails($details){
		$this->details = $details;
         $this->apiParas["details"] = $details;
	}

	public function getDetails(){
	  return $this->details;
	}

                            }





        
 

