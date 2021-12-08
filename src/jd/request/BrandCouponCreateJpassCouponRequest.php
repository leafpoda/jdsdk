<?php
class BrandCouponCreateJpassCouponRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.brand.coupon.createJpassCoupon";
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
                                    	                                            		                                    	                   			private $couponNum;
    	                        
	public function setCouponNum($couponNum){
		$this->couponNum = $couponNum;
         $this->apiParas["couponNum"] = $couponNum;
	}

	public function getCouponNum(){
	  return $this->couponNum;
	}

                        	                   			private $couponName;
    	                        
	public function setCouponName($couponName){
		$this->couponName = $couponName;
         $this->apiParas["couponName"] = $couponName;
	}

	public function getCouponName(){
	  return $this->couponName;
	}

                        	                        	                   			private $coverImg;
    	                        
	public function setCoverImg($coverImg){
		$this->coverImg = $coverImg;
         $this->apiParas["coverImg"] = $coverImg;
	}

	public function getCoverImg(){
	  return $this->coverImg;
	}

                        	                   			private $endDate;
    	                        
	public function setEndDate($endDate){
		$this->endDate = $endDate;
         $this->apiParas["endDate"] = $endDate;
	}

	public function getEndDate(){
	  return $this->endDate;
	}

                        	                   			private $sellType;
    	                        
	public function setSellType($sellType){
		$this->sellType = $sellType;
         $this->apiParas["sellType"] = $sellType;
	}

	public function getSellType(){
	  return $this->sellType;
	}

                        	                   			private $couponAmount;
    	                        
	public function setCouponAmount($couponAmount){
		$this->couponAmount = $couponAmount;
         $this->apiParas["couponAmount"] = $couponAmount;
	}

	public function getCouponAmount(){
	  return $this->couponAmount;
	}

                        	                   			private $effectiveType;
    	                        
	public function setEffectiveType($effectiveType){
		$this->effectiveType = $effectiveType;
         $this->apiParas["effectiveType"] = $effectiveType;
	}

	public function getEffectiveType(){
	  return $this->effectiveType;
	}

                        	                   			private $couponType;
    	                        
	public function setCouponType($couponType){
		$this->couponType = $couponType;
         $this->apiParas["couponType"] = $couponType;
	}

	public function getCouponType(){
	  return $this->couponType;
	}

                        	                   			private $perCoupon;
    	                        
	public function setPerCoupon($perCoupon){
		$this->perCoupon = $perCoupon;
         $this->apiParas["perCoupon"] = $perCoupon;
	}

	public function getPerCoupon(){
	  return $this->perCoupon;
	}

                        	                   			private $quota;
    	                        
	public function setQuota($quota){
		$this->quota = $quota;
         $this->apiParas["quota"] = $quota;
	}

	public function getQuota(){
	  return $this->quota;
	}

                        	                   			private $coverIntroduce;
    	                        
	public function setCoverIntroduce($coverIntroduce){
		$this->coverIntroduce = $coverIntroduce;
         $this->apiParas["coverIntroduce"] = $coverIntroduce;
	}

	public function getCoverIntroduce(){
	  return $this->coverIntroduce;
	}

                        	                   			private $rfId;
    	                        
	public function setRfId($rfId){
		$this->rfId = $rfId;
         $this->apiParas["rfId"] = $rfId;
	}

	public function getRfId(){
	  return $this->rfId;
	}

                        	                   			private $startDate;
    	                        
	public function setStartDate($startDate){
		$this->startDate = $startDate;
         $this->apiParas["startDate"] = $startDate;
	}

	public function getStartDate(){
	  return $this->startDate;
	}

                        	                   			private $notice;
    	                        
	public function setNotice($notice){
		$this->notice = $notice;
         $this->apiParas["notice"] = $notice;
	}

	public function getNotice(){
	  return $this->notice;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $storeId;
                              public function setStoreId($storeId ){
                 $this->storeId=$storeId;
                 $this->apiParas["storeId"] = $storeId;
              }

              public function getStoreId(){
              	return $this->storeId;
              }
                                                                                                                                                                 	                        	                                                                                                                                                                                                                                                                                                               private $skuId;
                              public function setSkuId($skuId ){
                 $this->skuId=$skuId;
                 $this->apiParas["skuId"] = $skuId;
              }

              public function getSkuId(){
              	return $this->skuId;
              }
                                                                                                                }





        
 

