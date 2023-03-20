<?php
class DmpNewTagUploadSeedRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dmp.new.tag.upload.seed";
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
                                    	                   			private $originalName;
    	                        
	public function setOriginalName($originalName){
		$this->originalName = $originalName;
         $this->apiParas["originalName"] = $originalName;
	}

	public function getOriginalName(){
	  return $this->originalName;
	}

                        	                   			private $fileName;
    	                        
	public function setFileName($fileName){
		$this->fileName = $fileName;
         $this->apiParas["fileName"] = $fileName;
	}

	public function getFileName(){
	  return $this->fileName;
	}

                        	                   			private $resourceType;
    	                        
	public function setResourceType($resourceType){
		$this->resourceType = $resourceType;
         $this->apiParas["resourceType"] = $resourceType;
	}

	public function getResourceType(){
	  return $this->resourceType;
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

                        	                        	                        	                        	                        	                   			private $pinScale;
    	                        
	public function setPinScale($pinScale){
		$this->pinScale = $pinScale;
         $this->apiParas["pinScale"] = $pinScale;
	}

	public function getPinScale(){
	  return $this->pinScale;
	}

                        	                   			private $userPackageName;
    	                        
	public function setUserPackageName($userPackageName){
		$this->userPackageName = $userPackageName;
         $this->apiParas["userPackageName"] = $userPackageName;
	}

	public function getUserPackageName(){
	  return $this->userPackageName;
	}

                        	                        	                        	}





        
 

