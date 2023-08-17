<?php
class AdsDspRtbKuaicheProductgroupAddV2Request
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.dsp.rtb.kuaiche.productgroup.add.v2";
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
                                                        		                                                             	                        	                                                                                                                                                                                                                                                                                        private $skuId;
                              public function setSkuId($skuId ){
                 $this->skuId=$skuId;
                 $this->apiParas["skuId"] = $skuId;
              }

              public function getSkuId(){
              	return $this->skuId;
              }
                                                                                                                                                                                                                                                                                                                       private $sourceType;
                              public function setSourceType($sourceType ){
                 $this->sourceType=$sourceType;
                 $this->apiParas["sourceType"] = $sourceType;
              }

              public function getSourceType(){
              	return $this->sourceType;
              }
                                                                                                                                                                                                                                                                                                                       private $adName;
                              public function setAdName($adName ){
                 $this->adName=$adName;
                 $this->apiParas["adName"] = $adName;
              }

              public function getAdName(){
              	return $this->adName;
              }
                                                                                                                                                                                                                                                                                                                       private $imgUrl;
                              public function setImgUrl($imgUrl ){
                 $this->imgUrl=$imgUrl;
                 $this->apiParas["imgUrl"] = $imgUrl;
              }

              public function getImgUrl(){
              	return $this->imgUrl;
              }
                                                                                                                                                                                                                                                                                                                       private $customTitle;
                              public function setCustomTitle($customTitle ){
                 $this->customTitle=$customTitle;
                 $this->apiParas["customTitle"] = $customTitle;
              }

              public function getCustomTitle(){
              	return $this->customTitle;
              }
                                                                                                                                                                 	                        	                                                                                                                                                                                                                                                                                        private $item;
                              public function setItem($item ){
                 $this->item=$item;
                 $this->apiParas["item"] = $item;
              }

              public function getItem(){
              	return $this->item;
              }
                                                                                                                                                            		                                    	                        	                   			private $isUsed;
    	                        
	public function setIsUsed($isUsed){
		$this->isUsed = $isUsed;
         $this->apiParas["isUsed"] = $isUsed;
	}

	public function getIsUsed(){
	  return $this->isUsed;
	}

                        	                                                    	                   			private $feeDecimal;
    	                        
	public function setFeeDecimal($feeDecimal){
		$this->feeDecimal = $feeDecimal;
         $this->apiParas["feeDecimal"] = $feeDecimal;
	}

	public function getFeeDecimal(){
	  return $this->feeDecimal;
	}

                        	                   			private $inSearchFee;
    	                        
	public function setInSearchFee($inSearchFee){
		$this->inSearchFee = $inSearchFee;
         $this->apiParas["inSearchFee"] = $inSearchFee;
	}

	public function getInSearchFee(){
	  return $this->inSearchFee;
	}

                        	                   			private $campaignId;
    	                        
	public function setCampaignId($campaignId){
		$this->campaignId = $campaignId;
         $this->apiParas["campaignId"] = $campaignId;
	}

	public function getCampaignId(){
	  return $this->campaignId;
	}

                        	                   			private $mobilePriceCoef;
    	                        
	public function setMobilePriceCoef($mobilePriceCoef){
		$this->mobilePriceCoef = $mobilePriceCoef;
         $this->apiParas["mobilePriceCoef"] = $mobilePriceCoef;
	}

	public function getMobilePriceCoef(){
	  return $this->mobilePriceCoef;
	}

                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                        	                   			private $automatedBiddingType;
    	                        
	public function setAutomatedBiddingType($automatedBiddingType){
		$this->automatedBiddingType = $automatedBiddingType;
         $this->apiParas["automatedBiddingType"] = $automatedBiddingType;
	}

	public function getAutomatedBiddingType(){
	  return $this->automatedBiddingType;
	}

                        	                   			private $deliveryTarget;
    	                        
	public function setDeliveryTarget($deliveryTarget){
		$this->deliveryTarget = $deliveryTarget;
         $this->apiParas["deliveryTarget"] = $deliveryTarget;
	}

	public function getDeliveryTarget(){
	  return $this->deliveryTarget;
	}

                        	                   			private $dayCost;
    	                        
	public function setDayCost($dayCost){
		$this->dayCost = $dayCost;
         $this->apiParas["dayCost"] = $dayCost;
	}

	public function getDayCost(){
	  return $this->dayCost;
	}

                        	                   			private $tcpaMaxClickBid;
    	                        
	public function setTcpaMaxClickBid($tcpaMaxClickBid){
		$this->tcpaMaxClickBid = $tcpaMaxClickBid;
         $this->apiParas["tcpaMaxClickBid"] = $tcpaMaxClickBid;
	}

	public function getTcpaMaxClickBid(){
	  return $this->tcpaMaxClickBid;
	}

                        	                   			private $premiumCoef;
    	                        
	public function setPremiumCoef($premiumCoef){
		$this->premiumCoef = $premiumCoef;
         $this->apiParas["premiumCoef"] = $premiumCoef;
	}

	public function getPremiumCoef(){
	  return $this->premiumCoef;
	}

                        	                   			private $biddingControlType;
    	                        
	public function setBiddingControlType($biddingControlType){
		$this->biddingControlType = $biddingControlType;
         $this->apiParas["biddingControlType"] = $biddingControlType;
	}

	public function getBiddingControlType(){
	  return $this->biddingControlType;
	}

                        	                   			private $orientationRange;
    	                        
	public function setOrientationRange($orientationRange){
		$this->orientationRange = $orientationRange;
         $this->apiParas["orientationRange"] = $orientationRange;
	}

	public function getOrientationRange(){
	  return $this->orientationRange;
	}

                        	                   			private $shopId;
    	                        
	public function setShopId($shopId){
		$this->shopId = $shopId;
         $this->apiParas["shopId"] = $shopId;
	}

	public function getShopId(){
	  return $this->shopId;
	}

                        	                   			private $tcpaBid;
    	                        
	public function setTcpaBid($tcpaBid){
		$this->tcpaBid = $tcpaBid;
         $this->apiParas["tcpaBid"] = $tcpaBid;
	}

	public function getTcpaBid(){
	  return $this->tcpaBid;
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

                        	                        	                        	                   			private $platformBusinessType;
    	                        
	public function setPlatformBusinessType($platformBusinessType){
		$this->platformBusinessType = $platformBusinessType;
         $this->apiParas["platformBusinessType"] = $platformBusinessType;
	}

	public function getPlatformBusinessType(){
	  return $this->platformBusinessType;
	}

                        	                        	                            }





        
 

