<?php
class CeoddRecomRuleCheckRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ceodd.recom.rule.check";
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
                                    	                        	                   			private $ruleInfo;
    	                        
	public function setRuleInfo($ruleInfo){
		$this->ruleInfo = $ruleInfo;
         $this->apiParas["ruleInfo"] = $ruleInfo;
	}

	public function getRuleInfo(){
	  return $this->ruleInfo;
	}

}





        
 

