<?php
class FinanceopenapiSubaccountFreezedetailsGetRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.financeopenapi.subaccount.freezedetails.get";
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
                                    	                        	                        	                        	                        	                        	                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $subPin;
    	                        
	public function setSubPin($subPin){
		$this->subPin = $subPin;
         $this->apiParas["subPin"] = $subPin;
	}

	public function getSubPin(){
	  return $this->subPin;
	}

                        	                   			private $pk;
    	                        
	public function setPk($pk){
		$this->pk = $pk;
         $this->apiParas["pk"] = $pk;
	}

	public function getPk(){
	  return $this->pk;
	}

}





        
 

