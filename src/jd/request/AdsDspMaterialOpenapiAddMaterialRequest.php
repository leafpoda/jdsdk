<?php
class AdsDspMaterialOpenapiAddMaterialRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.dsp.material.openapi.addMaterial";
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
                                                        		                                    	                   			private $operatorPin;
    	                        
	public function setOperatorPin($operatorPin){
		$this->operatorPin = $operatorPin;
         $this->apiParas["operatorPin"] = $operatorPin;
	}

	public function getOperatorPin(){
	  return $this->operatorPin;
	}

                        	                        	                        	                   			private $authType;
    	                        
	public function setAuthType($authType){
		$this->authType = $authType;
         $this->apiParas["authType"] = $authType;
	}

	public function getAuthType(){
	  return $this->authType;
	}

                        	                   			private $accessPin;
    	                        
	public function setAccessPin($accessPin){
		$this->accessPin = $accessPin;
         $this->apiParas["accessPin"] = $accessPin;
	}

	public function getAccessPin(){
	  return $this->accessPin;
	}

                        	                                                                        		                                    	                   			private $campaignType;
    	                        
	public function setCampaignType($campaignType){
		$this->campaignType = $campaignType;
         $this->apiParas["campaignType"] = $campaignType;
	}

	public function getCampaignType(){
	  return $this->campaignType;
	}

                        	                   			private $notes;
    	                        
	public function setNotes($notes){
		$this->notes = $notes;
         $this->apiParas["notes"] = $notes;
	}

	public function getNotes(){
	  return $this->notes;
	}

                        	                   			private $mediaPositionId;
    	                        
	public function setMediaPositionId($mediaPositionId){
		$this->mediaPositionId = $mediaPositionId;
         $this->apiParas["mediaPositionId"] = $mediaPositionId;
	}

	public function getMediaPositionId(){
	  return $this->mediaPositionId;
	}

                        	                   			private $liveId;
    	                        
	public function setLiveId($liveId){
		$this->liveId = $liveId;
         $this->apiParas["liveId"] = $liveId;
	}

	public function getLiveId(){
	  return $this->liveId;
	}

                        	                   			private $materialName;
    	                        
	public function setMaterialName($materialName){
		$this->materialName = $materialName;
         $this->apiParas["materialName"] = $materialName;
	}

	public function getMaterialName(){
	  return $this->materialName;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                        private $qualificationId;
                              public function setQualificationId($qualificationId ){
                 $this->qualificationId=$qualificationId;
                 $this->apiParas["qualificationId"] = $qualificationId;
              }

              public function getQualificationId(){
              	return $this->qualificationId;
              }
                                                                                                                                        	                   			private $shopId;
    	                        
	public function setShopId($shopId){
		$this->shopId = $shopId;
         $this->apiParas["shopId"] = $shopId;
	}

	public function getShopId(){
	  return $this->shopId;
	}

                        	                   			private $mediaDisplayModeId;
    	                        
	public function setMediaDisplayModeId($mediaDisplayModeId){
		$this->mediaDisplayModeId = $mediaDisplayModeId;
         $this->apiParas["mediaDisplayModeId"] = $mediaDisplayModeId;
	}

	public function getMediaDisplayModeId(){
	  return $this->mediaDisplayModeId;
	}

                        	                   			private $businessType;
    	                        
	public function setBusinessType($businessType){
		$this->businessType = $businessType;
         $this->apiParas["businessType"] = $businessType;
	}

	public function getBusinessType(){
	  return $this->businessType;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                        private $orderId;
                              public function setOrderId($orderId ){
                 $this->orderId=$orderId;
                 $this->apiParas["orderId"] = $orderId;
              }

              public function getOrderId(){
              	return $this->orderId;
              }
                                                                                                                                                                                                                                                                                                                       private $subType;
                              public function setSubType($subType ){
                 $this->subType=$subType;
                 $this->apiParas["subType"] = $subType;
              }

              public function getSubType(){
              	return $this->subType;
              }
                                                                                                                                                                                                                                                                                                                       private $elementType;
                              public function setElementType($elementType ){
                 $this->elementType=$elementType;
                 $this->apiParas["elementType"] = $elementType;
              }

              public function getElementType(){
              	return $this->elementType;
              }
                                                                                                                                                                                                                                                                                                                       private $content;
                              public function setContent($content ){
                 $this->content=$content;
                 $this->apiParas["content"] = $content;
              }

              public function getContent(){
              	return $this->content;
              }
                                                                                                                                                                                                                                                                                                                       private $elementName;
                              public function setElementName($elementName ){
                 $this->elementName=$elementName;
                 $this->apiParas["elementName"] = $elementName;
              }

              public function getElementName(){
              	return $this->elementName;
              }
                                                                                                                                        	                   			private $effectiveDate;
    	                        
	public function setEffectiveDate($effectiveDate){
		$this->effectiveDate = $effectiveDate;
         $this->apiParas["effectiveDate"] = $effectiveDate;
	}

	public function getEffectiveDate(){
	  return $this->effectiveDate;
	}

                        	                   			private $skuId;
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                   			private $expirationDate;
    	                        
	public function setExpirationDate($expirationDate){
		$this->expirationDate = $expirationDate;
         $this->apiParas["expirationDate"] = $expirationDate;
	}

	public function getExpirationDate(){
	  return $this->expirationDate;
	}

                            }





        
 

