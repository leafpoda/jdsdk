<?php
class DspCpdOfflineLockInfoCallBackRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.cpd.offline.lockInfoCallBack";
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
    private  $dealInfo;

    public function setDealInfo($dealInfo){
        $this->apiParas['dealInfo'] = $dealInfo;
    }
    public function getDealInfo(){
        return $this->apiParas['dealInfo'];
    }
}

?>