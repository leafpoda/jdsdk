<?php
class GrowthCampaignBudgetUpdateRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.growth.campaign.budget.update";
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
                                                        		                                    	                   			private $dayBudget;
    	                        
	public function setDayBudget($dayBudget){
		$this->dayBudget = $dayBudget;
         $this->apiParas["dayBudget"] = $dayBudget;
	}

	public function getDayBudget(){
	  return $this->dayBudget;
	}

                        	                   			private $campaignId;
    	                        
	public function setCampaignId($campaignId){
		$this->campaignId = $campaignId;
         $this->apiParas["campaignId"] = $campaignId;
	}

	public function getCampaignId(){
	  return $this->campaignId;
	}

                                                                        		                                    	                   			private $platformBusinessType;
    	                        
	public function setPlatformBusinessType($platformBusinessType){
		$this->platformBusinessType = $platformBusinessType;
         $this->apiParas["platformBusinessType"] = $platformBusinessType;
	}

	public function getPlatformBusinessType(){
	  return $this->platformBusinessType;
	}

                        	                        	                        	                        	                        	                        	                   			private $authType;
    	                        
	public function setAuthType($authType){
		$this->authType = $authType;
         $this->apiParas["authType"] = $authType;
	}

	public function getAuthType(){
	  return $this->authType;
	}

                        	                        	                   			private $accessPin;
    	                        
	public function setAccessPin($accessPin){
		$this->accessPin = $accessPin;
         $this->apiParas["accessPin"] = $accessPin;
	}

	public function getAccessPin(){
	  return $this->accessPin;
	}

                        	                        	                            }





        
 

