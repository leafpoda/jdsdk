<?php
class AdsDspRtbKeywordSaveRankBatchRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.dsp.rtb.keyword.saveRankBatch";
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
    private  $keywordVO;

    public function setKeywordVO($keywordVO){
        $this->apiParas['keywordVO'] = $keywordVO;
    }
    public function getKeywordVO(){
        return $this->apiParas['keywordVO'];
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