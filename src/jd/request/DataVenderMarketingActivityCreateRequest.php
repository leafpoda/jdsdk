<?php
class DataVenderMarketingActivityCreateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.data.vender.marketing.activity.create";
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
                                                        		                                    	                   			private $mode;
    	                        
	public function setMode($mode){
		$this->mode = $mode;
         $this->apiParas["mode"] = $mode;
	}

	public function getMode(){
	  return $this->mode;
	}

                        	                   			private $mktActivityDes;
    	                                                                        
	public function setMktActivityDes($mktActivityDes){
		$this->mktActivityDes = $mktActivityDes;
         $this->apiParas["mkt_activity_des"] = $mktActivityDes;
	}

	public function getMktActivityDes(){
	  return $this->mktActivityDes;
	}

                        	                        	                   			private $mktActivityId;
    	                                                                        
	public function setMktActivityId($mktActivityId){
		$this->mktActivityId = $mktActivityId;
         $this->apiParas["mkt_activity_id"] = $mktActivityId;
	}

	public function getMktActivityId(){
	  return $this->mktActivityId;
	}

                        	                        	                   			private $startTime;
    	                                                            
	public function setStartTime($startTime){
		$this->startTime = $startTime;
         $this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime(){
	  return $this->startTime;
	}

                        	                   			private $endTime;
    	                                                            
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
	}

                        	                   			private $state;
    	                        
	public function setState($state){
		$this->state = $state;
         $this->apiParas["state"] = $state;
	}

	public function getState(){
	  return $this->state;
	}

                        	                   			private $mktActivityName;
    	                                                                        
	public function setMktActivityName($mktActivityName){
		$this->mktActivityName = $mktActivityName;
         $this->apiParas["mkt_activity_name"] = $mktActivityName;
	}

	public function getMktActivityName(){
	  return $this->mktActivityName;
	}

                            }





        
 

