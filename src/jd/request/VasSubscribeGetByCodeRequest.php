<?php
class VasSubscribeGetByCodeRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vas.subscribe.getByCode";
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
                                    	                        	                   			private $itemCode;
    	                                                            
	public function setItemCode($itemCode){
		$this->itemCode = $itemCode;
         $this->apiParas["item_code"] = $itemCode;
	}

	public function getItemCode(){
	  return $this->itemCode;
	}

                        	}





        
 

