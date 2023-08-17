<?php
class JmOrderGetPayUrlRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jm.order.getPayUrl";
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
                                                        		                                    	                        	                   			private $serviceCode;
    	                        
	public function setServiceCode($serviceCode){
		$this->serviceCode = $serviceCode;
         $this->apiParas["serviceCode"] = $serviceCode;
	}

	public function getServiceCode(){
	  return $this->serviceCode;
	}

                        	                   			private $accessCode;
    	                        
	public function setAccessCode($accessCode){
		$this->accessCode = $accessCode;
         $this->apiParas["accessCode"] = $accessCode;
	}

	public function getAccessCode(){
	  return $this->accessCode;
	}

                        	                   			private $orderNum;
    	                        
	public function setOrderNum($orderNum){
		$this->orderNum = $orderNum;
         $this->apiParas["orderNum"] = $orderNum;
	}

	public function getOrderNum(){
	  return $this->orderNum;
	}

                        	                   			private $skuId;
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                   			private $clientIp;
    	                        
	public function setClientIp($clientIp){
		$this->clientIp = $clientIp;
         $this->apiParas["clientIp"] = $clientIp;
	}

	public function getClientIp(){
	  return $this->clientIp;
	}

                            }





        
 

