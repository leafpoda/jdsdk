<?php
class KuaicheZnPlanSearchKeywordUpdateRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.kuaiche.zn.plan.search.keyword.update";
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
                                    	                        	                        	                   			private $planId;
    	                                                            
	public function setPlanId($planId){
		$this->planId = $planId;
         $this->apiParas["plan_id"] = $planId;
	}

	public function getPlanId(){
	  return $this->planId;
	}

                        	                   			private $keywordPrice;
    	                                                            
	public function setKeywordPrice($keywordPrice){
		$this->keywordPrice = $keywordPrice;
         $this->apiParas["keyword_price"] = $keywordPrice;
	}

	public function getKeywordPrice(){
	  return $this->keywordPrice;
	}

}





        
 

