<?php
class AdsDspRtbFeaturedBindCrowdRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.dsp.rtb.featured.bindCrowd";
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
                                                        		                                    	                   			private $adGroupId;
    	                        
	public function setAdGroupId($adGroupId){
		$this->adGroupId = $adGroupId;
         $this->apiParas["adGroupId"] = $adGroupId;
	}

	public function getAdGroupId(){
	  return $this->adGroupId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $crowdId;
                              public function setCrowdId($crowdId ){
                 $this->crowdId=$crowdId;
                 $this->apiParas["crowdId"] = $crowdId;
              }

              public function getCrowdId(){
              	return $this->crowdId;
              }
                                                                                                                                                                                                                                                                                                                                              private $adGroupPrice;
                              public function setAdGroupPrice($adGroupPrice ){
                 $this->adGroupPrice=$adGroupPrice;
                 $this->apiParas["adGroupPrice"] = $adGroupPrice;
              }

              public function getAdGroupPrice(){
              	return $this->adGroupPrice;
              }
                                                                                                                                                                                                                                                                                                                                              private $isUsed;
                              public function setIsUsed($isUsed ){
                 $this->isUsed=$isUsed;
                 $this->apiParas["isUsed"] = $isUsed;
              }

              public function getIsUsed(){
              	return $this->isUsed;
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

                        	                        	                   			private $platformBusinessType;
    	                        
	public function setPlatformBusinessType($platformBusinessType){
		$this->platformBusinessType = $platformBusinessType;
         $this->apiParas["platformBusinessType"] = $platformBusinessType;
	}

	public function getPlatformBusinessType(){
	  return $this->platformBusinessType;
	}

                        	                            }





        
 

