<?php
class OrderCompanyStatusServiceChangeOrderStatusRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.orderCompanyStatusService.changeOrderStatus";
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
                                                        		                                    	                   			private $txPrice;
    	                        
	public function setTxPrice($txPrice){
		$this->txPrice = $txPrice;
         $this->apiParas["txPrice"] = $txPrice;
	}

	public function getTxPrice(){
	  return $this->txPrice;
	}

                        	                        	                   			private $appOrderId;
    	                        
	public function setAppOrderId($appOrderId){
		$this->appOrderId = $appOrderId;
         $this->apiParas["appOrderId"] = $appOrderId;
	}

	public function getAppOrderId(){
	  return $this->appOrderId;
	}

                        	                   			private $currentStatus;
    	                        
	public function setCurrentStatus($currentStatus){
		$this->currentStatus = $currentStatus;
         $this->apiParas["currentStatus"] = $currentStatus;
	}

	public function getCurrentStatus(){
	  return $this->currentStatus;
	}

                        	                   			private $productInfos;
    	                        
	public function setProductInfos($productInfos){
		$this->productInfos = $productInfos;
         $this->apiParas["productInfos"] = $productInfos;
	}

	public function getProductInfos(){
	  return $this->productInfos;
	}

                        	                        	                   			private $description;
    	                        
	public function setDescription($description){
		$this->description = $description;
         $this->apiParas["description"] = $description;
	}

	public function getDescription(){
	  return $this->description;
	}

                        	                        	                   			private $secondPrice;
    	                        
	public function setSecondPrice($secondPrice){
		$this->secondPrice = $secondPrice;
         $this->apiParas["secondPrice"] = $secondPrice;
	}

	public function getSecondPrice(){
	  return $this->secondPrice;
	}

                        	                   			private $firstPrice;
    	                        
	public function setFirstPrice($firstPrice){
		$this->firstPrice = $firstPrice;
         $this->apiParas["firstPrice"] = $firstPrice;
	}

	public function getFirstPrice(){
	  return $this->firstPrice;
	}

                            }





        
 

