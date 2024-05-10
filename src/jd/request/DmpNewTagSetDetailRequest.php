<?php
class DmpNewTagSetDetailRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dmp.new.tag.set.detail";
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

                        	                   			private $commitAttributeList;
    	                        
	public function setCommitAttributeList($commitAttributeList){
		$this->commitAttributeList = $commitAttributeList;
         $this->apiParas["commitAttributeList"] = $commitAttributeList;
	}

	public function getCommitAttributeList(){
	  return $this->commitAttributeList;
	}

                        	                   			private $customerDefineList;
    	                        
	public function setCustomerDefineList($customerDefineList){
		$this->customerDefineList = $customerDefineList;
         $this->apiParas["customerDefineList"] = $customerDefineList;
	}

	public function getCustomerDefineList(){
	  return $this->customerDefineList;
	}

                        	                   			private $shopIdsList;
    	                        
	public function setShopIdsList($shopIdsList){
		$this->shopIdsList = $shopIdsList;
         $this->apiParas["shopIdsList"] = $shopIdsList;
	}

	public function getShopIdsList(){
	  return $this->shopIdsList;
	}

                        	                   			private $categoryIdsList;
    	                        
	public function setCategoryIdsList($categoryIdsList){
		$this->categoryIdsList = $categoryIdsList;
         $this->apiParas["categoryIdsList"] = $categoryIdsList;
	}

	public function getCategoryIdsList(){
	  return $this->categoryIdsList;
	}

                        	                   			private $skusList;
    	                        
	public function setSkusList($skusList){
		$this->skusList = $skusList;
         $this->apiParas["skusList"] = $skusList;
	}

	public function getSkusList(){
	  return $this->skusList;
	}

                        	                   			private $keywordsList;
    	                        
	public function setKeywordsList($keywordsList){
		$this->keywordsList = $keywordsList;
         $this->apiParas["keywordsList"] = $keywordsList;
	}

	public function getKeywordsList(){
	  return $this->keywordsList;
	}

                        	                   			private $keywordsDescList;
    	                        
	public function setKeywordsDescList($keywordsDescList){
		$this->keywordsDescList = $keywordsDescList;
         $this->apiParas["keywordsDescList"] = $keywordsDescList;
	}

	public function getKeywordsDescList(){
	  return $this->keywordsDescList;
	}

                        	                   			private $seedIdsList;
    	                        
	public function setSeedIdsList($seedIdsList){
		$this->seedIdsList = $seedIdsList;
         $this->apiParas["seedIdsList"] = $seedIdsList;
	}

	public function getSeedIdsList(){
	  return $this->seedIdsList;
	}

                        	                   			private $brandIdsList;
    	                        
	public function setBrandIdsList($brandIdsList){
		$this->brandIdsList = $brandIdsList;
         $this->apiParas["brandIdsList"] = $brandIdsList;
	}

	public function getBrandIdsList(){
	  return $this->brandIdsList;
	}

                        	                   			private $cidAndBrandList;
    	                        
	public function setCidAndBrandList($cidAndBrandList){
		$this->cidAndBrandList = $cidAndBrandList;
         $this->apiParas["cidAndBrandList"] = $cidAndBrandList;
	}

	public function getCidAndBrandList(){
	  return $this->cidAndBrandList;
	}

                        	                   			private $priceAttributesList;
    	                        
	public function setPriceAttributesList($priceAttributesList){
		$this->priceAttributesList = $priceAttributesList;
         $this->apiParas["priceAttributesList"] = $priceAttributesList;
	}

	public function getPriceAttributesList(){
	  return $this->priceAttributesList;
	}

                        	                   			private $campaignIdsList;
    	                        
	public function setCampaignIdsList($campaignIdsList){
		$this->campaignIdsList = $campaignIdsList;
         $this->apiParas["campaignIdsList"] = $campaignIdsList;
	}

	public function getCampaignIdsList(){
	  return $this->campaignIdsList;
	}

                        	                   			private $campaignDescsList;
    	                        
	public function setCampaignDescsList($campaignDescsList){
		$this->campaignDescsList = $campaignDescsList;
         $this->apiParas["campaignDescsList"] = $campaignDescsList;
	}

	public function getCampaignDescsList(){
	  return $this->campaignDescsList;
	}

                        	                   			private $frequencyBeginValue;
    	                        
	public function setFrequencyBeginValue($frequencyBeginValue){
		$this->frequencyBeginValue = $frequencyBeginValue;
         $this->apiParas["frequencyBeginValue"] = $frequencyBeginValue;
	}

	public function getFrequencyBeginValue(){
	  return $this->frequencyBeginValue;
	}

                        	                   			private $frequencyEndValue;
    	                        
	public function setFrequencyEndValue($frequencyEndValue){
		$this->frequencyEndValue = $frequencyEndValue;
         $this->apiParas["frequencyEndValue"] = $frequencyEndValue;
	}

	public function getFrequencyEndValue(){
	  return $this->frequencyEndValue;
	}

                        	                   			private $skuAttributeList;
    	                        
	public function setSkuAttributeList($skuAttributeList){
		$this->skuAttributeList = $skuAttributeList;
         $this->apiParas["skuAttributeList"] = $skuAttributeList;
	}

	public function getSkuAttributeList(){
	  return $this->skuAttributeList;
	}

                        	                   			private $externalDescList;
    	                        
	public function setExternalDescList($externalDescList){
		$this->externalDescList = $externalDescList;
         $this->apiParas["externalDescList"] = $externalDescList;
	}

	public function getExternalDescList(){
	  return $this->externalDescList;
	}

                        	                   			private $externalValueList;
    	                        
	public function setExternalValueList($externalValueList){
		$this->externalValueList = $externalValueList;
         $this->apiParas["externalValueList"] = $externalValueList;
	}

	public function getExternalValueList(){
	  return $this->externalValueList;
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

                        	                        	                   			private $attributeList;
    	                        
	public function setAttributeList($attributeList){
		$this->attributeList = $attributeList;
         $this->apiParas["attributeList"] = $attributeList;
	}

	public function getAttributeList(){
	  return $this->attributeList;
	}

                        	                        	                        	                        	}





        
 

