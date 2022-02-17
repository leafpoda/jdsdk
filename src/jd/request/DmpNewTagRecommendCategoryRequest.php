<?php
class DmpNewTagRecommendCategoryRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dmp.new.tag.recommend.category";
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
                                    	                   			private $skus;
    	                        
	public function setSkus($skus){
		$this->skus = $skus;
         $this->apiParas["skus"] = $skus;
	}

	public function getSkus(){
	  return $this->skus;
	}

                        	                   			private $resourceType;
    	                        
	public function setResourceType($resourceType){
		$this->resourceType = $resourceType;
         $this->apiParas["resourceType"] = $resourceType;
	}

	public function getResourceType(){
	  return $this->resourceType;
	}

                        	                   			private $categoryLevel;
    	                        
	public function setCategoryLevel($categoryLevel){
		$this->categoryLevel = $categoryLevel;
         $this->apiParas["categoryLevel"] = $categoryLevel;
	}

	public function getCategoryLevel(){
	  return $this->categoryLevel;
	}

                        	                   			private $categoryMatchType;
    	                        
	public function setCategoryMatchType($categoryMatchType){
		$this->categoryMatchType = $categoryMatchType;
         $this->apiParas["categoryMatchType"] = $categoryMatchType;
	}

	public function getCategoryMatchType(){
	  return $this->categoryMatchType;
	}

                        	                   			private $relevantDegreeType;
    	                        
	public function setRelevantDegreeType($relevantDegreeType){
		$this->relevantDegreeType = $relevantDegreeType;
         $this->apiParas["relevantDegreeType"] = $relevantDegreeType;
	}

	public function getRelevantDegreeType(){
	  return $this->relevantDegreeType;
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

                        	                        	                        	                        	                        	}





        
 

