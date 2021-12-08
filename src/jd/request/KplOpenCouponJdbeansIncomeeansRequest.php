<?php
class KplOpenCouponJdbeansIncomeeansRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.coupon.jdbeans.incomeeans";
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
    private  $clientIp;

    public function setClientIp($clientIp){
        $this->apiParas['clientIp'] = $clientIp;
    }
    public function getClientIp(){
        return $this->apiParas['clientIp'];
    }
    private  $amount;

    public function setAmount($amount){
        $this->apiParas['amount'] = $amount;
    }
    public function getAmount(){
        return $this->apiParas['amount'];
    }
    private  $businessId;

    public function setBusinessId($businessId){
        $this->apiParas['businessId'] = $businessId;
    }
    public function getBusinessId(){
        return $this->apiParas['businessId'];
    }
    private  $activityId;

    public function setActivityId($activityId){
        $this->apiParas['activityId'] = $activityId;
    }
    public function getActivityId(){
        return $this->apiParas['activityId'];
    }
    private  $token;

    public function setToken($token){
        $this->apiParas['token'] = $token;
    }
    public function getToken(){
        return $this->apiParas['token'];
    }
}

?>