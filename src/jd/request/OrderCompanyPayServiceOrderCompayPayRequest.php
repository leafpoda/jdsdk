<?php
class OrderCompanyPayServiceOrderCompayPayRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.orderCompanyPayService.orderCompayPay";
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
                                                        		                                    	                   			private $payOrderType;
    	                        
	public function setPayOrderType($payOrderType){
		$this->payOrderType = $payOrderType;
         $this->apiParas["payOrderType"] = $payOrderType;
	}

	public function getPayOrderType(){
	  return $this->payOrderType;
	}

                        	                   			private $payType;
    	                        
	public function setPayType($payType){
		$this->payType = $payType;
         $this->apiParas["payType"] = $payType;
	}

	public function getPayType(){
	  return $this->payType;
	}

                        	                   			private $payAmount;
    	                        
	public function setPayAmount($payAmount){
		$this->payAmount = $payAmount;
         $this->apiParas["payAmount"] = $payAmount;
	}

	public function getPayAmount(){
	  return $this->payAmount;
	}

                        	                        	                   			private $appOrderId;
    	                        
	public function setAppOrderId($appOrderId){
		$this->appOrderId = $appOrderId;
         $this->apiParas["appOrderId"] = $appOrderId;
	}

	public function getAppOrderId(){
	  return $this->appOrderId;
	}

                        	                        	                        	                   			private $payTradeNo;
    	                        
	public function setPayTradeNo($payTradeNo){
		$this->payTradeNo = $payTradeNo;
         $this->apiParas["payTradeNo"] = $payTradeNo;
	}

	public function getPayTradeNo(){
	  return $this->payTradeNo;
	}

                            }





        
 

