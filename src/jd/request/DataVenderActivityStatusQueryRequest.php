<?php
class DataVenderActivityStatusQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.data.vender.activity.status.query";
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
                                    	                        	                        	                   			private $activityRecordId;
    	                                                                        
	public function setActivityRecordId($activityRecordId){
		$this->activityRecordId = $activityRecordId;
         $this->apiParas["activity_record_id"] = $activityRecordId;
	}

	public function getActivityRecordId(){
	  return $this->activityRecordId;
	}

}





        
 

