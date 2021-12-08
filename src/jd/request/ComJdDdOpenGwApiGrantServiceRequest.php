<?php
class ComJdDdOpenGwApiGrantServiceRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.com.jd.dd.open.gw.api.GrantService";
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

                        	                   			private $secret;
    	                        
	public function setSecret($secret){
		$this->secret = $secret;
         $this->apiParas["secret"] = $secret;
	}

	public function getSecret(){
	  return $this->secret;
	}

                        	                   			private $version;
    	                        
	public function setVersion($version){
		$this->version = $version;
         $this->apiParas["version"] = $version;
	}

	public function getVersion(){
	  return $this->version;
	}

                            }





        
 

