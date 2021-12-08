<?php
class RiskSensitiveWordCheckRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.risk.sensitiveWordCheck";
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
                                                        		                                    	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                        	                   			private $clientType;
    	                        
	public function setClientType($clientType){
		$this->clientType = $clientType;
         $this->apiParas["clientType"] = $clientType;
	}

	public function getClientType(){
	  return $this->clientType;
	}

                        	                   			private $content;
    	                        
	public function setContent($content){
		$this->content = $content;
         $this->apiParas["content"] = $content;
	}

	public function getContent(){
	  return $this->content;
	}

                        	                   			private $scope;
    	                        
	public function setScope($scope){
		$this->scope = $scope;
         $this->apiParas["scope"] = $scope;
	}

	public function getScope(){
	  return $this->scope;
	}

                            }





        
 

