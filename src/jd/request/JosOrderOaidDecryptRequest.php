<?php
class JosOrderOaidDecryptRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jos.order.oaid.decrypt";
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
    private  $getReceiverInfoListReqVO;

    public function setGetReceiverInfoListReqVO($getReceiverInfoListReqVO){
        $this->apiParas['getReceiverInfoListReqVO'] = $getReceiverInfoListReqVO;
    }
    public function getGetReceiverInfoListReqVO(){
        return $this->apiParas['getReceiverInfoListReqVO'];
    }
}

?>