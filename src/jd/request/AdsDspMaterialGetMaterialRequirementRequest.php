<?php
class AdsDspMaterialGetMaterialRequirementRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.dsp.material.getMaterialRequirement";
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
                                    	                                            		                                    	                   			private $campaignType;
    	                        
	public function setCampaignType($campaignType){
		$this->campaignType = $campaignType;
         $this->apiParas["campaignType"] = $campaignType;
	}

	public function getCampaignType(){
	  return $this->campaignType;
	}

                        	                   			private $mediaPositionId;
    	                        
	public function setMediaPositionId($mediaPositionId){
		$this->mediaPositionId = $mediaPositionId;
         $this->apiParas["mediaPositionId"] = $mediaPositionId;
	}

	public function getMediaPositionId(){
	  return $this->mediaPositionId;
	}

                        	                   			private $businessType;
    	                        
	public function setBusinessType($businessType){
		$this->businessType = $businessType;
         $this->apiParas["businessType"] = $businessType;
	}

	public function getBusinessType(){
	  return $this->businessType;
	}

                            }





        
 

