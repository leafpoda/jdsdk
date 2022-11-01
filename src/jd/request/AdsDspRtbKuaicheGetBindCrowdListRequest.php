<?php
class AdsDspRtbKuaicheGetBindCrowdListRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.dsp.rtb.kuaiche.getBindCrowdList";
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
    private  $dmpVO;

    public function setDmpVO($dmpVO){
        $this->apiParas['dmpVO'] = $dmpVO;
    }
    public function getDmpVO(){
        return $this->apiParas['dmpVO'];
    }
    private  $paramExt;

    public function setParamExt($paramExt){
        $this->apiParas['paramExt'] = $paramExt;
    }
    public function getParamExt(){
        return $this->apiParas['paramExt'];
    }
}

?>