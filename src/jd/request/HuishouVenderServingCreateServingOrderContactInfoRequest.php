<?php
class HuishouVenderServingCreateServingOrderContactInfoRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.huishou.vender.serving.createServingOrderContactInfo";
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
                                                        		                                    	                   			private $serverTime;
    	                        
	public function setServerTime($serverTime){
		$this->serverTime = $serverTime;
         $this->apiParas["serverTime"] = $serverTime;
	}

	public function getServerTime(){
	  return $this->serverTime;
	}

                        	                   			private $serviceOrderId;
    	                        
	public function setServiceOrderId($serviceOrderId){
		$this->serviceOrderId = $serviceOrderId;
         $this->apiParas["serviceOrderId"] = $serviceOrderId;
	}

	public function getServiceOrderId(){
	  return $this->serviceOrderId;
	}

                                                    	}





        
 

