<?php
class PromoTokenTokenuserAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.promo.token.tokenuser.add";
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
                                                        		                                                        		                                    	                   			private $tokenId;
    	                        
	public function setTokenId($tokenId){
		$this->tokenId = $tokenId;
         $this->apiParas["tokenId"] = $tokenId;
	}

	public function getTokenId(){
	  return $this->tokenId;
	}

                        	                   			private $userPin;
    	                        
	public function setUserPin($userPin){
		$this->userPin = $userPin;
         $this->apiParas["userPin"] = $userPin;
	}

	public function getUserPin(){
	  return $this->userPin;
	}

                        	                   			private $timeStart;
    	                        
	public function setTimeStart($timeStart){
		$this->timeStart = $timeStart;
         $this->apiParas["timeStart"] = $timeStart;
	}

	public function getTimeStart(){
	  return $this->timeStart;
	}

                        	                   			private $timeEnd;
    	                        
	public function setTimeEnd($timeEnd){
		$this->timeEnd = $timeEnd;
         $this->apiParas["timeEnd"] = $timeEnd;
	}

	public function getTimeEnd(){
	  return $this->timeEnd;
	}

                        	                   			private $openIdBuyer;
    	                                                                        
	public function setOpenIdBuyer($openIdBuyer){
		$this->openIdBuyer = $openIdBuyer;
         $this->apiParas["open_id_buyer"] = $openIdBuyer;
	}

	public function getOpenIdBuyer(){
	  return $this->openIdBuyer;
	}

                                                    	                   			private $existUpdate;
    	                        
	public function setExistUpdate($existUpdate){
		$this->existUpdate = $existUpdate;
         $this->apiParas["existUpdate"] = $existUpdate;
	}

	public function getExistUpdate(){
	  return $this->existUpdate;
	}

                        	                   			private $secretKey;
    	                        
	public function setSecretKey($secretKey){
		$this->secretKey = $secretKey;
         $this->apiParas["secretKey"] = $secretKey;
	}

	public function getSecretKey(){
	  return $this->secretKey;
	}

                                            		                                    	                   			private $appCode;
    	                        
	public function setAppCode($appCode){
		$this->appCode = $appCode;
         $this->apiParas["appCode"] = $appCode;
	}

	public function getAppCode(){
	  return $this->appCode;
	}

                        	                   			private $authKey;
    	                        
	public function setAuthKey($authKey){
		$this->authKey = $authKey;
         $this->apiParas["authKey"] = $authKey;
	}

	public function getAuthKey(){
	  return $this->authKey;
	}

                                                        }





        
 

