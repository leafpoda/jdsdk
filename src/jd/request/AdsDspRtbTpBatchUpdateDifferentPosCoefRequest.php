<?php
class AdsDspRtbTpBatchUpdateDifferentPosCoefRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.dsp.rtb.tp.batchUpdateDifferentPosCoef";
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
    private  $posPackageVOS;

    public function setPosPackageVOS($posPackageVOS){
        $this->apiParas['posPackageVOS'] = $posPackageVOS;
    }
    public function getPosPackageVOS(){
        return $this->apiParas['posPackageVOS'];
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