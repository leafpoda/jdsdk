<?php
class PaipaiSopOrderJsfServiceOrderCancelRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.paipai.sopOrderJsfService.orderCancel";
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
                                                        		                                    	                        	                   			private $appKey;
    	                        
	public function setAppKey($appKey){
		$this->appKey = $appKey;
         $this->apiParas["appKey"] = $appKey;
	}

	public function getAppKey(){
	  return $this->appKey;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $userId;
    	                        
	public function setUserId($userId){
		$this->userId = $userId;
         $this->apiParas["userId"] = $userId;
	}

	public function getUserId(){
	  return $this->userId;
	}

                        	                   			private $orderCancelReason;
    	                        
	public function setOrderCancelReason($orderCancelReason){
		$this->orderCancelReason = $orderCancelReason;
         $this->apiParas["orderCancelReason"] = $orderCancelReason;
	}

	public function getOrderCancelReason(){
	  return $this->orderCancelReason;
	}

                            }





        
 

