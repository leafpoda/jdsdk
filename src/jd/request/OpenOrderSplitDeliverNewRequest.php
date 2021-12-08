<?php
class OpenOrderSplitDeliverNewRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.open.order.splitDeliverNew";
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
                                                        		                                    	                   			private $orderAmount;
    	                        
	public function setOrderAmount($orderAmount){
		$this->orderAmount = $orderAmount;
         $this->apiParas["orderAmount"] = $orderAmount;
	}

	public function getOrderAmount(){
	  return $this->orderAmount;
	}

                        	                   			private $sendTime;
    	                        
	public function setSendTime($sendTime){
		$this->sendTime = $sendTime;
         $this->apiParas["sendTime"] = $sendTime;
	}

	public function getSendTime(){
	  return $this->sendTime;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                                                private $commonName;
                              public function setCommonName($commonName ){
                 $this->commonName=$commonName;
                 $this->apiParas["commonName"] = $commonName;
              }

              public function getCommonName(){
              	return $this->commonName;
              }
                                                                                                                                                                                                                                                                                                                       private $packageSpec;
                              public function setPackageSpec($packageSpec ){
                 $this->packageSpec=$packageSpec;
                 $this->apiParas["packageSpec"] = $packageSpec;
              }

              public function getPackageSpec(){
              	return $this->packageSpec;
              }
                                                                                                                                                                                                                                                                                                                       private $manufacturer;
                              public function setManufacturer($manufacturer ){
                 $this->manufacturer=$manufacturer;
                 $this->apiParas["manufacturer"] = $manufacturer;
              }

              public function getManufacturer(){
              	return $this->manufacturer;
              }
                                                                                                                                                                                                                                                                                                                       private $venderSku;
                              public function setVenderSku($venderSku ){
                 $this->venderSku=$venderSku;
                 $this->apiParas["venderSku"] = $venderSku;
              }

              public function getVenderSku(){
              	return $this->venderSku;
              }
                                                                                                                                                                                                                                                                                                                       private $skuName;
                              public function setSkuName($skuName ){
                 $this->skuName=$skuName;
                 $this->apiParas["skuName"] = $skuName;
              }

              public function getSkuName(){
              	return $this->skuName;
              }
                                                                                                                                                                                                                                                                                                                       private $skuPlace;
                              public function setSkuPlace($skuPlace ){
                 $this->skuPlace=$skuPlace;
                 $this->apiParas["skuPlace"] = $skuPlace;
              }

              public function getSkuPlace(){
              	return $this->skuPlace;
              }
                                                                                                                                                                                                                                                                                                                       private $skuCount;
                              public function setSkuCount($skuCount ){
                 $this->skuCount=$skuCount;
                 $this->apiParas["skuCount"] = $skuCount;
              }

              public function getSkuCount(){
              	return $this->skuCount;
              }
                                                                                                                                                                                                                                                                                                                       private $approvalNumber;
                              public function setApprovalNumber($approvalNumber ){
                 $this->approvalNumber=$approvalNumber;
                 $this->apiParas["approvalNumber"] = $approvalNumber;
              }

              public function getApprovalNumber(){
              	return $this->approvalNumber;
              }
                                                                                                                                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                                                                        		                                    	                   			private $deliveryId;
    	                        
	public function setDeliveryId($deliveryId){
		$this->deliveryId = $deliveryId;
         $this->apiParas["deliveryId"] = $deliveryId;
	}

	public function getDeliveryId(){
	  return $this->deliveryId;
	}

                        	                   			private $shipmentType;
    	                        
	public function setShipmentType($shipmentType){
		$this->shipmentType = $shipmentType;
         $this->apiParas["shipmentType"] = $shipmentType;
	}

	public function getShipmentType(){
	  return $this->shipmentType;
	}

                        	                   			private $logiCompany;
    	                        
	public function setLogiCompany($logiCompany){
		$this->logiCompany = $logiCompany;
         $this->apiParas["logiCompany"] = $logiCompany;
	}

	public function getLogiCompany(){
	  return $this->logiCompany;
	}

                        	                   			private $customerCode;
    	                        
	public function setCustomerCode($customerCode){
		$this->customerCode = $customerCode;
         $this->apiParas["customerCode"] = $customerCode;
	}

	public function getCustomerCode(){
	  return $this->customerCode;
	}

                        	                   			private $logiNo;
    	                        
	public function setLogiNo($logiNo){
		$this->logiNo = $logiNo;
         $this->apiParas["logiNo"] = $logiNo;
	}

	public function getLogiNo(){
	  return $this->logiNo;
	}

                                                    	                   			private $json;
    	                        
	public function setJson($json){
		$this->json = $json;
         $this->apiParas["json"] = $json;
	}

	public function getJson(){
	  return $this->json;
	}

                        	}





        
 

