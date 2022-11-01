<?php
class AdsDspMaterialOpenapiDeleteByMaterialIdRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.dsp.material.openapi.deleteByMaterialId";
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
                                                        		                                    	                        	                        	                   			private $authType;
    	                        
	public function setAuthType($authType){
		$this->authType = $authType;
         $this->apiParas["authType"] = $authType;
	}

	public function getAuthType(){
	  return $this->authType;
	}

                        	                   			private $accessPin;
    	                        
	public function setAccessPin($accessPin){
		$this->accessPin = $accessPin;
         $this->apiParas["accessPin"] = $accessPin;
	}

	public function getAccessPin(){
	  return $this->accessPin;
	}

                        	                        	                        	                                                    	                   			private $materialId;
    	                        
	public function setMaterialId($materialId){
		$this->materialId = $materialId;
         $this->apiParas["materialId"] = $materialId;
	}

	public function getMaterialId(){
	  return $this->materialId;
	}

}





        
 

