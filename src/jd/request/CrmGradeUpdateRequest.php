<?php
class CrmGradeUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.crm.grade.update";
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
                                    	                        	                   	                    		private $amount;
    	                        
	public function setAmount($amount){
		$this->amount = $amount;
         $this->apiParas["amount"] = $amount;
	}

	public function getAmount(){
	  return $this->amount;
	}

                        	                   	                    		private $count;
    	                        
	public function setCount($count){
		$this->count = $count;
         $this->apiParas["count"] = $count;
	}

	public function getCount(){
	  return $this->count;
	}

}





        
 

