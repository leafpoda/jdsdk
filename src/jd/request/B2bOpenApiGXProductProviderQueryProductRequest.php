<?php
class B2bOpenApiGXProductProviderQueryProductRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.b2b.open.api.GXProductProvider.queryProduct";
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
                                                        		                                    	                   			private $jdSkuId;
    	                        
	public function setJdSkuId($jdSkuId){
		$this->jdSkuId = $jdSkuId;
         $this->apiParas["jdSkuId"] = $jdSkuId;
	}

	public function getJdSkuId(){
	  return $this->jdSkuId;
	}

                        	                   			private $jdSpuId;
    	                        
	public function setJdSpuId($jdSpuId){
		$this->jdSpuId = $jdSpuId;
         $this->apiParas["jdSpuId"] = $jdSpuId;
	}

	public function getJdSpuId(){
	  return $this->jdSpuId;
	}

                        	                   			private $venderId;
    	                        
	public function setVenderId($venderId){
		$this->venderId = $venderId;
         $this->apiParas["venderId"] = $venderId;
	}

	public function getVenderId(){
	  return $this->venderId;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $thirdCategoryId;
    	                        
	public function setThirdCategoryId($thirdCategoryId){
		$this->thirdCategoryId = $thirdCategoryId;
         $this->apiParas["thirdCategoryId"] = $thirdCategoryId;
	}

	public function getThirdCategoryId(){
	  return $this->thirdCategoryId;
	}

                        	                        	                   			private $pageIndex;
    	                        
	public function setPageIndex($pageIndex){
		$this->pageIndex = $pageIndex;
         $this->apiParas["pageIndex"] = $pageIndex;
	}

	public function getPageIndex(){
	  return $this->pageIndex;
	}

                        	                   			private $brandId;
    	                        
	public function setBrandId($brandId){
		$this->brandId = $brandId;
         $this->apiParas["brandId"] = $brandId;
	}

	public function getBrandId(){
	  return $this->brandId;
	}

                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $consumerSkuId;
    	                        
	public function setConsumerSkuId($consumerSkuId){
		$this->consumerSkuId = $consumerSkuId;
         $this->apiParas["consumerSkuId"] = $consumerSkuId;
	}

	public function getConsumerSkuId(){
	  return $this->consumerSkuId;
	}

                        	                   			private $status;
    	                        
	public function setStatus($status){
		$this->status = $status;
         $this->apiParas["status"] = $status;
	}

	public function getStatus(){
	  return $this->status;
	}

                            }





        
 

