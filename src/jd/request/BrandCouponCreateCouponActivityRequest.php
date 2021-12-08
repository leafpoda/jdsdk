<?php
class BrandCouponCreateCouponActivityRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.brand.coupon.createCouponActivity";
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
                                    	                                            		                                    	                   			private $activityName;
    	                        
	public function setActivityName($activityName){
		$this->activityName = $activityName;
         $this->apiParas["activityName"] = $activityName;
	}

	public function getActivityName(){
	  return $this->activityName;
	}

                        	                   			private $startActivityDate;
    	                        
	public function setStartActivityDate($startActivityDate){
		$this->startActivityDate = $startActivityDate;
         $this->apiParas["startActivityDate"] = $startActivityDate;
	}

	public function getStartActivityDate(){
	  return $this->startActivityDate;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $couponId;
                              public function setCouponId($couponId ){
                 $this->couponId=$couponId;
                 $this->apiParas["couponId"] = $couponId;
              }

              public function getCouponId(){
              	return $this->couponId;
              }
                                                                                                                                        	                   			private $endActivityDate;
    	                        
	public function setEndActivityDate($endActivityDate){
		$this->endActivityDate = $endActivityDate;
         $this->apiParas["endActivityDate"] = $endActivityDate;
	}

	public function getEndActivityDate(){
	  return $this->endActivityDate;
	}

                            }





        
 

