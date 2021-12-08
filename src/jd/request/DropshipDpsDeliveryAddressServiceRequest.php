<?php
class DropshipDpsDeliveryAddressServiceRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dropship.dps.deliveryAddressService";
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
                                    	                                            		                                    	                   			private $addressId;
    	                        
	public function setAddressId($addressId){
		$this->addressId = $addressId;
         $this->apiParas["addressId"] = $addressId;
	}

	public function getAddressId(){
	  return $this->addressId;
	}

                            }





        
 

