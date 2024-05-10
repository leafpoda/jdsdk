<?php
class DmpNewTagDetailRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dmp.new.tag.detail";
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

                        	                        	                        	                        	                        	                        	                   			private $tagId;
    	                        
	public function setTagId($tagId){
		$this->tagId = $tagId;
         $this->apiParas["tagId"] = $tagId;
	}

	public function getTagId(){
	  return $this->tagId;
	}

                        	                   			private $crowdId;
    	                        
	public function setCrowdId($crowdId){
		$this->crowdId = $crowdId;
         $this->apiParas["crowdId"] = $crowdId;
	}

	public function getCrowdId(){
	  return $this->crowdId;
	}

                        	                   			private $industryHot;
    	                        
	public function setIndustryHot($industryHot){
		$this->industryHot = $industryHot;
         $this->apiParas["industryHot"] = $industryHot;
	}

	public function getIndustryHot(){
	  return $this->industryHot;
	}

                        	                   			private $coverageRate;
    	                        
	public function setCoverageRate($coverageRate){
		$this->coverageRate = $coverageRate;
         $this->apiParas["coverageRate"] = $coverageRate;
	}

	public function getCoverageRate(){
	  return $this->coverageRate;
	}

                        	                   			private $boardId;
    	                        
	public function setBoardId($boardId){
		$this->boardId = $boardId;
         $this->apiParas["boardId"] = $boardId;
	}

	public function getBoardId(){
	  return $this->boardId;
	}

}





        
 

