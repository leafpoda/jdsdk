<?php
class PointsJosSendPointsRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.points.jos.sendPoints";
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
                                                        		                                    	                        	                   			private $pin;
    	                        
	public function setPin($pin){
		$this->pin = $pin;
         $this->apiParas["pin"] = $pin;
	}

	public function getPin(){
	  return $this->pin;
	}

                        	                   			private $businessId;
    	                        
	public function setBusinessId($businessId){
		$this->businessId = $businessId;
         $this->apiParas["businessId"] = $businessId;
	}

	public function getBusinessId(){
	  return $this->businessId;
	}

                        	                   			private $sourceType;
    	                        
	public function setSourceType($sourceType){
		$this->sourceType = $sourceType;
         $this->apiParas["sourceType"] = $sourceType;
	}

	public function getSourceType(){
	  return $this->sourceType;
	}

                        	                   			private $points;
    	                        
	public function setPoints($points){
		$this->points = $points;
         $this->apiParas["points"] = $points;
	}

	public function getPoints(){
	  return $this->points;
	}

                        	                   			private $sourceComment;
    	                        
	public function setSourceComment($sourceComment){
		$this->sourceComment = $sourceComment;
         $this->apiParas["sourceComment"] = $sourceComment;
	}

	public function getSourceComment(){
	  return $this->sourceComment;
	}

                        	                   			private $openIdBuyer;
    	                                                                        
	public function setOpenIdBuyer($openIdBuyer){
		$this->openIdBuyer = $openIdBuyer;
         $this->apiParas["open_id_buyer"] = $openIdBuyer;
	}

	public function getOpenIdBuyer(){
	  return $this->openIdBuyer;
	}

                            }





        
 

