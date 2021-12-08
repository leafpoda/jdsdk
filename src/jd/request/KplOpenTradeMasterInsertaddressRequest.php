<?php
class KplOpenTradeMasterInsertaddressRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.trade.master.insertaddress";
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
    private  $client;

    public function setClient($client){
        $this->apiParas['client'] = $client;
    }
    public function getClient(){
        return $this->apiParas['client'];
    }
    private  $addressDomain;

    public function setAddressDomain($addressDomain){
        $this->apiParas['addressDomain'] = $addressDomain;
    }
    public function getAddressDomain(){
        return $this->apiParas['addressDomain'];
    }
    private  $isDefaul;

    public function setIsDefaul($isDefaul){
        $this->apiParas['isDefaul'] = $isDefaul;
    }
    public function getIsDefaul(){
        return $this->apiParas['isDefaul'];
    }
}

?>