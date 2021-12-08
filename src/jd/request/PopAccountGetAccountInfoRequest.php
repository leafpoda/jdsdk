<?php
class PopAccountGetAccountInfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.account.getAccountInfo";
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
                                                        		                                    	                        	                        	                                                                        		                                    	                   			private $accountType;
    	                        
	public function setAccountType($accountType){
		$this->accountType = $accountType;
         $this->apiParas["accountType"] = $accountType;
	}

	public function getAccountType(){
	  return $this->accountType;
	}

                        	                   			private $accountCode;
    	                        
	public function setAccountCode($accountCode){
		$this->accountCode = $accountCode;
         $this->apiParas["accountCode"] = $accountCode;
	}

	public function getAccountCode(){
	  return $this->accountCode;
	}

                            }





        
 

