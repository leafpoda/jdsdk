<?php
class AdsDspRtbKeywordPriceUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.dsp.rtb.keyword.price.update";
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
                                                        		                                                             	                        	                                                                                                                                                                                                                                                                                                               private $ids;
                              public function setIds($ids ){
                 $this->ids=$ids;
                 $this->apiParas["ids"] = $ids;
              }

              public function getIds(){
              	return $this->ids;
              }
                                                                                                                                        	                   			private $campaignType;
    	                        
	public function setCampaignType($campaignType){
		$this->campaignType = $campaignType;
         $this->apiParas["campaignType"] = $campaignType;
	}

	public function getCampaignType(){
	  return $this->campaignType;
	}

                        	                   			private $putType;
    	                        
	public function setPutType($putType){
		$this->putType = $putType;
         $this->apiParas["putType"] = $putType;
	}

	public function getPutType(){
	  return $this->putType;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $type;
                              public function setType($type ){
                 $this->type=$type;
                 $this->apiParas["type"] = $type;
              }

              public function getType(){
              	return $this->type;
              }
                                                                                                                                                                                                                                                                                                                                              private $change;
                              public function setChange($change ){
                 $this->change=$change;
                 $this->apiParas["change"] = $change;
              }

              public function getChange(){
              	return $this->change;
              }
                                                                                                                                                                                                                                                                                                                                              private $keywordPrice;
                              public function setKeywordPrice($keywordPrice ){
                 $this->keywordPrice=$keywordPrice;
                 $this->apiParas["keywordPrice"] = $keywordPrice;
              }

              public function getKeywordPrice(){
              	return $this->keywordPrice;
              }
                                                                                                                                                                                                                                                                                                                                              private $devType;
                              public function setDevType($devType ){
                 $this->devType=$devType;
                 $this->apiParas["devType"] = $devType;
              }

              public function getDevType(){
              	return $this->devType;
              }
                                                                                                                                        	                   			private $groupId;
    	                        
	public function setGroupId($groupId){
		$this->groupId = $groupId;
         $this->apiParas["groupId"] = $groupId;
	}

	public function getGroupId(){
	  return $this->groupId;
	}

                                                                        		                                    	                        	                        	                        	                            }





        
 

