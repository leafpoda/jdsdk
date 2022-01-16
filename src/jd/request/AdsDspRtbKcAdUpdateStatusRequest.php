<?php
class AdsDspRtbKcAdUpdateStatusRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.dsp.rtb.kc.ad.updateStatus";
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
                                                        		                                    	                   			private $operateType;
    	                        
	public function setOperateType($operateType){
		$this->operateType = $operateType;
         $this->apiParas["operateType"] = $operateType;
	}

	public function getOperateType(){
	  return $this->operateType;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $adIds;
                              public function setAdIds($adIds ){
                 $this->adIds=$adIds;
                 $this->apiParas["adIds"] = $adIds;
              }

              public function getAdIds(){
              	return $this->adIds;
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





        
 

