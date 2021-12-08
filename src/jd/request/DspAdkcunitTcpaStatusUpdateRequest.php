<?php
class DspAdkcunitTcpaStatusUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.adkcunit.tcpa.status.update";
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
                                    	                        	                   			private $adGroupId;
    	                        
	public function setAdGroupId($adGroupId){
		$this->adGroupId = $adGroupId;
         $this->apiParas["adGroupId"] = $adGroupId;
	}

	public function getAdGroupId(){
	  return $this->adGroupId;
	}

                        	                   			private $tcpaBidStr;
    	                        
	public function setTcpaBidStr($tcpaBidStr){
		$this->tcpaBidStr = $tcpaBidStr;
         $this->apiParas["tcpaBidStr"] = $tcpaBidStr;
	}

	public function getTcpaBidStr(){
	  return $this->tcpaBidStr;
	}

                        	                   			private $automatedBiddingType;
    	                        
	public function setAutomatedBiddingType($automatedBiddingType){
		$this->automatedBiddingType = $automatedBiddingType;
         $this->apiParas["automatedBiddingType"] = $automatedBiddingType;
	}

	public function getAutomatedBiddingType(){
	  return $this->automatedBiddingType;
	}

                        	}





        
 

