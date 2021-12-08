<?php
class AdsDspRtbTpBatchDeleteAdRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.dsp.rtb.tp.batchDeleteAd";
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
                                                        		                                                             	                        	                                                                                                                                                                                                                                                                                                               private $adIds;
                              public function setAdIds($adIds ){
                 $this->adIds=$adIds;
                 $this->apiParas["adIds"] = $adIds;
              }

              public function getAdIds(){
              	return $this->adIds;
              }
                                                                                                                                                                                        		                                    	                        	                        	                        	                            }





        
 

