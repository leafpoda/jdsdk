<?php
class AdsDspRtbTpBatchDeleteCampaignRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.dsp.rtb.tp.batchDeleteCampaign";
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
                                                        		                                                             	                        	                                                                                                                                                                                                                                                                                                               private $campaignIds;
                              public function setCampaignIds($campaignIds ){
                 $this->campaignIds=$campaignIds;
                 $this->apiParas["campaignIds"] = $campaignIds;
              }

              public function getCampaignIds(){
              	return $this->campaignIds;
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

                            }





        
 

