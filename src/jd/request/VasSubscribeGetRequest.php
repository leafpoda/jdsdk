<?php
class VasSubscribeGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vas.subscribe.get";
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
                                    	                   			private $userName;
    	                                                            
	public function setUserName($userName){
		$this->userName = $userName;
         $this->apiParas["user_name"] = $userName;
	}

	public function getUserName(){
	  return $this->userName;
	}

                        	                   			private $itemCode;
    	                                                            
	public function setItemCode($itemCode){
		$this->itemCode = $itemCode;
         $this->apiParas["item_code"] = $itemCode;
	}

	public function getItemCode(){
	  return $this->itemCode;
	}

                        	                        	                   			private $openIdBuyer;
    	                                                                        
	public function setOpenIdBuyer($openIdBuyer){
		$this->openIdBuyer = $openIdBuyer;
         $this->apiParas["open_id_buyer"] = $openIdBuyer;
	}

	public function getOpenIdBuyer(){
	  return $this->openIdBuyer;
	}

}





        
 

