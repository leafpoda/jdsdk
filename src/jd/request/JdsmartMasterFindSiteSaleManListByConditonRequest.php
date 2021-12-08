<?php
class JdsmartMasterFindSiteSaleManListByConditonRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jdsmart.master.findSiteSaleManListByConditon";
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
                                    	                   			private $token;
    	                        
	public function setToken($token){
		$this->token = $token;
         $this->apiParas["token"] = $token;
	}

	public function getToken(){
	  return $this->token;
	}

                                            		                                    	                   			private $pageIndex;
    	                        
	public function setPageIndex($pageIndex){
		$this->pageIndex = $pageIndex;
         $this->apiParas["pageIndex"] = $pageIndex;
	}

	public function getPageIndex(){
	  return $this->pageIndex;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                                                                        		                                    	                   			private $saleManNo;
    	                        
	public function setSaleManNo($saleManNo){
		$this->saleManNo = $saleManNo;
         $this->apiParas["saleManNo"] = $saleManNo;
	}

	public function getSaleManNo(){
	  return $this->saleManNo;
	}

                        	                   			private $siteNo;
    	                        
	public function setSiteNo($siteNo){
		$this->siteNo = $siteNo;
         $this->apiParas["siteNo"] = $siteNo;
	}

	public function getSiteNo(){
	  return $this->siteNo;
	}

                        	                   			private $sellerNo;
    	                        
	public function setSellerNo($sellerNo){
		$this->sellerNo = $sellerNo;
         $this->apiParas["sellerNo"] = $sellerNo;
	}

	public function getSellerNo(){
	  return $this->sellerNo;
	}

                        	                   			private $projectNo;
    	                        
	public function setProjectNo($projectNo){
		$this->projectNo = $projectNo;
         $this->apiParas["projectNo"] = $projectNo;
	}

	public function getProjectNo(){
	  return $this->projectNo;
	}

                        	                            }





        
 

