<?php
class PaipaiSopOrderJsfServiceCreateOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.paipai.sopOrderJsfService.createOrder";
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
                                                        		                                    	                        	                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $orderType;
    	                        
	public function setOrderType($orderType){
		$this->orderType = $orderType;
         $this->apiParas["orderType"] = $orderType;
	}

	public function getOrderType(){
	  return $this->orderType;
	}

                        	                   			private $createVia;
    	                        
	public function setCreateVia($createVia){
		$this->createVia = $createVia;
         $this->apiParas["createVia"] = $createVia;
	}

	public function getCreateVia(){
	  return $this->createVia;
	}

                        	                   			private $josOpenId;
    	                        
	public function setJosOpenId($josOpenId){
		$this->josOpenId = $josOpenId;
         $this->apiParas["josOpenId"] = $josOpenId;
	}

	public function getJosOpenId(){
	  return $this->josOpenId;
	}

                        	                   			private $ppUin;
    	                        
	public function setPpUin($ppUin){
		$this->ppUin = $ppUin;
         $this->apiParas["ppUin"] = $ppUin;
	}

	public function getPpUin(){
	  return $this->ppUin;
	}

                        	                   			private $orderAmount;
    	                        
	public function setOrderAmount($orderAmount){
		$this->orderAmount = $orderAmount;
         $this->apiParas["orderAmount"] = $orderAmount;
	}

	public function getOrderAmount(){
	  return $this->orderAmount;
	}

                        	                   			private $discountAmount;
    	                        
	public function setDiscountAmount($discountAmount){
		$this->discountAmount = $discountAmount;
         $this->apiParas["discountAmount"] = $discountAmount;
	}

	public function getDiscountAmount(){
	  return $this->discountAmount;
	}

                        	                   			private $shippingAmount;
    	                        
	public function setShippingAmount($shippingAmount){
		$this->shippingAmount = $shippingAmount;
         $this->apiParas["shippingAmount"] = $shippingAmount;
	}

	public function getShippingAmount(){
	  return $this->shippingAmount;
	}

                        	                   			private $payAmount;
    	                        
	public function setPayAmount($payAmount){
		$this->payAmount = $payAmount;
         $this->apiParas["payAmount"] = $payAmount;
	}

	public function getPayAmount(){
	  return $this->payAmount;
	}

                        	                   			private $shippingName;
    	                        
	public function setShippingName($shippingName){
		$this->shippingName = $shippingName;
         $this->apiParas["shippingName"] = $shippingName;
	}

	public function getShippingName(){
	  return $this->shippingName;
	}

                        	                   			private $shippingPhone;
    	                        
	public function setShippingPhone($shippingPhone){
		$this->shippingPhone = $shippingPhone;
         $this->apiParas["shippingPhone"] = $shippingPhone;
	}

	public function getShippingPhone(){
	  return $this->shippingPhone;
	}

                        	                   			private $shippingAddress;
    	                        
	public function setShippingAddress($shippingAddress){
		$this->shippingAddress = $shippingAddress;
         $this->apiParas["shippingAddress"] = $shippingAddress;
	}

	public function getShippingAddress(){
	  return $this->shippingAddress;
	}

                        	                   			private $payAccountType;
    	                        
	public function setPayAccountType($payAccountType){
		$this->payAccountType = $payAccountType;
         $this->apiParas["payAccountType"] = $payAccountType;
	}

	public function getPayAccountType(){
	  return $this->payAccountType;
	}

                        	                   			private $payAccount;
    	                        
	public function setPayAccount($payAccount){
		$this->payAccount = $payAccount;
         $this->apiParas["payAccount"] = $payAccount;
	}

	public function getPayAccount(){
	  return $this->payAccount;
	}

                        	                   			private $orderCreateDt;
    	                        
	public function setOrderCreateDt($orderCreateDt){
		$this->orderCreateDt = $orderCreateDt;
         $this->apiParas["orderCreateDt"] = $orderCreateDt;
	}

	public function getOrderCreateDt(){
	  return $this->orderCreateDt;
	}

                        	                   			private $userId;
    	                        
	public function setUserId($userId){
		$this->userId = $userId;
         $this->apiParas["userId"] = $userId;
	}

	public function getUserId(){
	  return $this->userId;
	}

                        	                   			private $sopOrderProductReqListJson;
    	                        
	public function setSopOrderProductReqListJson($sopOrderProductReqListJson){
		$this->sopOrderProductReqListJson = $sopOrderProductReqListJson;
         $this->apiParas["sopOrderProductReqListJson"] = $sopOrderProductReqListJson;
	}

	public function getSopOrderProductReqListJson(){
	  return $this->sopOrderProductReqListJson;
	}

                        	                   			private $realAmount;
    	                        
	public function setRealAmount($realAmount){
		$this->realAmount = $realAmount;
         $this->apiParas["realAmount"] = $realAmount;
	}

	public function getRealAmount(){
	  return $this->realAmount;
	}

                            }





        
 

