<?php
class DataVenderSmsSignInfoModifyRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.data.vender.sms.sign.info.modify";
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
                                                        		                                    	                        	                        	                   			private $signature;
    	                        
	public function setSignature($signature){
		$this->signature = $signature;
         $this->apiParas["signature"] = $signature;
	}

	public function getSignature(){
	  return $this->signature;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $mobilePhone;
                              public function setMobilePhone($mobilePhone ){
                 $this->mobilePhone=$mobilePhone;
                 $this->apiParas["mobilePhone"] = $mobilePhone;
              }

              public function getMobilePhone(){
              	return $this->mobilePhone;
              }
                                                                                                                                            }





        
 

