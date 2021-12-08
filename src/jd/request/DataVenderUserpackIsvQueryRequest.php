<?php
class DataVenderUserpackIsvQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.data.vender.userpack.isv.query";
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
                                                        		                                    	                        	                        	                        	                   			private $condition;
    	                        
	public function setCondition($condition){
		$this->condition = $condition;
         $this->apiParas["condition"] = $condition;
	}

	public function getCondition(){
	  return $this->condition;
	}

                        	                   			private $dataType;
    	                                                            
	public function setDataType($dataType){
		$this->dataType = $dataType;
         $this->apiParas["data_type"] = $dataType;
	}

	public function getDataType(){
	  return $this->dataType;
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





        
 

