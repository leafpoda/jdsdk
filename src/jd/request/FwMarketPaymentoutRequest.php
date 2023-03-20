<?php
class FwMarketPaymentoutRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.fw.market.paymentout";
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
                                                        		                                    	                   			private $requestNo;
    	                        
	public function setRequestNo($requestNo){
		$this->requestNo = $requestNo;
         $this->apiParas["requestNo"] = $requestNo;
	}

	public function getRequestNo(){
	  return $this->requestNo;
	}

                        	                                                 	                        	                                                                                                                                                                                                                                                                                        private $activityId;
                              public function setActivityId($activityId ){
                 $this->activityId=$activityId;
                 $this->apiParas["activityId"] = $activityId;
              }

              public function getActivityId(){
              	return $this->activityId;
              }
                                                                                                                                                                                                                                                                                                                       private $appId;
                              public function setAppId($appId ){
                 $this->appId=$appId;
                 $this->apiParas["appId"] = $appId;
              }

              public function getAppId(){
              	return $this->appId;
              }
                                                                                                                                                                                                                                                                                                                       private $price;
                              public function setPrice($price ){
                 $this->price=$price;
                 $this->apiParas["price"] = $price;
              }

              public function getPrice(){
              	return $this->price;
              }
                                                                                                                                                                                                                                                                                                                       private $isMainService;
                              public function setIsMainService($isMainService ){
                 $this->isMainService=$isMainService;
                 $this->apiParas["isMainService"] = $isMainService;
              }

              public function getIsMainService(){
              	return $this->isMainService;
              }
                                                                                                                                                                                                                                                                                                                       private $serviceCycle;
                              public function setServiceCycle($serviceCycle ){
                 $this->serviceCycle=$serviceCycle;
                 $this->apiParas["serviceCycle"] = $serviceCycle;
              }

              public function getServiceCycle(){
              	return $this->serviceCycle;
              }
                                                                                                                                                                                                                                                                                                                       private $skuId;
                              public function setSkuId($skuId ){
                 $this->skuId=$skuId;
                 $this->apiParas["skuId"] = $skuId;
              }

              public function getSkuId(){
              	return $this->skuId;
              }
                                                                                                                                                                                                                                                                                                                       private $serviceCode;
                              public function setServiceCode($serviceCode ){
                 $this->serviceCode=$serviceCode;
                 $this->apiParas["serviceCode"] = $serviceCode;
              }

              public function getServiceCode(){
              	return $this->serviceCode;
              }
                                                                                                                                                                                                                                                                                                                       private $orderNum;
                              public function setOrderNum($orderNum ){
                 $this->orderNum=$orderNum;
                 $this->apiParas["orderNum"] = $orderNum;
              }

              public function getOrderNum(){
              	return $this->orderNum;
              }
                                                                                                                                                                                                                                                                                                                       private $itemCode;
                              public function setItemCode($itemCode ){
                 $this->itemCode=$itemCode;
                 $this->apiParas["itemCode"] = $itemCode;
              }

              public function getItemCode(){
              	return $this->itemCode;
              }
                                                                                                                                                                                                                                                                                                                       private $outOrderId;
                              public function setOutOrderId($outOrderId ){
                 $this->outOrderId=$outOrderId;
                 $this->apiParas["outOrderId"] = $outOrderId;
              }

              public function getOutOrderId(){
              	return $this->outOrderId;
              }
                                                                                                                                                            		                                    	                   			private $value1;
    	                        
	public function setValue1($value1){
		$this->value1 = $value1;
         $this->apiParas["value1"] = $value1;
	}

	public function getValue1(){
	  return $this->value1;
	}

                                                    	                   			private $resultPageType;
    	                        
	public function setResultPageType($resultPageType){
		$this->resultPageType = $resultPageType;
         $this->apiParas["resultPageType"] = $resultPageType;
	}

	public function getResultPageType(){
	  return $this->resultPageType;
	}

                        	                   			private $successUrl;
    	                        
	public function setSuccessUrl($successUrl){
		$this->successUrl = $successUrl;
         $this->apiParas["successUrl"] = $successUrl;
	}

	public function getSuccessUrl(){
	  return $this->successUrl;
	}

                        	                                            		                                    	                   			private $ip;
    	                        
	public function setIp($ip){
		$this->ip = $ip;
         $this->apiParas["ip"] = $ip;
	}

	public function getIp(){
	  return $this->ip;
	}

                                                        }





        
 

