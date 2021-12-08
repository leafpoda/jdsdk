<?php
class AdsDspRtbTpBatchUpdateCampaignStatusRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.dsp.rtb.tp.batchUpdateCampaignStatus";
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
                                                                                                                                        	                   			private $status;
    	                        
	public function setStatus($status){
		$this->status = $status;
         $this->apiParas["status"] = $status;
	}

	public function getStatus(){
	  return $this->status;
	}

                                                                        		                                    	                        	                        	                        	                            }





        
 

