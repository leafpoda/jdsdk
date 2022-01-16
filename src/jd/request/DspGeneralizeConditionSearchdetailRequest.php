<?php
class DspGeneralizeConditionSearchdetailRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.generalize.condition.searchdetail";
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
                                    	                   			private $token;
    	                        
	public function setToken($token){
		$this->token = $token;
         $this->apiParas["token"] = $token;
	}

	public function getToken(){
	  return $this->token;
	}

                                            		                                    	                        	                        	                   			private $keyValue;
    	                        
	public function setKeyValue($keyValue){
		$this->keyValue = $keyValue;
         $this->apiParas["keyValue"] = $keyValue;
	}

	public function getKeyValue(){
	  return $this->keyValue;
	}

                        	                   			private $equipment;
    	                        
	public function setEquipment($equipment){
		$this->equipment = $equipment;
         $this->apiParas["equipment"] = $equipment;
	}

	public function getEquipment(){
	  return $this->equipment;
	}

                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $type;
    	                        
	public function setType($type){
		$this->type = $type;
         $this->apiParas["type"] = $type;
	}

	public function getType(){
	  return $this->type;
	}

                        	                   			private $areaValue;
    	                        
	public function setAreaValue($areaValue){
		$this->areaValue = $areaValue;
         $this->apiParas["areaValue"] = $areaValue;
	}

	public function getAreaValue(){
	  return $this->areaValue;
	}

                            }





        
 

