<?php
class GrowthScenarioCampaignListRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.growth.scenario.campaign.list";
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
    private  $queryParam;

    public function setQueryParam($queryParam){
        $this->apiParas['queryParam'] = $queryParam;
    }
    public function getQueryParam(){
        return $this->apiParas['queryParam'];
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