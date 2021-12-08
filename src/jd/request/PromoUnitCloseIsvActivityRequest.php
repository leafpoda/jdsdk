<?php
class PromoUnitCloseIsvActivityRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.promo.unit.closeIsvActivity";
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
                                    	                   			private $isvActivityId;
    	                        
	public function setIsvActivityId($isvActivityId){
		$this->isvActivityId = $isvActivityId;
         $this->apiParas["isvActivityId"] = $isvActivityId;
	}

	public function getIsvActivityId(){
	  return $this->isvActivityId;
	}

                        	}





        
 

