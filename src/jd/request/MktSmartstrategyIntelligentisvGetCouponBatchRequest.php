<?php
class MktSmartstrategyIntelligentisvGetCouponBatchRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.mkt.smartstrategy.intelligentisv.getCouponBatch";
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
                                    	                   			private $putKey;
    	                        
	public function setPutKey($putKey){
		$this->putKey = $putKey;
         $this->apiParas["putKey"] = $putKey;
	}

	public function getPutKey(){
	  return $this->putKey;
	}

}





        
 

