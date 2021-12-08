<?php
class DataVenderUserpackIsvDeleteRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.data.vender.userpack.isv.delete";
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

}





        
 

