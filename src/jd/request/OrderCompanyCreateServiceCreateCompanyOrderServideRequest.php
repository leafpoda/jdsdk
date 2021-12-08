<?php
class OrderCompanyCreateServiceCreateCompanyOrderServideRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.orderCompanyCreateService.createCompanyOrderServide";
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
                                                        		                                    	                   			private $appOrderId;
    	                        
	public function setAppOrderId($appOrderId){
		$this->appOrderId = $appOrderId;
         $this->apiParas["appOrderId"] = $appOrderId;
	}

	public function getAppOrderId(){
	  return $this->appOrderId;
	}

                        	                        	                   			private $pickupContactTel;
    	                        
	public function setPickupContactTel($pickupContactTel){
		$this->pickupContactTel = $pickupContactTel;
         $this->apiParas["pickupContactTel"] = $pickupContactTel;
	}

	public function getPickupContactTel(){
	  return $this->pickupContactTel;
	}

                        	                   			private $secondPrice;
    	                        
	public function setSecondPrice($secondPrice){
		$this->secondPrice = $secondPrice;
         $this->apiParas["secondPrice"] = $secondPrice;
	}

	public function getSecondPrice(){
	  return $this->secondPrice;
	}

                        	                   			private $payAccount;
    	                        
	public function setPayAccount($payAccount){
		$this->payAccount = $payAccount;
         $this->apiParas["payAccount"] = $payAccount;
	}

	public function getPayAccount(){
	  return $this->payAccount;
	}

                        	                   			private $pickupContactPerson;
    	                        
	public function setPickupContactPerson($pickupContactPerson){
		$this->pickupContactPerson = $pickupContactPerson;
         $this->apiParas["pickupContactPerson"] = $pickupContactPerson;
	}

	public function getPickupContactPerson(){
	  return $this->pickupContactPerson;
	}

                        	                        	                   			private $firstPrice;
    	                        
	public function setFirstPrice($firstPrice){
		$this->firstPrice = $firstPrice;
         $this->apiParas["firstPrice"] = $firstPrice;
	}

	public function getFirstPrice(){
	  return $this->firstPrice;
	}

                        	                   			private $txPrice;
    	                        
	public function setTxPrice($txPrice){
		$this->txPrice = $txPrice;
         $this->apiParas["txPrice"] = $txPrice;
	}

	public function getTxPrice(){
	  return $this->txPrice;
	}

                        	                        	                        	                   			private $pickupAddress;
    	                        
	public function setPickupAddress($pickupAddress){
		$this->pickupAddress = $pickupAddress;
         $this->apiParas["pickupAddress"] = $pickupAddress;
	}

	public function getPickupAddress(){
	  return $this->pickupAddress;
	}

                        	                   			private $productInfos;
    	                        
	public function setProductInfos($productInfos){
		$this->productInfos = $productInfos;
         $this->apiParas["productInfos"] = $productInfos;
	}

	public function getProductInfos(){
	  return $this->productInfos;
	}

                        	                            }





        
 

