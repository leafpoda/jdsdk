<?php
class AdsIbgUniversalJosServiceIndexTrendRequest
{


	private $apiParas = array();

	public function getApiMethodName(){
	  return "jingdong.ads.ibg.UniversalJosService.index.trend";
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
                                    	                        	                        	                   			private $authType;

	public function setAuthType($authType){
		$this->authType = $authType;
         $this->apiParas["authType"] = $authType;
	}

	public function getAuthType(){
	  return $this->authType;
	}

                        	                   			private $accessPin;

	public function setAccessPin($accessPin){
		$this->accessPin = $accessPin;
         $this->apiParas["accessPin"] = $accessPin;
	}

	public function getAccessPin(){
	  return $this->accessPin;
	}

                        	                        	                        	                        	                        	                   			private $startDay;

	public function setStartDay($startDay){
		$this->startDay = $startDay;
         $this->apiParas["startDay"] = $startDay;
	}

	public function getStartDay(){
	  return $this->startDay;
	}

                        	                   			private $endDay;

	public function setEndDay($endDay){
		$this->endDay = $endDay;
         $this->apiParas["endDay"] = $endDay;
	}

	public function getEndDay(){
	  return $this->endDay;
	}

                        	                   			private $clickOrOrderDay;

	public function setClickOrOrderDay($clickOrOrderDay){
		$this->clickOrOrderDay = $clickOrOrderDay;
         $this->apiParas["clickOrOrderDay"] = $clickOrOrderDay;
	}

	public function getClickOrOrderDay(){
	  return $this->clickOrOrderDay;
	}

                        	                   			private $clickOrOrderCaliber;

	public function setClickOrOrderCaliber($clickOrOrderCaliber){
		$this->clickOrOrderCaliber = $clickOrOrderCaliber;
         $this->apiParas["clickOrOrderCaliber"] = $clickOrOrderCaliber;
	}

	public function getClickOrOrderCaliber(){
	  return $this->clickOrOrderCaliber;
	}

                        	                   			private $orderStatusCategory;

	public function setOrderStatusCategory($orderStatusCategory){
		$this->orderStatusCategory = $orderStatusCategory;
         $this->apiParas["orderStatusCategory"] = $orderStatusCategory;
	}

	public function getOrderStatusCategory(){
	  return $this->orderStatusCategory;
	}

                        	                   			private $giftFlag;

	public function setGiftFlag($giftFlag){
		$this->giftFlag = $giftFlag;
         $this->apiParas["giftFlag"] = $giftFlag;
	}

	public function getGiftFlag(){
	  return $this->giftFlag;
	}

                        	                   			private $skuBrandId;

	public function setSkuBrandId($skuBrandId){
		$this->skuBrandId = $skuBrandId;
         $this->apiParas["skuBrandId"] = $skuBrandId;
	}

	public function getSkuBrandId(){
	  return $this->skuBrandId;
	}

                        	                   			private $skuCid3;

	public function setSkuCid3($skuCid3){
		$this->skuCid3 = $skuCid3;
         $this->apiParas["skuCid3"] = $skuCid3;
	}

	public function getSkuCid3(){
	  return $this->skuCid3;
	}

                        	                   			private $deliveryType;

	public function setDeliveryType($deliveryType){
		$this->deliveryType = $deliveryType;
         $this->apiParas["deliveryType"] = $deliveryType;
	}

	public function getDeliveryType(){
	  return $this->deliveryType;
	}

                        	                   			private $businessTypes;

	public function setBusinessTypes($businessTypes){
		$this->businessTypes = $businessTypes;
         $this->apiParas["businessTypes"] = $businessTypes;
	}

	public function getBusinessTypes(){
	  return $this->businessTypes;
	}

                        	                        	}








