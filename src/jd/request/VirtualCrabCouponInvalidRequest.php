<?php
class VirtualCrabCouponInvalidRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.virtual.crabCoupon.invalid";
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
                                                        		                                    	                   			private $merchantId;
    	                        
	public function setMerchantId($merchantId){
		$this->merchantId = $merchantId;
         $this->apiParas["merchantId"] = $merchantId;
	}

	public function getMerchantId(){
	  return $this->merchantId;
	}

                        	                   			private $merchantName;
    	                        
	public function setMerchantName($merchantName){
		$this->merchantName = $merchantName;
         $this->apiParas["merchantName"] = $merchantName;
	}

	public function getMerchantName(){
	  return $this->merchantName;
	}

                        	                   			private $couponNumber;
    	                        
	public function setCouponNumber($couponNumber){
		$this->couponNumber = $couponNumber;
         $this->apiParas["couponNumber"] = $couponNumber;
	}

	public function getCouponNumber(){
	  return $this->couponNumber;
	}

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
         $this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                        	                   			private $invalidTime;
    	                        
	public function setInvalidTime($invalidTime){
		$this->invalidTime = $invalidTime;
         $this->apiParas["invalidTime"] = $invalidTime;
	}

	public function getInvalidTime(){
	  return $this->invalidTime;
	}

                        	                   			private $invalidSerialNumber;
    	                        
	public function setInvalidSerialNumber($invalidSerialNumber){
		$this->invalidSerialNumber = $invalidSerialNumber;
         $this->apiParas["invalidSerialNumber"] = $invalidSerialNumber;
	}

	public function getInvalidSerialNumber(){
	  return $this->invalidSerialNumber;
	}

                                                    	                        	                        	}





        
 

