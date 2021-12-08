<?php
class DspKcCampainDeleteRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.kc.campain.delete";
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
                                                        		                                    	                        	                        	                                                 	                        	                                                                                                                                                                                                                                                                                                               private $compaignId;
                              public function setCompaignId($compaignId ){
                 $this->compaignId=$compaignId;
                 $this->apiParas["compaignId"] = $compaignId;
              }

              public function getCompaignId(){
              	return $this->compaignId;
              }
                                                                                                                                            }





        
 

