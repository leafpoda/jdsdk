<?php
class DmpNewCrowdGroupAddCrowdBatchRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dmp.new.crowd.group.add.crowd.batch";
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

                        	                        	                        	                        	                        	                        	                   			private $crowdGroupIds;
    	                        
	public function setCrowdGroupIds($crowdGroupIds){
		$this->crowdGroupIds = $crowdGroupIds;
         $this->apiParas["crowdGroupIds"] = $crowdGroupIds;
	}

	public function getCrowdGroupIds(){
	  return $this->crowdGroupIds;
	}

                        	                   			private $crowdIds;
    	                        
	public function setCrowdIds($crowdIds){
		$this->crowdIds = $crowdIds;
         $this->apiParas["crowdIds"] = $crowdIds;
	}

	public function getCrowdIds(){
	  return $this->crowdIds;
	}

                        	                   			private $crowdGroupType;
    	                        
	public function setCrowdGroupType($crowdGroupType){
		$this->crowdGroupType = $crowdGroupType;
         $this->apiParas["crowdGroupType"] = $crowdGroupType;
	}

	public function getCrowdGroupType(){
	  return $this->crowdGroupType;
	}

}





        
 

