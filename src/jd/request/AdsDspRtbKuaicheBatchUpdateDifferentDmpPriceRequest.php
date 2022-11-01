<?php
class AdsDspRtbKuaicheBatchUpdateDifferentDmpPriceRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.dsp.rtb.kuaiche.batchUpdateDifferentDmpPrice";
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
    private  $dmpVOS;

    public function setDmpVOS($dmpVOS){
        $this->apiParas['dmpVOS'] = $dmpVOS;
    }
    public function getDmpVOS(){
        return $this->apiParas['dmpVOS'];
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