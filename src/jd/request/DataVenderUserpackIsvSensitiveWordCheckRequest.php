<?php
class DataVenderUserpackIsvSensitiveWordCheckRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.data.vender.userpack.isv.sensitive.word.check";
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
                                    	                        	                        	                        	                   			private $smsContent;
    	                                                            
	public function setSmsContent($smsContent){
		$this->smsContent = $smsContent;
         $this->apiParas["sms_content"] = $smsContent;
	}

	public function getSmsContent(){
	  return $this->smsContent;
	}

}





        
 

