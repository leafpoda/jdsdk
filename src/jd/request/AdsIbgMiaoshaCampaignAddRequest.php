<?php
class AdsIbgMiaoshaCampaignAddRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.ibg.miaosha.campaign.add";
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
                                                        		                                    	                   			private $dateRange;
    	                        
	public function setDateRange($dateRange){
		$this->dateRange = $dateRange;
         $this->apiParas["dateRange"] = $dateRange;
	}

	public function getDateRange(){
	  return $this->dateRange;
	}

                        	                   			private $dayBudget;
    	                        
	public function setDayBudget($dayBudget){
		$this->dayBudget = $dayBudget;
         $this->apiParas["dayBudget"] = $dayBudget;
	}

	public function getDayBudget(){
	  return $this->dayBudget;
	}

                                                                        		                                    	                        	                   			private $accessPin;
    	                        
	public function setAccessPin($accessPin){
		$this->accessPin = $accessPin;
         $this->apiParas["accessPin"] = $accessPin;
	}

	public function getAccessPin(){
	  return $this->accessPin;
	}

                        	                   			private $authType;
    	                        
	public function setAuthType($authType){
		$this->authType = $authType;
         $this->apiParas["authType"] = $authType;
	}

	public function getAuthType(){
	  return $this->authType;
	}

                        	                   			private $requestFrom;
    	                        
	public function setRequestFrom($requestFrom){
		$this->requestFrom = $requestFrom;
         $this->apiParas["requestFrom"] = $requestFrom;
	}

	public function getRequestFrom(){
	  return $this->requestFrom;
	}

                        	                            }





        
 

