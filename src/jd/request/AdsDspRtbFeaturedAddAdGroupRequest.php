<?php
class AdsDspRtbFeaturedAddAdGroupRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.dsp.rtb.featured.addAdGroup";
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
                                                        		                                    	                   			private $fee;
    	                        
	public function setFee($fee){
		$this->fee = $fee;
         $this->apiParas["fee"] = $fee;
	}

	public function getFee(){
	  return $this->fee;
	}

                        	                   			private $campaignId;
    	                        
	public function setCampaignId($campaignId){
		$this->campaignId = $campaignId;
         $this->apiParas["campaignId"] = $campaignId;
	}

	public function getCampaignId(){
	  return $this->campaignId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $positions;
                              public function setPositions($positions ){
                 $this->positions=$positions;
                 $this->apiParas["positions"] = $positions;
              }

              public function getPositions(){
              	return $this->positions;
              }
                                                                                                                                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                        	                                                                        		                                    	                        	                        	                        	                            }





        
 

