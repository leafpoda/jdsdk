<?php
class JzoneAddCartItemByPinRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jzone.addCartItemByPin";
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
                                    	                        	                   			private $pin;
    	                        
	public function setPin($pin){
		$this->pin = $pin;
         $this->apiParas["pin"] = $pin;
	}

	public function getPin(){
	  return $this->pin;
	}

                                            		                                    	                   			private $itemId;
    	                        
	public function setItemId($itemId){
		$this->itemId = $itemId;
         $this->apiParas["itemId"] = $itemId;
	}

	public function getItemId(){
	  return $this->itemId;
	}

                        	                   			private $num;
    	                        
	public function setNum($num){
		$this->num = $num;
         $this->apiParas["num"] = $num;
	}

	public function getNum(){
	  return $this->num;
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





        
 

