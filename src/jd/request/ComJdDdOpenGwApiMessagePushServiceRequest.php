<?php
class ComJdDdOpenGwApiMessagePushServiceRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.com.jd.dd.open.gw.api.MessagePushService";
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
                                                        		                                    	                   			private $aspid;
    	                        
	public function setAspid($aspid){
		$this->aspid = $aspid;
         $this->apiParas["aspid"] = $aspid;
	}

	public function getAspid(){
	  return $this->aspid;
	}

                        	                   			private $accessid;
    	                        
	public function setAccessid($accessid){
		$this->accessid = $accessid;
         $this->apiParas["accessid"] = $accessid;
	}

	public function getAccessid(){
	  return $this->accessid;
	}

                        	                   			private $accessToken;
    	                        
	public function setAccessToken($accessToken){
		$this->accessToken = $accessToken;
         $this->apiParas["accessToken"] = $accessToken;
	}

	public function getAccessToken(){
	  return $this->accessToken;
	}

                        	                   			private $version;
    	                        
	public function setVersion($version){
		$this->version = $version;
         $this->apiParas["version"] = $version;
	}

	public function getVersion(){
	  return $this->version;
	}

                        	                   			private $time;
    	                        
	public function setTime($time){
		$this->time = $time;
         $this->apiParas["time"] = $time;
	}

	public function getTime(){
	  return $this->time;
	}

                                                                        		                                    	                   			private $jsonMsg;
    	                        
	public function setJsonMsg($jsonMsg){
		$this->jsonMsg = $jsonMsg;
         $this->apiParas["jsonMsg"] = $jsonMsg;
	}

	public function getJsonMsg(){
	  return $this->jsonMsg;
	}

                            }





        
 

