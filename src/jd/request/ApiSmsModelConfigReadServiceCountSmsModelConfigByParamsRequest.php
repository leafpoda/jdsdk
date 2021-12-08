<?php
class ApiSmsModelConfigReadServiceCountSmsModelConfigByParamsRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.api.SmsModelConfigReadService.countSmsModelConfigByParams";
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
                                                        		                                    	                                                                        		                                    	                   			private $serveType;
    	                        
	public function setServeType($serveType){
		$this->serveType = $serveType;
         $this->apiParas["serveType"] = $serveType;
	}

	public function getServeType(){
	  return $this->serveType;
	}

                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $businessType;
    	                        
	public function setBusinessType($businessType){
		$this->businessType = $businessType;
         $this->apiParas["businessType"] = $businessType;
	}

	public function getBusinessType(){
	  return $this->businessType;
	}

                        	                            }





        
 

