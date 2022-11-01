<?php
class AdsDspRtbKeywordBootRecommendListRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.dsp.rtb.keyword.boot.recommend.list";
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
                                                        		                                    	                   			private $keyWord;
    	                        
	public function setKeyWord($keyWord){
		$this->keyWord = $keyWord;
         $this->apiParas["keyWord"] = $keyWord;
	}

	public function getKeyWord(){
	  return $this->keyWord;
	}

                        	                   			private $adGroupId;
    	                        
	public function setAdGroupId($adGroupId){
		$this->adGroupId = $adGroupId;
         $this->apiParas["adGroupId"] = $adGroupId;
	}

	public function getAdGroupId(){
	  return $this->adGroupId;
	}

                                                                        		                                    	                        	                        	                   			private $venderId;
    	                        
	public function setVenderId($venderId){
		$this->venderId = $venderId;
         $this->apiParas["venderId"] = $venderId;
	}

	public function getVenderId(){
	  return $this->venderId;
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

                        	                   			private $josRemoteIp;
    	                        
	public function setJosRemoteIp($josRemoteIp){
		$this->josRemoteIp = $josRemoteIp;
         $this->apiParas["josRemoteIp"] = $josRemoteIp;
	}

	public function getJosRemoteIp(){
	  return $this->josRemoteIp;
	}

                        	                            }





        
 

