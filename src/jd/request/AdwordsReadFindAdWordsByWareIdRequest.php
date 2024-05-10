<?php
class AdwordsReadFindAdWordsByWareIdRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.adwords.read.findAdWordsByWareId";
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
    private  $client_info;

    public function setClient_info($client_info){
        $this->apiParas['client_info'] = $client_info;
    }
    public function getClient_info(){
        return $this->apiParas['client_info'];
    }
    private  $wareId;

    public function setWareId($wareId){
        $this->apiParas['wareId'] = $wareId;
    }
    public function getWareId(){
        return $this->apiParas['wareId'];
    }
}

?>