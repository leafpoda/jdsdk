<?php
class FinanceopenapiSubproductZtbalanceGetRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.financeopenapi.subproduct.ztbalance.get";
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
                                    	                        	                        	                        	                        	                        	                        	                   			private $subPin;
    	                        
	public function setSubPin($subPin){
		$this->subPin = $subPin;
         $this->apiParas["subPin"] = $subPin;
	}

	public function getSubPin(){
	  return $this->subPin;
	}

}





        
 

