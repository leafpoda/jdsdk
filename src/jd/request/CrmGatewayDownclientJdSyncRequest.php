<?php
class CrmGatewayDownclientJdSyncRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.crm.gateway.downclient.jdSync";
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
                                                        		                                    	                   			private $birthday;
    	                        
	public function setBirthday($birthday){
		$this->birthday = $birthday;
         $this->apiParas["birthday"] = $birthday;
	}

	public function getBirthday(){
	  return $this->birthday;
	}

                        	                   			private $gender;
    	                        
	public function setGender($gender){
		$this->gender = $gender;
         $this->apiParas["gender"] = $gender;
	}

	public function getGender(){
	  return $this->gender;
	}

                        	                   			private $city;
    	                        
	public function setCity($city){
		$this->city = $city;
         $this->apiParas["city"] = $city;
	}

	public function getCity(){
	  return $this->city;
	}

                        	                   			private $cardNo;
    	                        
	public function setCardNo($cardNo){
		$this->cardNo = $cardNo;
         $this->apiParas["cardNo"] = $cardNo;
	}

	public function getCardNo(){
	  return $this->cardNo;
	}

                        	                   			private $version;
    	                        
	public function setVersion($version){
		$this->version = $version;
         $this->apiParas["version"] = $version;
	}

	public function getVersion(){
	  return $this->version;
	}

                        	                   			private $phoneNo;
    	                        
	public function setPhoneNo($phoneNo){
		$this->phoneNo = $phoneNo;
         $this->apiParas["phoneNo"] = $phoneNo;
	}

	public function getPhoneNo(){
	  return $this->phoneNo;
	}

                        	                   			private $customerLevel;
    	                        
	public function setCustomerLevel($customerLevel){
		$this->customerLevel = $customerLevel;
         $this->apiParas["customerLevel"] = $customerLevel;
	}

	public function getCustomerLevel(){
	  return $this->customerLevel;
	}

                        	                   			private $extend;
    	                        
	public function setExtend($extend){
		$this->extend = $extend;
         $this->apiParas["extend"] = $extend;
	}

	public function getExtend(){
	  return $this->extend;
	}

                        	                   			private $province;
    	                        
	public function setProvince($province){
		$this->province = $province;
         $this->apiParas["province"] = $province;
	}

	public function getProvince(){
	  return $this->province;
	}

                        	                   			private $street;
    	                        
	public function setStreet($street){
		$this->street = $street;
         $this->apiParas["street"] = $street;
	}

	public function getStreet(){
	  return $this->street;
	}

                        	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                        	                   			private $openId;
    	                        
	public function setOpenId($openId){
		$this->openId = $openId;
         $this->apiParas["openId"] = $openId;
	}

	public function getOpenId(){
	  return $this->openId;
	}

                        	                        	                   			private $appKey;
    	                        
	public function setAppKey($appKey){
		$this->appKey = $appKey;
         $this->apiParas["appKey"] = $appKey;
	}

	public function getAppKey(){
	  return $this->appKey;
	}

                            }





        
 

