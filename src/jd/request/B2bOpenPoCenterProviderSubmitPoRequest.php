<?php
class B2bOpenPoCenterProviderSubmitPoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.b2b.open.PoCenterProvider.submitPo";
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
    private  $op;

    public function setOp($op){
        $this->apiParas['op'] = $op;
    }
    public function getOp(){
        return $this->apiParas['op'];
    }
    private  $systemSource;

    public function setSystemSource($systemSource){
        $this->apiParas['systemSource'] = $systemSource;
    }
    public function getSystemSource(){
        return $this->apiParas['systemSource'];
    }
    private  $poReq;

    public function setPoReq($poReq){
        $this->apiParas['poReq'] = $poReq;
    }
    public function getPoReq(){
        return $this->apiParas['poReq'];
    }
    private  $cartReq;

    public function setCartReq($cartReq){
        $this->apiParas['cartReq'] = $cartReq;
    }
    public function getCartReq(){
        return $this->apiParas['cartReq'];
    }
}

?>