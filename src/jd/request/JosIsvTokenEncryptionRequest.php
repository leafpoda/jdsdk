<?php
class JosIsvTokenEncryptionRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jos.isv.token.encryption";
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
                                    	                   			private $tokenStr;
    	                        
	public function setTokenStr($tokenStr){
		$this->tokenStr = $tokenStr;
         $this->apiParas["tokenStr"] = $tokenStr;
	}

	public function getTokenStr(){
	  return $this->tokenStr;
	}

}





        
 

