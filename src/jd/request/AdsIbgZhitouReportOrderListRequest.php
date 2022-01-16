<?php
class AdsIbgZhitouReportOrderListRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.ibg.zhitou.report.orderList";
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
                                                        		                                    	                   			private $orderType;
    	                        
	public function setOrderType($orderType){
		$this->orderType = $orderType;
         $this->apiParas["orderType"] = $orderType;
	}

	public function getOrderType(){
	  return $this->orderType;
	}

                        	                   			private $orderStatus;
    	                        
	public function setOrderStatus($orderStatus){
		$this->orderStatus = $orderStatus;
         $this->apiParas["orderStatus"] = $orderStatus;
	}

	public function getOrderStatus(){
	  return $this->orderStatus;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $endClickDay;
    	                        
	public function setEndClickDay($endClickDay){
		$this->endClickDay = $endClickDay;
         $this->apiParas["endClickDay"] = $endClickDay;
	}

	public function getEndClickDay(){
	  return $this->endClickDay;
	}

                        	                   			private $adGroupId;
    	                        
	public function setAdGroupId($adGroupId){
		$this->adGroupId = $adGroupId;
         $this->apiParas["adGroupId"] = $adGroupId;
	}

	public function getAdGroupId(){
	  return $this->adGroupId;
	}

                        	                   			private $paymentType;
    	                        
	public function setPaymentType($paymentType){
		$this->paymentType = $paymentType;
         $this->apiParas["paymentType"] = $paymentType;
	}

	public function getPaymentType(){
	  return $this->paymentType;
	}

                        	                   			private $mediaGroupId;
    	                        
	public function setMediaGroupId($mediaGroupId){
		$this->mediaGroupId = $mediaGroupId;
         $this->apiParas["mediaGroupId"] = $mediaGroupId;
	}

	public function getMediaGroupId(){
	  return $this->mediaGroupId;
	}

                        	                   			private $startOrderDay;
    	                        
	public function setStartOrderDay($startOrderDay){
		$this->startOrderDay = $startOrderDay;
         $this->apiParas["startOrderDay"] = $startOrderDay;
	}

	public function getStartOrderDay(){
	  return $this->startOrderDay;
	}

                        	                   			private $endOrderDay;
    	                        
	public function setEndOrderDay($endOrderDay){
		$this->endOrderDay = $endOrderDay;
         $this->apiParas["endOrderDay"] = $endOrderDay;
	}

	public function getEndOrderDay(){
	  return $this->endOrderDay;
	}

                        	                   			private $giftFlag;
    	                        
	public function setGiftFlag($giftFlag){
		$this->giftFlag = $giftFlag;
         $this->apiParas["giftFlag"] = $giftFlag;
	}

	public function getGiftFlag(){
	  return $this->giftFlag;
	}

                        	                   			private $campaignId;
    	                        
	public function setCampaignId($campaignId){
		$this->campaignId = $campaignId;
         $this->apiParas["campaignId"] = $campaignId;
	}

	public function getCampaignId(){
	  return $this->campaignId;
	}

                        	                   			private $mediaType;
    	                        
	public function setMediaType($mediaType){
		$this->mediaType = $mediaType;
         $this->apiParas["mediaType"] = $mediaType;
	}

	public function getMediaType(){
	  return $this->mediaType;
	}

                        	                   			private $startClickDay;
    	                        
	public function setStartClickDay($startClickDay){
		$this->startClickDay = $startClickDay;
         $this->apiParas["startClickDay"] = $startClickDay;
	}

	public function getStartClickDay(){
	  return $this->startClickDay;
	}

                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                                                                        		                                    	                        	                   			private $requestFrom;
    	                        
	public function setRequestFrom($requestFrom){
		$this->requestFrom = $requestFrom;
         $this->apiParas["requestFrom"] = $requestFrom;
	}

	public function getRequestFrom(){
	  return $this->requestFrom;
	}

                            }





        
 

