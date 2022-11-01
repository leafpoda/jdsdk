<?php
class PopFwOrderListwithpageRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.fw.order.listwithpage";
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
                                                        		                                    	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                        	                   			private $fwsPin;
    	                        
	public function setFwsPin($fwsPin){
		$this->fwsPin = $fwsPin;
         $this->apiParas["fwsPin"] = $fwsPin;
	}

	public function getFwsPin(){
	  return $this->fwsPin;
	}

                        	                        	                   			private $currentPage;
    	                        
	public function setCurrentPage($currentPage){
		$this->currentPage = $currentPage;
         $this->apiParas["currentPage"] = $currentPage;
	}

	public function getCurrentPage(){
	  return $this->currentPage;
	}

                        	                   			private $serviceCode;
    	                        
	public function setServiceCode($serviceCode){
		$this->serviceCode = $serviceCode;
         $this->apiParas["serviceCode"] = $serviceCode;
	}

	public function getServiceCode(){
	  return $this->serviceCode;
	}

                            }





        
 

