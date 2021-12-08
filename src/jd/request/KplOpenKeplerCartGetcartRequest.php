<?php
class KplOpenKeplerCartGetcartRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.kepler.cart.getcart";
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
    private  $userid;

    public function setUserid($userid){
        $this->apiParas['userid'] = $userid;
    }
    public function getUserid(){
        return $this->apiParas['userid'];
    }
    private  $locationid;

    public function setLocationid($locationid){
        $this->apiParas['locationid'] = $locationid;
    }
    public function getLocationid(){
        return $this->apiParas['locationid'];
    }
}

?>