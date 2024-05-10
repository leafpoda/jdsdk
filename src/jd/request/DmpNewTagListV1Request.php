<?php
class DmpNewTagListV1Request
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dmp.new.tag.list.v1";
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

                        	                        	                        	                        	                        	                        	                   			private $categoryId;
    	                        
	public function setCategoryId($categoryId){
		$this->categoryId = $categoryId;
         $this->apiParas["categoryId"] = $categoryId;
	}

	public function getCategoryId(){
	  return $this->categoryId;
	}

                        	                   			private $pageIndex;
    	                        
	public function setPageIndex($pageIndex){
		$this->pageIndex = $pageIndex;
         $this->apiParas["pageIndex"] = $pageIndex;
	}

	public function getPageIndex(){
	  return $this->pageIndex;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $tagName;
    	                        
	public function setTagName($tagName){
		$this->tagName = $tagName;
         $this->apiParas["tagName"] = $tagName;
	}

	public function getTagName(){
	  return $this->tagName;
	}

                        	                   			private $sortType;
    	                        
	public function setSortType($sortType){
		$this->sortType = $sortType;
         $this->apiParas["sortType"] = $sortType;
	}

	public function getSortType(){
	  return $this->sortType;
	}

                        	                   			private $isFavorite;
    	                        
	public function setIsFavorite($isFavorite){
		$this->isFavorite = $isFavorite;
         $this->apiParas["isFavorite"] = $isFavorite;
	}

	public function getIsFavorite(){
	  return $this->isFavorite;
	}

                        	                   			private $level;
    	                        
	public function setLevel($level){
		$this->level = $level;
         $this->apiParas["level"] = $level;
	}

	public function getLevel(){
	  return $this->level;
	}

                        	                   			private $tagCategoryType;
    	                        
	public function setTagCategoryType($tagCategoryType){
		$this->tagCategoryType = $tagCategoryType;
         $this->apiParas["tagCategoryType"] = $tagCategoryType;
	}

	public function getTagCategoryType(){
	  return $this->tagCategoryType;
	}

                        	}





        
 

