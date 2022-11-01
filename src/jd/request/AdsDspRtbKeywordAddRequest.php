<?php
class AdsDspRtbKeywordAddRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.dsp.rtb.keyword.add";
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
                                                        		                                    	                   			private $groupId;
    	                        
	public function setGroupId($groupId){
		$this->groupId = $groupId;
         $this->apiParas["groupId"] = $groupId;
	}

	public function getGroupId(){
	  return $this->groupId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $keywordName;
                              public function setKeywordName($keywordName ){
                 $this->keywordName=$keywordName;
                 $this->apiParas["keywordName"] = $keywordName;
              }

              public function getKeywordName(){
              	return $this->keywordName;
              }
                                                                                                                                                                                                                                                                                                                                              private $keywordPrice;
                              public function setKeywordPrice($keywordPrice ){
                 $this->keywordPrice=$keywordPrice;
                 $this->apiParas["keywordPrice"] = $keywordPrice;
              }

              public function getKeywordPrice(){
              	return $this->keywordPrice;
              }
                                                                                                                                                                                                                                                                                                                                              private $type;
                              public function setType($type ){
                 $this->type=$type;
                 $this->apiParas["type"] = $type;
              }

              public function getType(){
              	return $this->type;
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





        
 

