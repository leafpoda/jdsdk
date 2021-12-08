<?php
class CtpAfsLogisticsPostBackLogisticsBillParamRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ctp.afs.logistics.postBackLogisticsBillParam";
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
    private  $ctpProtocol;

    public function setCtpProtocol($ctpProtocol){
        $this->apiParas['ctpProtocol'] = $ctpProtocol;
    }
    public function getCtpProtocol(){
        return $this->apiParas['ctpProtocol'];
    }
    private  $logisticsBillParam;

    public function setLogisticsBillParam($logisticsBillParam){
        $this->apiParas['logisticsBillParam'] = $logisticsBillParam;
    }
    public function getLogisticsBillParam(){
        return $this->apiParas['logisticsBillParam'];
    }
}

?>