<?php
class DlinkMonitorSendMonitorRecordsRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dlink.monitor.sendMonitorRecords";
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
                                    	                   			private $datas;
    	                        
	public function setDatas($datas){
		$this->datas = $datas;
         $this->apiParas["datas"] = $datas;
	}

	public function getDatas(){
	  return $this->datas;
	}

                        	                   			private $monitorProviderId;
    	                        
	public function setMonitorProviderId($monitorProviderId){
		$this->monitorProviderId = $monitorProviderId;
         $this->apiParas["monitorProviderId"] = $monitorProviderId;
	}

	public function getMonitorProviderId(){
	  return $this->monitorProviderId;
	}

                        	                   			private $appKey;
    	                        
	public function setAppKey($appKey){
		$this->appKey = $appKey;
         $this->apiParas["appKey"] = $appKey;
	}

	public function getAppKey(){
	  return $this->appKey;
	}

                        	                   			private $encodeRules;
    	                        
	public function setEncodeRules($encodeRules){
		$this->encodeRules = $encodeRules;
         $this->apiParas["encodeRules"] = $encodeRules;
	}

	public function getEncodeRules(){
	  return $this->encodeRules;
	}

}





        
 

