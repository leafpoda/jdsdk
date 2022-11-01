<?php
class DmpNewTagInfoWordsRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dmp.new.tag.info.words";
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

                        	                        	                        	                        	                        	                        	                   			private $type;
    	                        
	public function setType($type){
		$this->type = $type;
         $this->apiParas["type"] = $type;
	}

	public function getType(){
	  return $this->type;
	}

                        	                   			private $words;
    	                        
	public function setWords($words){
		$this->words = $words;
         $this->apiParas["words"] = $words;
	}

	public function getWords(){
	  return $this->words;
	}

                        	                   			private $tagId;
    	                        
	public function setTagId($tagId){
		$this->tagId = $tagId;
         $this->apiParas["tagId"] = $tagId;
	}

	public function getTagId(){
	  return $this->tagId;
	}

}





        
 

