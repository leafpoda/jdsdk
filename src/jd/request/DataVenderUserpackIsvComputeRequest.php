<?php
class DataVenderUserpackIsvComputeRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.data.vender.userpack.isv.compute";
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
                                                        		                                    	                        	                        	                        	                   			private $resultName;
    	                                                            
	public function setResultName($resultName){
		$this->resultName = $resultName;
         $this->apiParas["result_name"] = $resultName;
	}

	public function getResultName(){
	  return $this->resultName;
	}

                        	                   			private $resultDesc;
    	                                                            
	public function setResultDesc($resultDesc){
		$this->resultDesc = $resultDesc;
         $this->apiParas["result_desc"] = $resultDesc;
	}

	public function getResultDesc(){
	  return $this->resultDesc;
	}

                        	                   			private $condition;
    	                        
	public function setCondition($condition){
		$this->condition = $condition;
         $this->apiParas["condition"] = $condition;
	}

	public function getCondition(){
	  return $this->condition;
	}

                        	                   			private $callback;
    	                        
	public function setCallback($callback){
		$this->callback = $callback;
         $this->apiParas["callback"] = $callback;
	}

	public function getCallback(){
	  return $this->callback;
	}

                            }





        
 

