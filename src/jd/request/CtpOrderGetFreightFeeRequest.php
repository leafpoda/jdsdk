<?php
class CtpOrderGetFreightFeeRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ctp.order.getFreightFee";
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
    private  $protocol;

    public function setProtocol($protocol){
        $this->apiParas['protocol'] = $protocol;
    }
    public function getProtocol(){
        return $this->apiParas['protocol'];
    }
    private  $apiFreightFeeParam;

    public function setApiFreightFeeParam($apiFreightFeeParam){
        $this->apiParas['apiFreightFeeParam'] = $apiFreightFeeParam;
    }
    public function getApiFreightFeeParam(){
        return $this->apiParas['apiFreightFeeParam'];
    }
}

?>