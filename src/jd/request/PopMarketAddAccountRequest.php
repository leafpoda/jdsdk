<?php
class PopMarketAddAccountRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.market.addAccount";
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
                                                        		                                    	                   			private $appName;
    	                        
	public function setAppName($appName){
		$this->appName = $appName;
         $this->apiParas["appName"] = $appName;
	}

	public function getAppName(){
	  return $this->appName;
	}

                        	                        	                   			private $ip;
    	                        
	public function setIp($ip){
		$this->ip = $ip;
         $this->apiParas["ip"] = $ip;
	}

	public function getIp(){
	  return $this->ip;
	}

                                                                        		                                    	                   			private $accountType;
    	                        
	public function setAccountType($accountType){
		$this->accountType = $accountType;
         $this->apiParas["accountType"] = $accountType;
	}

	public function getAccountType(){
	  return $this->accountType;
	}

                        	                   			private $accountId;
    	                        
	public function setAccountId($accountId){
		$this->accountId = $accountId;
         $this->apiParas["accountId"] = $accountId;
	}

	public function getAccountId(){
	  return $this->accountId;
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





        
 

