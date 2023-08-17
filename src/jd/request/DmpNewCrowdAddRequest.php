<?php
class DmpNewCrowdAddRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dmp.new.crowd.add";
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
                                    	                   			private $boardIdsList;
    	                        
	public function setBoardIdsList($boardIdsList){
		$this->boardIdsList = $boardIdsList;
         $this->apiParas["boardIdsList"] = $boardIdsList;
	}

	public function getBoardIdsList(){
	  return $this->boardIdsList;
	}

                        	                   			private $crowdId;
    	                        
	public function setCrowdId($crowdId){
		$this->crowdId = $crowdId;
         $this->apiParas["crowdId"] = $crowdId;
	}

	public function getCrowdId(){
	  return $this->crowdId;
	}

                        	                   			private $crowdName;
    	                        
	public function setCrowdName($crowdName){
		$this->crowdName = $crowdName;
         $this->apiParas["crowdName"] = $crowdName;
	}

	public function getCrowdName(){
	  return $this->crowdName;
	}

                        	                   			private $expiredTime;
    	                        
	public function setExpiredTime($expiredTime){
		$this->expiredTime = $expiredTime;
         $this->apiParas["expiredTime"] = $expiredTime;
	}

	public function getExpiredTime(){
	  return $this->expiredTime;
	}

                        	                   			private $groupIds;
    	                        
	public function setGroupIds($groupIds){
		$this->groupIds = $groupIds;
         $this->apiParas["groupIds"] = $groupIds;
	}

	public function getGroupIds(){
	  return $this->groupIds;
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

                        	                        	                        	                        	                        	                        	                   			private $frontendDimensionGroupsList;
    	                        
	public function setFrontendDimensionGroupsList($frontendDimensionGroupsList){
		$this->frontendDimensionGroupsList = $frontendDimensionGroupsList;
         $this->apiParas["frontendDimensionGroupsList"] = $frontendDimensionGroupsList;
	}

	public function getFrontendDimensionGroupsList(){
	  return $this->frontendDimensionGroupsList;
	}

                        	                   			private $isNewTagCompose;
    	                        
	public function setIsNewTagCompose($isNewTagCompose){
		$this->isNewTagCompose = $isNewTagCompose;
         $this->apiParas["isNewTagCompose"] = $isNewTagCompose;
	}

	public function getIsNewTagCompose(){
	  return $this->isNewTagCompose;
	}

}





        
 

