<?php
class ComJdDdOpenGwApiDataServiceRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.com.jd.dd.open.gw.api.DataService";
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
                                                        		                                    	                   			private $accessid;
    	                        
	public function setAccessid($accessid){
		$this->accessid = $accessid;
         $this->apiParas["accessid"] = $accessid;
	}

	public function getAccessid(){
	  return $this->accessid;
	}

                        	                   			private $aspid;
    	                        
	public function setAspid($aspid){
		$this->aspid = $aspid;
         $this->apiParas["aspid"] = $aspid;
	}

	public function getAspid(){
	  return $this->aspid;
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

                        	                   			private $bizTimestamp;
    	                                                            
	public function setBizTimestamp($bizTimestamp){
		$this->bizTimestamp = $bizTimestamp;
         $this->apiParas["biz_timestamp"] = $bizTimestamp;
	}

	public function getBizTimestamp(){
	  return $this->bizTimestamp;
	}

                                                                        		                                    	                   			private $appid;
    	                        
	public function setAppid($appid){
		$this->appid = $appid;
         $this->apiParas["appid"] = $appid;
	}

	public function getAppid(){
	  return $this->appid;
	}

                        	                   			private $reqType;
    	                        
	public function setReqType($reqType){
		$this->reqType = $reqType;
         $this->apiParas["reqType"] = $reqType;
	}

	public function getReqType(){
	  return $this->reqType;
	}

                        	                   			private $jsonParam;
    	                        
	public function setJsonParam($jsonParam){
		$this->jsonParam = $jsonParam;
         $this->apiParas["jsonParam"] = $jsonParam;
	}

	public function getJsonParam(){
	  return $this->jsonParam;
	}

                            }





        
 

