<?php
class AllinplateChannelorderSubmitRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.allinplate.channelorder.submit";
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
                                    	                   			private $submitChannelOrderReq;
    	                        
	public function setSubmitChannelOrderReq($submitChannelOrderReq){
		$this->submitChannelOrderReq = $submitChannelOrderReq;
         $this->apiParas["submitChannelOrderReq"] = $submitChannelOrderReq;
	}

	public function getSubmitChannelOrderReq(){
	  return $this->submitChannelOrderReq;
	}

                        	}





        
 

