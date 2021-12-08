<?php
class InteractCenterApiServiceReadGetFreeCouponInfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.interact.center.api.service.read.getFreeCouponInfo";
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

                        	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                        	                   			private $channel;
    	                        
	public function setChannel($channel){
		$this->channel = $channel;
         $this->apiParas["channel"] = $channel;
	}

	public function getChannel(){
	  return $this->channel;
	}

                                                                        		                                    	                   			private $prizeType;
    	                        
	public function setPrizeType($prizeType){
		$this->prizeType = $prizeType;
         $this->apiParas["prizeType"] = $prizeType;
	}

	public function getPrizeType(){
	  return $this->prizeType;
	}

                        	                   			private $batchKeyUrl;
    	                        
	public function setBatchKeyUrl($batchKeyUrl){
		$this->batchKeyUrl = $batchKeyUrl;
         $this->apiParas["batchKeyUrl"] = $batchKeyUrl;
	}

	public function getBatchKeyUrl(){
	  return $this->batchKeyUrl;
	}

                        	                   			private $putKey;
    	                        
	public function setPutKey($putKey){
		$this->putKey = $putKey;
         $this->apiParas["putKey"] = $putKey;
	}

	public function getPutKey(){
	  return $this->putKey;
	}

                            }





        
 

