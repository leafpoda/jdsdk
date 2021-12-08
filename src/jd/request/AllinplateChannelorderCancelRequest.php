<?php
class AllinplateChannelorderCancelRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.allinplate.channelorder.cancel";
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
                                    	                   			private $subcancelChannelOrderReqmitChannelOrderReq;
    	                        
	public function setSubcancelChannelOrderReqmitChannelOrderReq($subcancelChannelOrderReqmitChannelOrderReq){
		$this->subcancelChannelOrderReqmitChannelOrderReq = $subcancelChannelOrderReqmitChannelOrderReq;
         $this->apiParas["subcancelChannelOrderReqmitChannelOrderReq"] = $subcancelChannelOrderReqmitChannelOrderReq;
	}

	public function getSubcancelChannelOrderReqmitChannelOrderReq(){
	  return $this->subcancelChannelOrderReqmitChannelOrderReq;
	}

                        	}





        
 

