<?php
class DataVenderUserpackIsvCreateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.data.vender.userpack.isv.create";
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
                                                        		                                    	                        	                        	                        	                   			private $searchId;
    	                                                            
	public function setSearchId($searchId){
		$this->searchId = $searchId;
         $this->apiParas["search_id"] = $searchId;
	}

	public function getSearchId(){
	  return $this->searchId;
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

                            }





        
 

