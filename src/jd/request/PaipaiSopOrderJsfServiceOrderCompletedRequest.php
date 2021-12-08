<?php
class PaipaiSopOrderJsfServiceOrderCompletedRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.paipai.sopOrderJsfService.orderCompleted";
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

                        	                   			private $notifyUrl;
    	                        
	public function setNotifyUrl($notifyUrl){
		$this->notifyUrl = $notifyUrl;
         $this->apiParas["notifyUrl"] = $notifyUrl;
	}

	public function getNotifyUrl(){
	  return $this->notifyUrl;
	}

                        	                   			private $settlementAmount;
    	                        
	public function setSettlementAmount($settlementAmount){
		$this->settlementAmount = $settlementAmount;
         $this->apiParas["settlementAmount"] = $settlementAmount;
	}

	public function getSettlementAmount(){
	  return $this->settlementAmount;
	}

                            }





        
 

