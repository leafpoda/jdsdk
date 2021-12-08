<?php
class VirtualCrabCouponRollbackRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.virtual.crabCoupon.rollback";
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

                        	                   			private $rollbackTime;
    	                        
	public function setRollbackTime($rollbackTime){
		$this->rollbackTime = $rollbackTime;
         $this->apiParas["rollbackTime"] = $rollbackTime;
	}

	public function getRollbackTime(){
	  return $this->rollbackTime;
	}

                        	                   			private $rollbackSerialNumber;
    	                        
	public function setRollbackSerialNumber($rollbackSerialNumber){
		$this->rollbackSerialNumber = $rollbackSerialNumber;
         $this->apiParas["rollbackSerialNumber"] = $rollbackSerialNumber;
	}

	public function getRollbackSerialNumber(){
	  return $this->rollbackSerialNumber;
	}

                                                    	                        	                        	}





        
 

