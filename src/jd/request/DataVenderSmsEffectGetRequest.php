<?php
class DataVenderSmsEffectGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.data.vender.sms.effect.get";
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
                                                        		                                    	                        	                   			private $searchId;
    	                                                            
	public function setSearchId($searchId){
		$this->searchId = $searchId;
         $this->apiParas["search_id"] = $searchId;
	}

	public function getSearchId(){
	  return $this->searchId;
	}

                        	                        	                   			private $activityRecordId;
    	                                                                        
	public function setActivityRecordId($activityRecordId){
		$this->activityRecordId = $activityRecordId;
         $this->apiParas["activity_record_id"] = $activityRecordId;
	}

	public function getActivityRecordId(){
	  return $this->activityRecordId;
	}

                        	                   			private $start;
    	                        
	public function setStart($start){
		$this->start = $start;
         $this->apiParas["start"] = $start;
	}

	public function getStart(){
	  return $this->start;
	}

                        	                   			private $end;
    	                        
	public function setEnd($end){
		$this->end = $end;
         $this->apiParas["end"] = $end;
	}

	public function getEnd(){
	  return $this->end;
	}

                            }





        
 

