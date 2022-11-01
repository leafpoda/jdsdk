<?php
class DmpNewTagPortraitEstimageRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dmp.new.tag.portrait.estimage";
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

                        	                   			private $commitAttributeList;
    	                        
	public function setCommitAttributeList($commitAttributeList){
		$this->commitAttributeList = $commitAttributeList;
         $this->apiParas["commitAttributeList"] = $commitAttributeList;
	}

	public function getCommitAttributeList(){
	  return $this->commitAttributeList;
	}

                        	                   			private $crowdId;
    	                        
	public function setCrowdId($crowdId){
		$this->crowdId = $crowdId;
         $this->apiParas["crowdId"] = $crowdId;
	}

	public function getCrowdId(){
	  return $this->crowdId;
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

                        	                   			private $selfChannelIdsList;
    	                        
	public function setSelfChannelIdsList($selfChannelIdsList){
		$this->selfChannelIdsList = $selfChannelIdsList;
         $this->apiParas["selfChannelIdsList"] = $selfChannelIdsList;
	}

	public function getSelfChannelIdsList(){
	  return $this->selfChannelIdsList;
	}

                        	                   			private $tracePlanIdsList;
    	                        
	public function setTracePlanIdsList($tracePlanIdsList){
		$this->tracePlanIdsList = $tracePlanIdsList;
         $this->apiParas["tracePlanIdsList"] = $tracePlanIdsList;
	}

	public function getTracePlanIdsList(){
	  return $this->tracePlanIdsList;
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

                        	                   			private $dynamicRule;
    	                        
	public function setDynamicRule($dynamicRule){
		$this->dynamicRule = $dynamicRule;
         $this->apiParas["dynamicRule"] = $dynamicRule;
	}

	public function getDynamicRule(){
	  return $this->dynamicRule;
	}

                        	                   			private $brandingOrderIdsList;
    	                        
	public function setBrandingOrderIdsList($brandingOrderIdsList){
		$this->brandingOrderIdsList = $brandingOrderIdsList;
         $this->apiParas["brandingOrderIdsList"] = $brandingOrderIdsList;
	}

	public function getBrandingOrderIdsList(){
	  return $this->brandingOrderIdsList;
	}

                        	                   			private $extInfo;
    	                        
	public function setExtInfo($extInfo){
		$this->extInfo = $extInfo;
         $this->apiParas["extInfo"] = $extInfo;
	}

	public function getExtInfo(){
	  return $this->extInfo;
	}

                        	                   			private $tagSourceId;
    	                        
	public function setTagSourceId($tagSourceId){
		$this->tagSourceId = $tagSourceId;
         $this->apiParas["tagSourceId"] = $tagSourceId;
	}

	public function getTagSourceId(){
	  return $this->tagSourceId;
	}

                        	                   			private $resourceType;
    	                        
	public function setResourceType($resourceType){
		$this->resourceType = $resourceType;
         $this->apiParas["resourceType"] = $resourceType;
	}

	public function getResourceType(){
	  return $this->resourceType;
	}

                        	                   			private $dimenType;
    	                        
	public function setDimenType($dimenType){
		$this->dimenType = $dimenType;
         $this->apiParas["dimenType"] = $dimenType;
	}

	public function getDimenType(){
	  return $this->dimenType;
	}

                        	                   			private $categoryLevel;
    	                        
	public function setCategoryLevel($categoryLevel){
		$this->categoryLevel = $categoryLevel;
         $this->apiParas["categoryLevel"] = $categoryLevel;
	}

	public function getCategoryLevel(){
	  return $this->categoryLevel;
	}

                        	                   			private $attributeList;
    	                        
	public function setAttributeList($attributeList){
		$this->attributeList = $attributeList;
         $this->apiParas["attributeList"] = $attributeList;
	}

	public function getAttributeList(){
	  return $this->attributeList;
	}

                        	                   			private $chooseCampaignListList;
    	                        
	public function setChooseCampaignListList($chooseCampaignListList){
		$this->chooseCampaignListList = $chooseCampaignListList;
         $this->apiParas["chooseCampaignListList"] = $chooseCampaignListList;
	}

	public function getChooseCampaignListList(){
	  return $this->chooseCampaignListList;
	}

                        	                   			private $competeGoodsType;
    	                        
	public function setCompeteGoodsType($competeGoodsType){
		$this->competeGoodsType = $competeGoodsType;
         $this->apiParas["competeGoodsType"] = $competeGoodsType;
	}

	public function getCompeteGoodsType(){
	  return $this->competeGoodsType;
	}

                        	                   			private $boardId;
    	                        
	public function setBoardId($boardId){
		$this->boardId = $boardId;
         $this->apiParas["boardId"] = $boardId;
	}

	public function getBoardId(){
	  return $this->boardId;
	}

                        	                   			private $relevantDegreeType;
    	                        
	public function setRelevantDegreeType($relevantDegreeType){
		$this->relevantDegreeType = $relevantDegreeType;
         $this->apiParas["relevantDegreeType"] = $relevantDegreeType;
	}

	public function getRelevantDegreeType(){
	  return $this->relevantDegreeType;
	}

}





        
 

