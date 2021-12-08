<?php
class AdsDspRtbTpAddAdGroupRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.dsp.rtb.tp.addAdGroup";
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
                                                        		                                    	                   			private $campaignId;
    	                        
	public function setCampaignId($campaignId){
		$this->campaignId = $campaignId;
         $this->apiParas["campaignId"] = $campaignId;
	}

	public function getCampaignId(){
	  return $this->campaignId;
	}

                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $feeDecimal;
    	                        
	public function setFeeDecimal($feeDecimal){
		$this->feeDecimal = $feeDecimal;
         $this->apiParas["feeDecimal"] = $feeDecimal;
	}

	public function getFeeDecimal(){
	  return $this->feeDecimal;
	}

                        	                   			private $recommendAutomatedBiddingType;
    	                        
	public function setRecommendAutomatedBiddingType($recommendAutomatedBiddingType){
		$this->recommendAutomatedBiddingType = $recommendAutomatedBiddingType;
         $this->apiParas["recommendAutomatedBiddingType"] = $recommendAutomatedBiddingType;
	}

	public function getRecommendAutomatedBiddingType(){
	  return $this->recommendAutomatedBiddingType;
	}

                        	                   			private $recommendTcpaBid;
    	                        
	public function setRecommendTcpaBid($recommendTcpaBid){
		$this->recommendTcpaBid = $recommendTcpaBid;
         $this->apiParas["recommendTcpaBid"] = $recommendTcpaBid;
	}

	public function getRecommendTcpaBid(){
	  return $this->recommendTcpaBid;
	}

                                                                        		                                    	                        	                        	                        	                            }





        
 

