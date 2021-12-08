<?php
class CtpOrderSubmitOrderRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ctp.order.submitOrder";
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
    private  $param;

    public function setParam($param){
        $this->apiParas['param'] = $param;
    }
    public function getParam(){
        return $this->apiParas['param'];
    }
}

?>