<?php
class StationCooCouponSendRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.station.coo.coupon.send";
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
                                    	                   			private $data;
    	                        
	public function setData($data){
		$this->data = $data;
         $this->apiParas["data"] = $data;
	}

	public function getData(){
	  return $this->data;
	}

}





        
 

