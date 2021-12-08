<?php
class DataVenderSubPackGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.data.vender.sub.pack.get";
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
                                                        		                                    	                   			private $parentSearchId;
    	                                                                        
	public function setParentSearchId($parentSearchId){
		$this->parentSearchId = $parentSearchId;
         $this->apiParas["parent_search_id"] = $parentSearchId;
	}

	public function getParentSearchId(){
	  return $this->parentSearchId;
	}

                        	                        	                            }





        
 

