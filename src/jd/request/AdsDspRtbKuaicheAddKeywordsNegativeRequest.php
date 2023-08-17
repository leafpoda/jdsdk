<?php
class AdsDspRtbKuaicheAddKeywordsNegativeRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.dsp.rtb.kuaiche.addKeywordsNegative";
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
    private  $keywordInputVO;

    public function setKeywordInputVO($keywordInputVO){
        $this->apiParas['keywordInputVO'] = $keywordInputVO;
    }
    public function getKeywordInputVO(){
        return $this->apiParas['keywordInputVO'];
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