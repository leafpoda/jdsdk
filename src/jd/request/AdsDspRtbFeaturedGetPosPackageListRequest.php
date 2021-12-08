<?php
class AdsDspRtbFeaturedGetPosPackageListRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.dsp.rtb.featured.getPosPackageList";
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

    private  $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
                                                        		                                    	                   			private $campaignType;
    	                        
	public function setCampaignType($campaignType){
		$this->campaignType = $campaignType;
         $this->apiParas["campaignType"] = $campaignType;
	}

	public function getCampaignType(){
	  return $this->campaignType;
	}

                        	                        	                   			private $device;
    	                        
	public function setDevice($device){
		$this->device = $device;
         $this->apiParas["device"] = $device;
	}

	public function getDevice(){
	  return $this->device;
	}

                                                                        		                                    	                        	                        	                        	                            }





        
 

