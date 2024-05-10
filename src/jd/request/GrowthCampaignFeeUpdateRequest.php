<?php
class GrowthCampaignFeeUpdateRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.growth.campaign.fee.update";
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
                                                        		                                    	                   			private $biddingPrice;
    	                        
	public function setBiddingPrice($biddingPrice){
		$this->biddingPrice = $biddingPrice;
         $this->apiParas["biddingPrice"] = $biddingPrice;
	}

	public function getBiddingPrice(){
	  return $this->biddingPrice;
	}

                        	                   			private $biddingTarget;
    	                        
	public function setBiddingTarget($biddingTarget){
		$this->biddingTarget = $biddingTarget;
         $this->apiParas["biddingTarget"] = $biddingTarget;
	}

	public function getBiddingTarget(){
	  return $this->biddingTarget;
	}

                        	                   			private $biddingType;
    	                        
	public function setBiddingType($biddingType){
		$this->biddingType = $biddingType;
         $this->apiParas["biddingType"] = $biddingType;
	}

	public function getBiddingType(){
	  return $this->biddingType;
	}

                        	                   			private $campaignId;
    	                        
	public function setCampaignId($campaignId){
		$this->campaignId = $campaignId;
         $this->apiParas["campaignId"] = $campaignId;
	}

	public function getCampaignId(){
	  return $this->campaignId;
	}

                        	                   			private $reservePrice;
    	                        
	public function setReservePrice($reservePrice){
		$this->reservePrice = $reservePrice;
         $this->apiParas["reservePrice"] = $reservePrice;
	}

	public function getReservePrice(){
	  return $this->reservePrice;
	}

                                                                        		                                    	                        	                        	                        	                        	                        	                   			private $platformBusinessType;
    	                        
	public function setPlatformBusinessType($platformBusinessType){
		$this->platformBusinessType = $platformBusinessType;
         $this->apiParas["platformBusinessType"] = $platformBusinessType;
	}

	public function getPlatformBusinessType(){
	  return $this->platformBusinessType;
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





        
 

