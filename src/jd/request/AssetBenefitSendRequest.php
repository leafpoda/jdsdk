<?php
class AssetBenefitSendRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.asset.benefit.send";
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
                                                        		                                    	                        	                   			private $typeId;
    	                                                            
	public function setTypeId($typeId){
		$this->typeId = $typeId;
         $this->apiParas["type_id"] = $typeId;
	}

	public function getTypeId(){
	  return $this->typeId;
	}

                        	                   			private $itemId;
    	                                                            
	public function setItemId($itemId){
		$this->itemId = $itemId;
         $this->apiParas["item_id"] = $itemId;
	}

	public function getItemId(){
	  return $this->itemId;
	}

                        	                   			private $quantity;
    	                        
	public function setQuantity($quantity){
		$this->quantity = $quantity;
         $this->apiParas["quantity"] = $quantity;
	}

	public function getQuantity(){
	  return $this->quantity;
	}

                        	                   			private $userPin;
    	                                                            
	public function setUserPin($userPin){
		$this->userPin = $userPin;
         $this->apiParas["user_pin"] = $userPin;
	}

	public function getUserPin(){
	  return $this->userPin;
	}

                        	                   			private $token;
    	                        
	public function setToken($token){
		$this->token = $token;
         $this->apiParas["token"] = $token;
	}

	public function getToken(){
	  return $this->token;
	}

                        	                   			private $requestId;
    	                                                            
	public function setRequestId($requestId){
		$this->requestId = $requestId;
         $this->apiParas["request_id"] = $requestId;
	}

	public function getRequestId(){
	  return $this->requestId;
	}

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
         $this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                        	                   			private $ip;
    	                        
	public function setIp($ip){
		$this->ip = $ip;
         $this->apiParas["ip"] = $ip;
	}

	public function getIp(){
	  return $this->ip;
	}

                        	                        	                        	                   			private $openIdBuyer;
    	                                                                        
	public function setOpenIdBuyer($openIdBuyer){
		$this->openIdBuyer = $openIdBuyer;
         $this->apiParas["open_id_buyer"] = $openIdBuyer;
	}

	public function getOpenIdBuyer(){
	  return $this->openIdBuyer;
	}

                            }





        
 

