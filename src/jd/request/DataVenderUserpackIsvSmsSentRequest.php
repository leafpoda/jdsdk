<?php
class DataVenderUserpackIsvSmsSentRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.data.vender.userpack.isv.sms.sent";
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
                                                        		                                    	                        	                        	                        	                   			private $fullContent;
    	                                                            
	public function setFullContent($fullContent){
		$this->fullContent = $fullContent;
         $this->apiParas["full_content"] = $fullContent;
	}

	public function getFullContent(){
	  return $this->fullContent;
	}

                        	                        	                   			private $receivePhone;
    	                                                            
	public function setReceivePhone($receivePhone){
		$this->receivePhone = $receivePhone;
         $this->apiParas["receive_phone"] = $receivePhone;
	}

	public function getReceivePhone(){
	  return $this->receivePhone;
	}

                        	                   			private $assetToken;
    	                                                            
	public function setAssetToken($assetToken){
		$this->assetToken = $assetToken;
         $this->apiParas["asset_token"] = $assetToken;
	}

	public function getAssetToken(){
	  return $this->assetToken;
	}

                            }





        
 

