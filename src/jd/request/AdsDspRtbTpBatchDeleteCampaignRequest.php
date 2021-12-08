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

    private  $version;

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
                                                                                                                                                                                        		                                    	                        	                        	                        	                            }





        
 

