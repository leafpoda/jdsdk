<?php
class AdsIbgHaitouJosServiceNormalItemUpdateRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.ibg.HaitouJosService.normalItemUpdate";
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
    private  $InputFeeVO;

    public function setInputFeeVO($InputFeeVO){
        $this->apiParas['InputFeeVO'] = $InputFeeVO;
    }
    public function getInputFeeVO(){
        return $this->apiParas['InputFeeVO'];
    }
    private  $openApiSysDto;

    public function setOpenApiSysDto($openApiSysDto){
        $this->apiParas['openApiSysDto'] = $openApiSysDto;
    }
    public function getOpenApiSysDto(){
        return $this->apiParas['openApiSysDto'];
    }
}

?>