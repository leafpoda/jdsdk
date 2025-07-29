<?php
class AdsDspRtbadFacedCampaignUpdateCampaignBudgetBatchRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.dsp.rtbad.faced.campaign.updateCampaignBudgetBatch";
	}
	
	public function getApiParas(){
        if(empty($this->apiParas)){
	        return "{}";
	    }
		return $this->apiParas;
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
    private  $data;

    public function setData($data){
        $this->apiParas['data'] = $data;
    }
    public function getData(){
        return $this->apiParas['data'];
    }
    private  $system;

    public function setSystem($system){
        $this->apiParas['system'] = $system;
    }
    public function getSystem(){
        return $this->apiParas['system'];
    }
}

?>