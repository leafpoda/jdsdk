<?php
class PaipaiSopUserJsfServiceIsItEnterpriseUserRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.paipai.sopUserJsfService.isItEnterpriseUser";
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
                                    	                   			private $josOpenId;
    	                        
	public function setJosOpenId($josOpenId){
		$this->josOpenId = $josOpenId;
         $this->apiParas["josOpenId"] = $josOpenId;
	}

	public function getJosOpenId(){
	  return $this->josOpenId;
	}

                        	                        	}





        
 

