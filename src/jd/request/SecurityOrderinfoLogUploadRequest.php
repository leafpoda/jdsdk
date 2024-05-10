<?php
class SecurityOrderinfoLogUploadRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.security.orderinfo.log.upload";
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
    private  $orderInfoLog;

    public function setOrderInfoLog($orderInfoLog){
        $this->apiParas['orderInfoLog'] = $orderInfoLog;
    }
    public function getOrderInfoLog(){
        return $this->apiParas['orderInfoLog'];
    }
}

?>