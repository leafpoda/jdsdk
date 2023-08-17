<?php
class TestDemo1Request
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "shangling.test.demo1";
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
                                    	                   			private $bizTenantCode;
    	                        
	public function setBizTenantCode($bizTenantCode){
		$this->bizTenantCode = $bizTenantCode;
         $this->apiParas["bizTenantCode"] = $bizTenantCode;
	}

	public function getBizTenantCode(){
	  return $this->bizTenantCode;
	}

                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	}





        
 

