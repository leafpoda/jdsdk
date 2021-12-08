<?php
class AdsDspRtbFeaturedBindMaterialRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.dsp.rtb.featured.bindMaterial";
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
                                                        		                                                             	                        	                                                                                                                                                                                                                                                                                                               private $materialIds;
                              public function setMaterialIds($materialIds ){
                 $this->materialIds=$materialIds;
                 $this->apiParas["materialIds"] = $materialIds;
              }

              public function getMaterialIds(){
              	return $this->materialIds;
              }
                                                                                                                                                                 	                        	                                                                                                                                                                                                                                                                                                               private $adGroupIds;
                              public function setAdGroupIds($adGroupIds ){
                 $this->adGroupIds=$adGroupIds;
                 $this->apiParas["adGroupIds"] = $adGroupIds;
              }

              public function getAdGroupIds(){
              	return $this->adGroupIds;
              }
                                                                                                                                        	                                                                        		                                    	                        	                        	                        	                            }





        
 

