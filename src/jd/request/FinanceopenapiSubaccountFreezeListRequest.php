<?php
class FinanceopenapiSubaccountFreezeListRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.financeopenapi.subaccount.freeze.list";
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
                                    	                        	                        	                        	                        	                        	                        	                   			private $beginDate;
    	                        
	public function setBeginDate($beginDate){
		$this->beginDate = $beginDate;
         $this->apiParas["beginDate"] = $beginDate;
	}

	public function getBeginDate(){
	  return $this->beginDate;
	}

                        	                   			private $endDate;
    	                        
	public function setEndDate($endDate){
		$this->endDate = $endDate;
         $this->apiParas["endDate"] = $endDate;
	}

	public function getEndDate(){
	  return $this->endDate;
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

                        	                   			private $channels;
    	                        
	public function setChannels($channels){
		$this->channels = $channels;
         $this->apiParas["channels"] = $channels;
	}

	public function getChannels(){
	  return $this->channels;
	}

}





        
 

