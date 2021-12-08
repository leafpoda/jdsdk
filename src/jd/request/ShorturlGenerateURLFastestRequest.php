<?php
class ShorturlGenerateURLFastestRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.shorturl.generateURLFastest";
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
                                    	                   			private $domain;
    	                        
	public function setDomain($domain){
		$this->domain = $domain;
         $this->apiParas["domain"] = $domain;
	}

	public function getDomain(){
	  return $this->domain;
	}

                        	                   			private $length;
    	                        
	public function setLength($length){
		$this->length = $length;
         $this->apiParas["length"] = $length;
	}

	public function getLength(){
	  return $this->length;
	}

                        	                   			private $realUrl;
    	                        
	public function setRealUrl($realUrl){
		$this->realUrl = $realUrl;
         $this->apiParas["realUrl"] = $realUrl;
	}

	public function getRealUrl(){
	  return $this->realUrl;
	}

                        	                        	                   			private $expiredDays;
    	                        
	public function setExpiredDays($expiredDays){
		$this->expiredDays = $expiredDays;
         $this->apiParas["expiredDays"] = $expiredDays;
	}

	public function getExpiredDays(){
	  return $this->expiredDays;
	}

}





        
 

