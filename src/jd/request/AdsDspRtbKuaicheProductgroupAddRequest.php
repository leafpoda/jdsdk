<?php
class AdsDspRtbKuaicheProductgroupAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.dsp.rtb.kuaiche.productgroup.add";
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

    private  $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
                                                        		                                    	                   			private $fee;
    	                        
	public function setFee($fee){
		$this->fee = $fee;
         $this->apiParas["fee"] = $fee;
	}

	public function getFee(){
	  return $this->fee;
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

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $newAreaIds;
                              public function setNewAreaIds($newAreaIds ){
                 $this->newAreaIds=$newAreaIds;
                 $this->apiParas["newAreaIds"] = $newAreaIds;
              }

              public function getNewAreaIds(){
              	return $this->newAreaIds;
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
                                                                                                                                        	                                            		                                    	                        	                        	                                                                                                    		                                    	                        	                        	                        	                            }





        
 

