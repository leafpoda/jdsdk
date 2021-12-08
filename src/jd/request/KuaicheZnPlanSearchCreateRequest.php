<?php
class KuaicheZnPlanSearchCreateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.kuaiche.zn.plan.search.create";
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
                                    	                        	                        	                   			private $planInfo;
    	                                                            
	public function setPlanInfo($planInfo){
		$this->planInfo = $planInfo;
         $this->apiParas["plan_info"] = $planInfo;
	}

	public function getPlanInfo(){
	  return $this->planInfo;
	}

}





        
 

