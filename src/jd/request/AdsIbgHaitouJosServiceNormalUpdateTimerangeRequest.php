<?php
class AdsIbgHaitouJosServiceNormalUpdateTimerangeRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.ibg.HaitouJosService.normalUpdateTimerange";
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
    private  $campaignVO;

    public function setCampaignVO($campaignVO){
        $this->apiParas['campaignVO'] = $campaignVO;
    }
    public function getCampaignVO(){
        return $this->apiParas['campaignVO'];
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