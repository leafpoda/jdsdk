<?php
class DropshipDpsPartitionStockInfoQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dropship.dps.partitionStockInfo.query";
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
                                                             	                        	                                                                                                                                                                                                                                                                                                               private $sku;
                              public function setSku($sku ){
                 $this->sku=$sku;
                 $this->apiParas["sku"] = $sku;
              }

              public function getSku(){
              	return $this->sku;
              }
                                                                                                                                                                                                                                                                                                                                              private $storeId;
                              public function setStoreId($storeId ){
                 $this->storeId=$storeId;
                 $this->apiParas["storeId"] = $storeId;
              }

              public function getStoreId(){
              	return $this->storeId;
              }
                                                                                                                                                                                                                                                                                                                                              private $page;
                              public function setPage($page ){
                 $this->page=$page;
                 $this->apiParas["page"] = $page;
              }

              public function getPage(){
              	return $this->page;
              }
                                                                                                                                                                                                                                                                                                                                              private $pageSize;
                              public function setPageSize($pageSize ){
                 $this->pageSize=$pageSize;
                 $this->apiParas["pageSize"] = $pageSize;
              }

              public function getPageSize(){
              	return $this->pageSize;
              }
                                                                                                                                        	}





        
 

