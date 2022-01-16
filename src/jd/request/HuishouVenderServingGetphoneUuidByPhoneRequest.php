<?php
class HuishouVenderServingGetphoneUuidByPhoneRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.huishou.vender.serving.getphoneUuidByPhone";
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
                                                        		                                    	                   			private $userPhone;
    	                        
	public function setUserPhone($userPhone){
		$this->userPhone = $userPhone;
         $this->apiParas["userPhone"] = $userPhone;
	}

	public function getUserPhone(){
	  return $this->userPhone;
	}

                                                    	}





        
 

