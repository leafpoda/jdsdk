<?php
class CtpOrderGetChildAreaListRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ctp.order.getChildAreaList";
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
                                                        		                                    	                   			private $customerId;
    	                        
	public function setCustomerId($customerId){
		$this->customerId = $customerId;
         $this->apiParas["customerId"] = $customerId;
	}

	public function getCustomerId(){
	  return $this->customerId;
	}

                        	                   			private $clientPort;
    	                        
	public function setClientPort($clientPort){
		$this->clientPort = $clientPort;
         $this->apiParas["clientPort"] = $clientPort;
	}

	public function getClientPort(){
	  return $this->clientPort;
	}

                        	                   			private $channelId;
    	                        
	public function setChannelId($channelId){
		$this->channelId = $channelId;
         $this->apiParas["channelId"] = $channelId;
	}

	public function getChannelId(){
	  return $this->channelId;
	}

                        	                   			private $traceId;
    	                        
	public function setTraceId($traceId){
		$this->traceId = $traceId;
         $this->apiParas["traceId"] = $traceId;
	}

	public function getTraceId(){
	  return $this->traceId;
	}

                        	                   			private $opName;
    	                        
	public function setOpName($opName){
		$this->opName = $opName;
         $this->apiParas["opName"] = $opName;
	}

	public function getOpName(){
	  return $this->opName;
	}

                        	                   			private $clientIp;
    	                        
	public function setClientIp($clientIp){
		$this->clientIp = $clientIp;
         $this->apiParas["clientIp"] = $clientIp;
	}

	public function getClientIp(){
	  return $this->clientIp;
	}

                        	                   			private $appKey;
    	                        
	public function setAppKey($appKey){
		$this->appKey = $appKey;
         $this->apiParas["appKey"] = $appKey;
	}

	public function getAppKey(){
	  return $this->appKey;
	}

                                                                        		                                    	                   			private $parentId;
    	                        
	public function setParentId($parentId){
		$this->parentId = $parentId;
         $this->apiParas["parentId"] = $parentId;
	}

	public function getParentId(){
	  return $this->parentId;
	}

                            }





        
 

