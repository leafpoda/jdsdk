<?php
class FwMarketPaymentoutRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.fw.market.paymentout";
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
    private  $submitOrderOutRequest;

    public function setSubmitOrderOutRequest($submitOrderOutRequest){
        $this->apiParas['submitOrderOutRequest'] = $submitOrderOutRequest;
    }
    public function getSubmitOrderOutRequest(){
        return $this->apiParas['submitOrderOutRequest'];
    }
}

?>